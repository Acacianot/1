<?php
include 'Config.php';
class Database{
    var $sql;// chứa chuỗi lệnh truy vấn sql
    var $conn;// kết nối csdl qua PDO
    var $st; //Statment dùng để prepare và exec
    function __construct()
    {
        try{
            $this ->conn= new PDO(
                'mysql:host=' . DB_HOST . ';charset=utf8;dbname='  . DB_NAME,
                DB_USER,
                DB_PASS
            );
            $this ->conn->setattribute(3, 2);
        }catch (Exception $e) {
            echo $e ->getMessage();
        }
    
    }
    function setSQL($sql)
    {
        $this ->sql = $sql;
    }

    function layDanhSach($params=[])
    {
        try{
            $this->st = $this->conn->prepare($this->sql);
            $this->st->execute($params);
            return $this->st->fetchAll(pdo::FETCH_OBJ);
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    function them($params=[])
    {
        try{
            $this->setSql("INSERT INTO `sach`(`MaSach`, `TenSach`, `MaTacGia`, `NXB`, `NamXB`, `MaTheLoai`)VALUE (?,?,?,?,?,?)");
            $this->executeSql($params);
    }catch(Exceoption $th){
    throw $th;
}
}
    function sua($params = [])
    {
        $sql="UPDATE sach SET `MaSach`=?, `TenSach`=?, `MaTacGia`=?, `NXB`=?, `NamXB`=?, `MaTheLoai`=? WHERE `id`=?";
        $this->db->setSql($sql);
        return $this->db->excuteSql($params);
    }
function executeSql($params=[])
{
    try{
        $this->st = $this->conn->prepare($this->sql);
        return $this->st->execute($params);
    }catch (PDOException $e) {
echo $e->getMessage();
    }
}
function laysach($params=[])
{
    try{
        $this->st = $this->conn->prepare($this->sql);
        $this->st->execute($params);
        return $this->st->fetch(pdo::FETCH_OBJ);
    } catch (PDOException $e){
        echo $e->getMessage();
        return false;
    }
}
}


?>
