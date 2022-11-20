<?php
    require_once('controller/xulydangky.php');
?>

<?php
    $dk = new dangky();
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $makh = 'KH'.rand(0,999999);
        $hoten = $_POST['hoten'];
        $ngaysinh = $_POST['ngaysinh'];
        $sdt = $_POST['sdt'];
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $Cfpass = $_POST['cfpassword'];

        $result = $dk->dangky_kh($makh,$hoten,$sdt,$ngaysinh,$username,$pass,$Cfpass);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../icon/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.css">
    <script src="../Bootstrap/js/jquery-3.6.0.min.js"></script>
    <script src="../Bootstrap/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Đăng Ký</title>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-bottom: 60px;">
            <div class="col-md-6 offset-md-3">
                <div class="form-dky">
                    <form class="padding-form" method = "POST" autocomplete = "off" action="dangky.php">
                        <div>
                            <p style ="text-align: center; font-weight: Bold; font-size: 30px" class = "key-color">ĐĂNG KÝ</p>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Họ tên</label>
                            <input type="text" class="form-control" placeholder = "Nhập họ tên của bạn" name="hoten" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Ngày Sinh</label>
                            <input type="date" class="form-control" name="ngaysinh" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" placeholder = "Số điện thoại" name="sdt" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tên đăng nhập</label>
                            <input type="text" class="form-control" placeholder = "Tên đăng nhập" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" placeholder = "Nhập mật khẩu" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" placeholder = "Nhập lại mật khẩu" name="cfpassword" required>
                        </div>
                        <!-- Error khi đăng ký -->
                        <?php if(isset($result)) {
                            echo $result;
                        } ?>
                        <!--End Error khi đăng ký -->
                        <button style = "font-size: 20px; font-weight: bold; margin-top: 20px;" type="submit" class="btn btn-dky white-color">Đăng ký</button>
                        <div class="mb-3 formdk-dn" style="display: flex; justify-content: space-between;">
                            <p><a href="index.php">Quay lai trang chủ</a></p>
                            <p>bạn đã có tài khoản tài khoản ? <a href="login.php">Đăng nhập</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>