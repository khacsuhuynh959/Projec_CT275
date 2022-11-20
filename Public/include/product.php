<?php
    require_once('controller/quanlypublic.php');
?>

<?php
    if(isset($_GET['trangdm'])) {
        $page = $_GET['trangdm'];
    } else {
        $page = 1;
    }
    if($page == '' || $page == 1) {
        $pagedm = 1;
    } else {
        $pagedm = ($page*12)-12;
    }
    $product_iddm = new product();
    $iddm = $_GET['iddm'];
    $ds_product_iddm_page = $product_iddm->ds_product_iddm_page($iddm,$pagedm);
?>
<div class="row" style="margin-bottom: 30px;">
    <div class="col-12 padding-b-20">
        <div class="row padding-l-20">
            <?php
                while ($row = $ds_product_iddm_page->fetch_array()) {
                    $link_anh = '../img/'.$row['anh'];
            ?>
                    <div href="#" class="card padding" style="width: 12.2rem;">
                        <img src="<?php echo $link_anh;?>" class="card-img-top padding_5">
                        <div class="card-body">
                            <h5 class="card-title name-color"><?php echo $row['ten_sp'] ;?></h5>
                            <p class="card-text color-price">Giá: <?php echo number_format($row['gia'],0,',','.').' vnd';?></p>
                            <a href="giohang.php?action=themgiohang&idsp=<?php echo $row['ma_sp'] ;?>" class="btn btn-dky white-color" style ="font-weight:bold;">Mua hàng</a>
                        </div>
                    </div>
            <?php 
                } 
            ?>
        </div>

        <?php 
            $ds_product_iddm = $product_iddm->ds_product_iddm($iddm);
            $SoSP = mysqli_num_rows($ds_product_iddm);
            $sotrang = ceil($SoSP/12);
        ?>
    </div>
    <div class="text-center padding-l-20">
        <div class="btn-group me-2" role="group" aria-label="Second group">
            <?php 
                for($i=1 ; $i<=$sotrang; $i++) {
            ?>
                <a <?php if($i==$page) { echo "style = 'background-color: #f12711; color: white;'"; }; ?> href="?action=brand&iddm=<?php echo $iddm; ?>&trangdm=<?php echo $i; ?>" class="btn btn-secondary"><?php echo $i; ?></a>
            <?php } ?>
        </div>
    </div>
</div>
