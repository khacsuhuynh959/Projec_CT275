<?php 
    $sanpham = new sanpham();

    if(isset($_GET['idsp'])) {
        $idsp = $_GET['idsp'];
        $xoa = $sanpham->xoasanpham($idsp);
    }
?>

<div class="row main-admin">
    <div class="header-body-admin">
        <h4 class="name-item-admin">SẢN PHẨM</h4>
        <a href="?action=themsp" class="btn btn-primary">Thêm sản phẩm</a>
    </div>
    <?php 
            if(isset($xoa)) {
                echo $xoa;
            }
        ?>
    <table class="table margin-top">
        <thead>
            <tr class="center">
                <th scope="col" width = "8%">Mã SP</th>
                <th scope="col" width = "8%">Mã DM</th>
                <th scope="col" width = "12%">Tên SP</th>
                <th scope="col" width = "10%">Số lượng</th>
                <th scope="col" width = "12%">Giá</th>
                <th scope="col" width = "10%">Ảnh</th>
                <th scope="col" width = "21%">Nội dung</th>
                <th scope="col" width = "17%">Quản lí</th>
            </tr>
        </thead>
        <?php
            $result = $sanpham->lietke();
            while ($row = $result->fetch_array()) {
                $link_anh = "../img/".$row['anh'];
        ?>
                <tbody style="font-size:13px;" class="center">
                    <tr class="padding_t_10px">
                        <td><?php echo $row['ma_sp'] ?></td>
                        <td><?php echo $row['ma_dm'] ?></td>
                        <td style = "text-align: left;"><?php echo $row['ten_sp'] ?></td>
                        <td><?php echo $row['so_luong'] ?></td>
                        <td><?php echo $row['gia'] ?></td>
                        <td><?php echo "<img src='$link_anh' class='img-pd card-img-top'>"; ?></td>
                        <td style = "padding-right: 15px; text-align: left;"><?php echo $row['noidung'] ?></td>

                        <td>
                        <div class="d-grid gap-2 d-md-block">
                            <a href="?action=suaSP&idsp=<?php echo $row['ma_sp'];?>"><button class="btn btn-fs" type="button"><img class="quanli" src="../icon/edit.png" alt=""></button></a>
                            <a onclick = "return confirm('Bạn có chắc chắn muốn xóa?')" href="?action=QLSP&idsp=<?php echo $row['ma_sp'];?>"><button class= "btn btn-fs" type="button"><img class="quanli" src="../icon/delete.png" alt=""></button></a>
                        </div>
                        </td>
                    </tr>
                </tbody>
        <?php
            }
        ?>
    </table>
</div>