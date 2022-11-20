<?php
    include('controller/quanlyadmin.php');
?>

<?php
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = '';
    }

    if($action == 'TC') {
        include('modules/dashboard/dashboard.php');
    } elseif($action == 'QLDM' || ($action == 'QLDM' && isset($_GET['iddm']))) {
        include('modules/quanliDM/lietke.php');
    } elseif($action == 'QLSP') {
        include('modules/quanliSP/lietke.php');
    }elseif($action == 'QLSP' || ($action == 'QLSP' && isset($_GET['idsp']))) {
        include('modules/quanliSP/lietke.php');
    } elseif($action == 'TKKH') {
        include('modules/quanliKH/lietkeKH.php');
    } elseif($action == 'DH') {
        include('modules/quanliDH/xuatdonhang.php');
    } elseif($action == 'themDM') {
        include('modules/quanliDM/them.php');
    } elseif($action == 'suaDM'){
        include('modules/quanliDM/sua.php');
    } elseif($action == 'suasp'){
        include('modules/quanliSP/sua.php');
    } elseif($action == 'themsp'){
        include('modules/quanliSP/them.php');
    }elseif($action == 'suaSP'){
        include('modules/quanliSP/sua.php');
    }
    else{
        include('modules/dashboard/dashboard.php');
    }
    
  
?>