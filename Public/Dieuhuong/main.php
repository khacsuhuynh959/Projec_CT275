

<?php 
    if(isset($_GET['action'])) {
        $temp = $_GET['action'];
    } else {
        $temp = '';
    }

    if($temp == 'trangchu') {
        include('include/trangchu.php');
    }elseif($temp == 'brand') {
        include('include/product.php');
    }elseif($temp == 'gioithieu'){
        include('include/gioithieu.php');
    }elseif($temp == 'timkiem'){
        include('include/timkiem.php');
    }

    else{
        include('include/trangchu.php');
    }

?>