<?php
include 'database.php';
$MaSach=$_GET['MaSach'];
$db = New database();
$db->setSQL("DELETE FROM sach Where MaSach=?");
$kq=$db->executeSql([$MaSach]);

if($kq){
    echo "Xoa sach thanh cong";
}
else{
    echo " xoa sach that bai";
}
?>
<a href="index.php">Trang chu</a>