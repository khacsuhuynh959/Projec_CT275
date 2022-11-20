<?php
    require_once('model/session.php');
    require_once('controller/xulygiohang.php');
    $giohang = new giohang();
    if(isset($_GET['action'])){
        if($_GET['action'] == 'themgiohang') {
            $idsp = $_GET['idsp'];
            $result = $giohang->add_cart($idsp);
        }elseif($_GET['action'] == 'cong') {
            $giohang->cong($_GET['idsp']);
        }elseif($_GET['action'] == 'tru') {
            $giohang->tru($_GET['idsp']);
        }elseif($_GET['action'] == 'xoagiohang'){
            $giohang->xoa($_GET['idsp']);
        }
    }
?>
<div class="row col-2 padding padding_tb">
    <h3>Giỏ hàng</h3>
</div>   
<div>
    <!-- <a href="index.php?action=TC" style="background-color: #f12711; border-color: #f12711;" class="btn btn-primary">Tiếp tục mua hàng</a> -->
</div>
<div class="row">
    <?php         
        if(session::checkSession('product') == true) {
            if(count($_SESSION['product'])>0 ) {
                $i = 0;
                echo '<table class="table cart">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>';
                $Tong_tien = 0;
                foreach ($_SESSION['product'] as $cart_item) {
                    $idsp = $cart_item['id'];
                    $SUM = $cart_item['giasp'] * $cart_item['soluong'];
                    $Tong_tien += $SUM;
                    $link_anh = '../img/'.$cart_item['hinhanh'];
                    $i++;
    ?>

                    <tbody class="cart-body-border">
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><img src="<?php echo $link_anh; ?>" class="img-cart" alt=""></td>
                            <td><?php echo $cart_item['tensanpham']; ?></td>
                            <td>
                                <div>
                                    <a href="giohang.php?action=cong&idsp=<?php echo $idsp;?>" class="btn btn-warning">+</a>
                                    <?php echo $cart_item['soluong']; ?>
                                    <a href="giohang.php?action=tru&idsp=<?php echo $idsp;?>" class="btn btn-warning">-</a>
                                </div>
                            </td>
                            <td><?php echo number_format($cart_item['giasp'],0,',','.'); ?></td>
                            <td><?php echo number_format($SUM,0,',','.'); ?></td>
                            <td><a href="giohang.php?action=xoagiohang&idsp=<?php echo $idsp;?>" class="btn btn-outline-light btn-dky">Xóa</a></td>
                        </tr>
                    <?php
                    if($i == count($_SESSION['product'])) {    
                    ?> 
                        <tr>
                            <td>Tổng Tiền: </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?php echo number_format($Tong_tien,0,',','.'); ?></td>
                            <td><a href="?action=dathang&user=<?php echo $_SESSION['loginkh'] ?>" class="btn btn-outline-light btn-dky">Đặt hàng</a></td>
                        </tr>
                    <?php 
                    } 
                    ?>
                    </tbody>
                    <?php 
                    } 
                    ?>

    <?php 
    echo '</table>';
    }else { 
    ?>
        <h4 class="no-product key-color">Giỏ hàng trống</h4>
        <?php 
    }
    } else {
    ?>
        <div class="col-10 flex-1 margin-top">
        <div class="cart-empty">
        <img style="width: 30%;" src="../img/cart-empty.png" alt="">
        <h4 class="no-product key-color margin-top">Giỏ hàng trống</h4>
        <a href="index.php?action=TC" style="background-color: #56ccf2; border-color: #56ccf2;" class="btn btn-primary">Tiếp tục mua hàng</a>
        </div>

        </div>
    <?php 
    }
    ?>
</div>
