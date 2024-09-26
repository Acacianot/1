<?php
include 'database.php';
$MaSach = $_POST['MaSach'];
$TenSach = $_POST['TenSach'];
$MaTG = $_POST['MaTG'];
$MaTL = $_POST['MaTL'];
$NgayXB = $_POST['NgayXB'];
$NXB = $_POST['NXB'];

$db = new Database();

try{
    $db->them([$MaSach,$TenSach,$MaTG,$NXB,$NgayXB,$MaTL]);
    echo "Them sach thanh cong";
}catch(Exception $e){
    echo "them sach that bai! <br>". $e->getMessage();

}
?>
<br>
<a href="index.php">trang chu</a>