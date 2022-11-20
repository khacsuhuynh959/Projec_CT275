<?php
    $dm = new danhmuc();
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $maDM = $_POST['maDM'];
        $tenDM = $_POST['tenDM'];
        $img = $_FILES['anh']['name'];
        $img_tmp = $_FILES['anh']['tmp_name'];

        $add = $dm->themdanhmuc($maDM,$tenDM,$img);
        move_uploaded_file($img_tmp,'../img/'.$img);
    }
?>
<div class="row">
    <h4 class="qladmin_tittle">Thêm Danh Mục</h4>
</div>
<div class="col-md-12 flex jtf-content-ct">
    <div class="padding form-admin col-7">
        <form class="p-5 row g-3 padding" method="POST" action="index.php?action=themDM" autocomplete = "off" enctype="multipart/form-data">
            <div>
                <p style ="text-align: center; font-weight: Bold; font-size: 30px" class = "key-color-admin">THÊM DANH MỤC</p>
            </div>
            <div class="mb-3">
                <label for="inputEmail4" class="form-label">Mã Danh Mục</label>
                <input type="text" class="form-control" name = "maDM">
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Tên Danh Mục</label>
                <input type="text" class="form-control" name = "tenDM">
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Ảnh</label>
                <input type="file" class="form-control" name = "anh">
            </div>
            <div>
                <?php 
                    if(isset($add)) {
                        echo $add;
                    }
                ?>
            </div>
            <div>
                <button style = "font-weight: bold; font-size: 20px" type="submit" class="btn btn-primary btn-admin" name="themDM">Thêm</button>
            </div>
        </form>
    </div>
</div>