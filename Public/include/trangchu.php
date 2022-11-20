<?php
    require_once('controller/quanlypublic.php');
?>

<?php
    if(isset($_GET['trangdm']) ) {
        $page = $_GET['trangdm'];
    } else {
        $page = 1;
    }
    if($page == '' || $page == 1) {
        $pagedm = 1;
    } else {
        $pagedm = ($page*12)-12;
    }
    $product = new product();
    $ds_product_pt = $product->ds_product_page($pagedm);    
?>
<div class="row" style="margin-bottom: 30px;">
    <div class="col-12 padding-b-20">
        <div class="row padding-l-20">
            <?php
                while ($row = $ds_product_pt->fetch_array()) {
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
    </div>
    <div class="text-center padding-l-20">
        <?php 
            $ds_product = $product->ds_product();
            $SoSP = mysqli_num_rows($ds_product);
            $sotrang = ceil($SoSP/12);
        ?>
        <div class="btn-group me-2" role="group" aria-label="Second group">
            <?php 
                for($i=1 ; $i<=$sotrang; $i++) {
            ?>
                <a <?php if($i==$page) { echo "style = 'background-color: #56ccf2; color: white;'"; }; ?> href="?action=trangchu&trangdm=<?php echo $i; ?>" class="btn btn-secondary"><?php echo $i; ?></a>
            <?php } ?>
        </div>
    </div>
</div>
