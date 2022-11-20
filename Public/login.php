<?php
    require_once('controller/loginkh.php');
    require_once('model/session.php');
    session::init();
?>

<?php
    $class = new login();
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = $_POST['username_KH'];
        $pass = $_POST['pass_KH'];
        $login_check = $class->login_KH($user,$pass);
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
    <title>Đăng nhập</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-dky">
                    <form class="padding-form" method = "POST" autocomplete = "off" action="login.php">
                        <div>
                            <p style ="text-align: center; font-weight: Bold; font-size: 30px" class = "key-color">ĐĂNG NHẬP</p>
                        </div>
                        <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" name="username_KH" required>
                            <span class="input-group-text">
                                <img style="width: 20px;" src="../icon/user.png" alt="">
                            </span>
                        </div>
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="pass_KH" required>
                            <span class="input-group-text">
                                <img style="width: 20px;" src="../icon/padlock.png" alt="">
                            </span>
                        </div>
                        <!-- Error khi login -->
                        <span class="error">
                            <?php 
                                if(isset($login_check)) {
                                    echo $login_check;
                                }
                            ?>
                        </span>
                        <!--End Error khi login -->
                        <button style = "font-size: 20px; font-weight: bold; margin-top: 20px;" type="submit" class="btn btn-dky white-color" name="login_KH">Đăng nhập</button>
                        <div class="mb-3 formdk-dn" style="display: flex; justify-content: space-between;">
                            <p><a href="index.php">Quay lai trang chủ</a></p>
                            <p>bạn chưa có tài khoản ? <a href="dangky.php">Đăng ký</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>