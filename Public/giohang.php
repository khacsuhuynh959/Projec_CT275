<?php
    require_once('Model/session.php');
    require_once('controller/xulygiohang.php');
    session::init();
    if(session::checkSession('loginkh') == false){
        header('Location: login.php');
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
    <title>Kiwii Shop</title>
</head>
<body>
    <div class="container container-height" style="display: flex; flex-direction: column ;justify-content: space-between; ">
        <!-- Header -->
        <a href="index.php">
            <div class="row align-item-ct bg-color">
                <div class="col-1 center padding padding_tb">
                    <img src="../img/logokiwijpg-removebg-preview.png" class="logo"> 
                </div>
                
                <div class="col-2 padding padding_tb">
                    <h3 class="nameBrand">Kiwii Shop</h3>
                </div>
            </div>   
        </a>
        <!-- End header -->

        <!-- body -->
        <div>
            <?php 
                if(isset($_GET['action']) && $_GET['action'] == 'dathang'){
                    include('include/muahang.php');
                } elseif(isset($_GET['action']) && ($_GET['action'] == 'dcgh' || $_GET['action'] == 'tddcgh')) {
                    include('include/diachigiaohang.php');
                }else{
                    include('include/hienthiGH.php');
                }
            ?>
        </div>
        <!-- End body -->

        <!-- Footer -->
        <div>
            <?php include ('include/footer.php');?>
        </div>
        <!-- End Footer -->
    </div>

</body>
</html>

