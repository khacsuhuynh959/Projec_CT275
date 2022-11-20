<?php 
    $dh = new donhang();
?>

<div class="row main-admin">
    <div><h4 class="name-item-admin">ĐƠN HÀNG</h4></div>
    <table class="table margin-top">
            <thead>
                <tr>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Mã khách hàng</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Ngày đặt hàng</th>
                    <th scope="col">Ngày giao hàng</th>
                </tr>
            </thead>
        <?php
            $dsdh = $dh->lietke();
    
            while($row = $dsdh->fetch_array()) {
        ?>
            <tbody>
                <tr>
                    <td><?php echo $row['Ma_Don'] ?></td>
                    <td><?php echo $row['KH_Ma'] ?></td>
                    <td><?php echo $row['TongTien'] ?></td>
                    <td><?php echo $row['NgayDH'] ?></td>
                    <td><?php echo $row['NgayGH'] ?></td>
                </tr>
            </tbody>
        
        <?php } ?>
    </table>
</div>