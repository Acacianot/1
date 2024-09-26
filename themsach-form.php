<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THÊM SÁCH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="card">
                <div class="card-header bg-primary">
                    <h2 class="float-start text-white">THÊM SÁCH MỚI</h2>
                    <h2 class="float-end "><a href="index.php" class="btn btn-danger">Back</a> </h2>
                </div>
                <div class="col-md-8 mt-4">
                    <div class="card-body">

                        <form action="themsach.php" method="post">
                            <div class="mb-3">
                                <label>Mã Sách</label>
                                <input type="text" name="MaSach" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label>Tên Sách</label>
                                <input type="text" name="TenSach" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mã Tác Giả</label>
                                <input type="text" name="MaTG" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mã thể loại</label>
                                <input type="text" name="MaTL" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Nhà Xuất Bản</label>
                                <input type="text" name="NXB" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Năm XB</label>
                                <input type="text" name="NgayXB" class="form-control">
                            </div>

                            <div class="mb-3 float-end">
                                <input type="submit" name="add" value="Thêm sách" class="btn btn-primary">
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