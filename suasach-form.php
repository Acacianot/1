<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUA SÁCH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
        /* Vô hiệu hóa mọi tương tác với trường MaSach */
        input[readonly] {
            pointer-events: none;
            background-color: #e9ecef; /* Đặt nền màu xám nhạt để biểu thị rằng trường không thể chỉnh sửa */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="card">
                <div class="card-header bg-primary">
                    <h2 class="float-start text-white">sua sach</h2>
                    <h2 class="float-end "><a href="index.php" class="btn btn-danger">Back</a> </h2>
                </div>
                <div class="col-md-8 mt-4">
                    <div class="card-body">
                    <?php
                        // Kiểm tra xem mã sách có được truyền qua URL hay không
                        if (isset($_GET['MaSach'])) {
                            $MaSach = $_GET['MaSach'];
                        } else {
                            $MaSach = '';  // Gán giá trị rỗng nếu không có mã sách
                        }
                        ?>
                        <form action="suasach.php" method="post">
                            <div class="mb-3">
                                <label>Mã Sách</label>
                                <input type="text" name="MaSach" class="form-control" value="<?php echo isset($MaSach) ? $MaSach : ''; ?>" readonly>
                                <input type="hidden" name="MaSach" value="<?php echo isset($MaSach) ? $MaSach : ''; ?>"> <!-- Trường ẩn cho mã sách -->
                            </div>
                            <div class="mb-3">
                                <label>Tên Sách</label>
                                <input type="text" name="TenSach" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mã Tác Giả</label>
                                <input type="text" name="MaTacGia" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mã thể loại</label>
                                <input type="text" name="MaTheLoai" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Nhà Xuất Bản</label>
                                <input type="text" name="NXB" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Năm XB</label>
                                <input type="text" name="NamXB" class="form-control">
                            </div>

                            <div class="mb-3 float-end">
                                <input type="submit" name="add" value="SUA sách" class="btn btn-primary">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>