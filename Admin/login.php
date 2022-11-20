<?php
    include('controller/loginadmin.php');
?>

<?php
    $class = new login();
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = $_POST['username_ad'];
        $pass = $_POST['pass_ad'];
        $login_check = $class->login_ad($user, $pass);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../icon/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.css">
    <script src="../Bootstrap/js/jquery-3.6.0.min.js"></script>
    <script src="../Bootstrap/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Đăng nhập admin</title>
</head>
<body>
    <div class="container">
        <!-- <div class="row align-item-ct bg-color">
            <div class="col-1 center padding padding_tb">
                <img src="../img/favicon_created_by_logaster.ico" class="logo"> 
            </div>
            
            <div class="col-2 padding padding_tb">
                <h3 class="nameBrand">Mobile Store</h3>
            </div>
            <div class="col-3 padding padding_tb">
                <h3 class="nameBrand white-color">Đăng nhập admin</h3>
            </div>
           
        </div> -->
        <div class="row">
            <div class="col-md-6 offset-md-3">
                    <div class="form-dky">
                        <form class="p-5" method = "POST" autocomplete = "off" action="login.php">
                            <div>
                                <p style ="text-align: center; font-weight: Bold; font-size: 30px" class = "key-color">ĐĂNG NHẬP ADMIN</p>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
                                <input type="text" class="form-control" placeholder="Username" name="username_ad" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" placeholder="Password" name="pass_ad" required>
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
                            
                            <button style = "font-size: 20px; font-weight: bold; margin-top: 20px;" type="submit" class="btn btn-dky white-color" name="login_ad">Đăng nhập</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</body>

</html>