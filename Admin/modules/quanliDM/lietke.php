<?php
    $list = new danhmuc();

    if(isset($_GET['iddm'])) {
        $iddm = $_GET['iddm'];
        $xoa = $list->xoadanhmuc($iddm);
    }
?>
<div class="row main-admin">
    <div class="header-body-admin">
        <h4>Danh Mục</h4>
        <a href="?action=themDM" class="btn btn-primary">Thêm danh mục</a>
    </div>
        <?php 
            if(isset($xoa)) {
                echo $xoa;
            }
        ?>
        <table class="table margin-top">
            <thead>
                <tr>
                    <th scope="col" style="width: 30%;">Mã danh mục</th>
                    <th scope="col" style="width: 30%;">Tên danh mục</th>
                    <th scope="col" style="padding-left: 35px; width: 15%" scope="col">Ảnh</th>
                    <th scope="col" style="width: 25%; text-align: center;">Quản lý</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = $list->lietke();

                    while($row = $result->fetch_array()) {
                        $link = "../img/".$row['anh'];
                ?>
                <tr>
                    <td><?php echo $row['ma_dm']; ?></td>
                    <td style="text-align: left;"><?php echo $row['ten']; ?></td>
                    <td><img class="img-pd card-img-top" src=" <?php echo $link; ?> " alt=""></td>
                    <td>
                    <div class="d-grid gap-2 d-md-block text-center">
                        <a href="?action=suaDM&iddm=<?php echo $row['ma_dm'];?>"><button class="btn" type="button"><img class="quanli" src="../icon/edit.png" alt=""></button></a>
                        <a onclick = "return confirm('Bạn có chắc chắn muốn xóa?')" href="?action=QLDM&iddm=<?php echo $row['ma_dm'];?>"><button class="btn" type="button"><img class="quanli" src="../icon/delete.png" alt=""></button></a>
                    </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
</div>