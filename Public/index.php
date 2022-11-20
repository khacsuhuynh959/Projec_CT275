<?php
    require_once ('model/session.php');
    session::init();
    require_once('../config/connect.php');
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
    <div class="container container-height">
        <!-- Header -->
        <?php include('include/header.php'); ?>
        <!-- End header -->

        <!-- Slider -->
        <?php include('include/Slider.php'); ?>
        <!-- End slider -->

        <!-- Sidebar -->
        <?php include ('include/sidebar.php');?>
        <!-- end sidebar -->

        <!-- Body -->
        <?php include('Dieuhuong/main.php') ?>
        <!-- End Body -->

        <!-- Footer -->
        <?php include('include/footer.php'); ?>
        <!-- End Footer -->
    </div>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
</html>