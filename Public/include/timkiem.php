<?php
    require_once('controller/quanlypublic.php');
?>

<?php
    $product = new product();
    $search_name = $_POST['search_name'];
    $ds_product = $product->ds_product_search($search_name);
?>
<div class="row" style="margin-bottom: 30px;">
    <div class="col-12 padding-b-20">
        <div class="row padding-l-20">
            <?php
                while ($row = $ds_product->fetch_array()) {
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
</div>
