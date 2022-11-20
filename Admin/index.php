<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../icon/fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.css">
    <script src="../Bootstrap/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Admin</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-2 bg-color-2 fixed" style ="height: 100vh">
                <?php include('include/brand.php') ?>
                <?php include('include/menu.php') ?>
            </div>
            <div class="col-10" style="margin-left: 253px;">
                <?php include('include/header.php'); ?>
                <?php include('modules/main.php') ?>
            </div>
        </div>
    </div>
</body>
</html>


