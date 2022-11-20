<?php 
    $dh = new donhang();
?>
<div class="row dashbroad">

    <div><h4 class="name-item-admin-dashboard">DASHBOARD</h4></div>
    <div class="col-2 dashbroad-thongke">
        <div class="icon-thongke">
            <i class="fa-solid fa-tag"></i>
        </div>
        <div class="number-thongke">
            <?php 
                echo $dh->total_hoadon();
            ?>
        </div>
        <div class="name-thongke">
            <span>Total Orders</span>
        </div>
    </div>

    <div class="col-2 dashbroad-thongke">
        <div class="icon-thongke">
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="number-thongke">
            <?php 
                echo $dh->total_users();
            ?>
        </div>
        <div class="name-thongke">
            <span>Total Users</span>
        </div>
    </div>

    <div class="col-2 dashbroad-thongke">
        <div class="icon-thongke">
            <i class="fa-solid fa-sack-dollar"></i>
        </div>
        <div class="number-thongke">
            <?php 
                echo $dh->total_money();
            ?>
        </div>
        <div class="name-thongke">
            <span>Total Sales</span>
        </div>
    </div>

    <div class="col-2 dashbroad-thongke">
        <div class="icon-thongke">
            <i class="fa-solid fa-mobile"></i>
        </div>
        <div class="number-thongke">
            <?php 
                echo $dh->total_products();
            ?>
        </div>
        <div class="name-thongke">
            <span>Total Products</span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    </div>
</div>