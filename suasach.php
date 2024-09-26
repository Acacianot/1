<?php
// Kết nối đến cơ sở dữ liệu
include('database.php');

// Tạo đối tượng Database
$db = new Database();

// Kiểm tra xem form có được submit hay không
if (isset($_POST['add'])) {
    // Lấy dữ liệu từ form
    $MaSach = isset($_POST['MaSach']) ? $_POST['MaSach'] : '';
    $TenSach = $_POST['TenSach'];
    $MaTacGia = $_POST['MaTacGia'];
    $MaTheLoai = $_POST['MaTheLoai'];
    $NXB = $_POST['NXB'];
    $NamXB = $_POST['NamXB'];

     // Kiểm tra xem các biến có giá trị hay không
     echo "MaSach: $MaSach<br>";
     echo "TenSach: $TenSach<br>";
     echo "MaTacGia: $MaTacGia<br>";
     echo "MaTheLoai: $MaTheLoai<br>";
     echo "NXB: $NXB<br>";
     echo "NamXB: $NamXB<br>";

    // Kiểm tra các trường hợp dữ liệu trống
    if (!empty($MaSach) && !empty($TenSach) && !empty($MaTacGia) && !empty($MaTheLoai) && !empty($NXB) && !empty($NamXB))
        // Cập nhật sách
    
     {
        // Tạo câu lệnh SQL để cập nhật sách
        $sql = "UPDATE sach SET TenSach=?, MaTacGia=?, MaTheLoai=?, NXB=?, NamXB=? WHERE MaSach=?";

        // Chuẩn bị dữ liệu
        $params = [$TenSach, $MaTacGia, $MaTheLoai, $NXB, $NamXB, $MaSach];

        // Cập nhật thông tin sách
        $db->setSQL($sql);
        $result = $db->executeSql($params);

        // Kiểm tra kết quả thực thi
        if ($result) {
            echo "Cập nhật thông tin sách thành công!";
        } else {
            echo "Có lỗi xảy ra khi cập nhật thông tin sách.";
        }
    } else {
        echo "Vui lòng điền đầy đủ thông tin!";
    }
}
?>
<br>
<a href="index.php">trang chu</a>