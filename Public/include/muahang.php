<?php 
    require_once('controller/xulygiohang.php');
    $muahang = new giohang();
    $user = $_SESSION['loginkh'];
    $result_address = $muahang->checkAddress($user);
    if($muahang->checkAddress($user) != false) {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ma_HD = 'HD'.rand(0,999999);
            $makh = $muahang->get_makh($_GET['user']);
            $thanhtoan = $_POST['thanhtoan'];
            $ngaydh = date('Y-m-d');
            $ngaygh = date('Y-m-d',strtotime(' + 4 day'));
                
            $result = $muahang->muahang($ma_HD,$makh,$thanhtoan,$ngaydh,$ngaygh);
        }
    } else {
        echo '<span class="error">Bạn cần phải có địa chỉ giao hàng</span>';
    }
?>
<div class="col-12 display_flex flex-colum margin-top">
    <form action="giohang.php?action=dathang&user=<?php echo $_SESSION['loginkh'] ?>" method = "POST">
        <div class="DCNH">
            <div class="DCNH-item jtf-content-spbw">
                <?php
                   if($result_address != false) {
                ?>
                    <div>
                        <div>
                            <i class="fa-solid fa-location-dot icon-location"></i>
                            <span style="font-size: 20px" class="key-color bold">Địa chỉ giao hàng</span>
                        </div>
                        <div class = "body-dcnh">
                            <?php echo $result_address; ?>
                        </div>
                    </div>
                    <div style = "flex: 1;">
                        <a style = "float: right;" href="?action=tddcgh" class = "btn btn-primary">Thay đổi địa chỉ</a>
                    </div>
                <?php } else { ?>
                            <div>
                                <i class="fa-solid fa-location-dot icon-location"></i>
                                <span>Hiện chưa có địa chỉ nhận hàng</span>
                            </div>
                            <div>
                                <a href="?action=dcgh" class = "btn btn-primary">Thêm địa chỉ nhận hàng</a>
                            </div>
                        <?php } ?>
            </div>
        </div>
        <div>
            <a href="index.php?action=TC" style="background-color: #56ccf2; border-color: #56ccf2; margin-top: 15px;" class="btn btn-primary">Tiếp tục mua hàng</a>
        </div>
        <table class="table cart">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Thành tiền</th>
                </tr>
            </thead>   
            
            <?php 
                $Tong_tien = 0;
                $i = 0;
                foreach ($_SESSION['product'] as $cart_item) {
                    $i++;
                    $idsp = $cart_item['id'];
                    $SUM = $cart_item['giasp'] * $cart_item['soluong'];
                    $Tong_tien += $SUM;
                    $link_anh = '../img/'.$cart_item['hinhanh'];
            ?>
            <tbody class="cart-body-border">
                <tr>
                    <?php
                        $temp = $cart_item['id'];
                    ?>
                    <input type="hidden" name="idsp" value="<?php echo $temp; ?>">              
                    <td><input class="outline-input" type="text" name = "stt" value = <?php echo $i; ?>></td>
                    <td>
                        <input class="outline-input" type="hidden" name = "anh" value = <?php echo $link_anh;?>>
                        <img src="<?php echo $link_anh; ?>" class="img-cart">
                    </td>
                    <td>
                        <input class="outline-input" type="hidden" name = "tensp" value ="<?php echo $cart_item['tensanpham']; ?>">
                        <?php echo $cart_item['tensanpham']; ?>
                    </td>
                    <td>
                        <input class="outline-input" type="text" name = "soluong" value ="<?php echo $cart_item['soluong']; ?>"> 
                    </td>
                    <td>
                        <input class="outline-input" type="text" name = "giasp" value ="<?php echo number_format($cart_item['giasp'],0,',','.'); ?>"> 
                    </td>
                    <td>
                        <input class="outline-input" type="hidden" name = "sum" value ="<?php echo number_format($SUM,0,',','.'); ?>"> 
                        <?php echo number_format($SUM,0,',','.'); ?>
                    </td>
                </tr>
            </tbody>
                <?php 
                    } 
                ?>          
        </table>
        <div class="hoadon">
            <div class="body-hoadon">

                <div>Tổng tiền hàng: <?php echo number_format($Tong_tien,0,',','.').' vnd' ?></div>
                <div>Phí vận chuyển: 
                    <?php 
                        $ship = 30000;
                        echo number_format($ship,0,',','.').' vnd';
                    ?>
                 </div>
                <div>Tổng thanh toán: 
                <?php 
                    $SUM = $Tong_tien + $ship;
                    echo number_format($SUM,0,',','.').' vnd';
                ?>
                </div>
                <input type="hidden" name="thanhtoan" value="<?php echo $SUM; ?>">
                <div>
                    <button class="btn btn-dky white-color margin-top" type="submit" name="muahang">Mua hàng</button>
                </div>
            </div>
        </div>
    </form>
</div>

