<?php 
    $sp = new sanpham();
    $dm = new danhmuc();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $maSP = $_POST['maSP'];
        $tenSP = $_POST['tenSP'];
        $maDM = $_POST['maDM'];
        $soluong = $_POST['soluongSP'];
        $gia = $_POST['giaSP'];
        $noidung = $_POST['noidungSP'];
        $img = $_FILES['anh']['name'];
        $img_tmp = $_FILES['anh']['tmp_name'];

        $add = $sp->themsanpham($maSP,$maDM,$tenSP,$soluong,$gia,$img,$noidung);
        move_uploaded_file($img_tmp,'../img/'.$img);
    }
?>

<div class="row">
    <h4 class="qladmin_tittle">Thêm sản phẩm</h4>
</div>
<div class="col-md-12 flex jtf-content-ct mb-20">
    <div class="padding form-admin col-7">
        <form class="p-5 row g-3 padding" autocomplete="off" method="POST" action="index.php?action=themsp" enctype="multipart/form-data">
            <div>
                <p style ="text-align: center; font-weight: Bold; font-size: 30px" class = "key-color-admin">THÊM SẢN PHẨM</p>
            </div>
            <div class="mb-3">
                <label for="inputEmail4" class="form-label">Mã sản phẩm</label>
                <input type="text" class="form-control" name = "maSP" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Thương hiệu</label> 
                <select class="form-select" name = "maDM">
                    <?php 
                        $laydm = $dm->lietke();
                        
                        while($i = $laydm->fetch_array()) {
                    ?>
                    <option value="<?php echo $i['ma_dm'] ?>"><?php echo $i['ten'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name = "tenSP" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Số lượng</label>
                <input type="text" class="form-control" name = "soluongSP" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Giá</label>
                <input type="text" class="form-control" name = "giaSP" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" name = "anh">
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Nôi dung</label>
                <textarea type="text" class="form-control" name = "noidungSP" required>
    
                </textarea>
            </div>
            <div>
                <?php 
                    if(isset($add)) {
                        echo $add;
                    }
                ?>
            </div>
            <div class="col-12">
                <button style = "font-weight: bold; font-size: 20px" type="submit" class="btn btn-primary btn-admin" name="themSP">Thêm sản phẩm</button>
            </div>
        </form>
    </div>
</div>