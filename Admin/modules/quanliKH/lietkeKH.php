<?php 
    $kh = new khachhang();
?>

<div class="row main-admin">
    <div class="row"><h4 class="name-item-admin">KHÁCH HÀNG</h4></div>
    <table class="table margin-top">
            <thead>
                <tr>
                    <th scope="col">Mã Khách Hàng</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">Ngày Sinh</th>
                </tr>
            </thead>
        <?php
           $dskh = $kh->lietke();
    
            while($row = $dskh->fetch_array()) {
        ?>
            <tbody>
                <tr>
                    <td><?php echo $row['KH_Ma'] ?></td>
                    <td><?php echo $row['KH_Ten'] ?></td>
                    <td><?php echo $row['KH_SDT'] ?></td>
                    <td><?php echo $row['KH_NgaySinh'] ?></td>
                </tr>
            </tbody>
        
        <?php } ?>
    </table>
</div>