<?php
include 'database.php';
$db = new database();
$db -> setSQL("SELECT * FROM sach");
$data = $db -> LayDanhSach();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>Quản Lý Sách</title>
    <style>
      </style>
</head>
<body>
<h1>Quản lý sách</h1>
<a class ="btn btn-primary" href="#"><button class="button-2" style="color: red;margin-top: 70px;font-size:20px;margin-left: 70%;  " onclick="window.location.href='themsach-form.php'">Thêm sách</button></a>
<table>
                 <thead>
                    <th>Mã sách</th>
                    <th>Tên sách</th>
                    <th>Mã tác giả</th>
                    <th>NXB</th>
                    <th>Năm XB</th>
                    <th>Mã thể loại</th>
                    <th>Chức năng</th>                 
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $key =>$value){
                        ?>
                           <tr>
                            <td><?=$value->MaSach?> </td>
                            <td><?=$value->TenSach?>  </td>
                            <td><?=$value->MaTacGia?>  </td>
                            <td><?=$value->NXB?>  </td>
                            <td><?=$value->NamXB?>  </td>
                            <td><?=$value->MaTheLoai?>  </td>                        
                            <td>
                            <a href="suasach-form.php?MaSach=<?=$value->MaSach?>"><button class="button-2">Sửa</button></a>
                            <a href="xoasach.php?MaSach=<?=$value->MaSach?>"onclick=" return confirm(' Bạn có chắc muốn xóa');"><button class="button-2">Xóa</button></a>
                            </tr>
                        <?php
                        }
                       ?>
                        </tbody>
                    </table>     
                    </body>
                    </html>
