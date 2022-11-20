<?php
    $sp = new sanpham();
    $dm = new danhmuc();
    $indanhmuc = $dm->lietke();
    if(isset($_GET['idsp'])) {
        $id = $_GET['idsp'];
        $spselect = $sp->idsp($id);    
        $row = $spselect->fetch_array();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $masp = $_POST['maSP'];
            $madm = $_POST['maDM'];
            $ten = $_POST['tenSP'];
            $soluong = $_POST['soluongSP'];
            $gia = $_POST['giaSP'];
            $anh = $_POST['anh'];
            $anhold = $row['anh'];
            $noidung = $_POST['noidungSP'];
    
            if($anh != '') {
                unlink('../img/'.$anhold);
                $update = $sp->update($masp,$madm,$ten,$soluong,$gia,$anh,$noidung);
            }else {
                $update = $sp->update($masp,$madm,$ten,$soluong,$gia,$anhold,$noidung);
            }
        }
    }
?>

<div class="row">
    <h4 class="qladmin_tittle">Sửa sản phẩm</h4>
</div>

<div class="flex col-md-12 jtf-content-ct">
    <div class="padding form-admin col-7 mb-20">
        <form class="p-5 row g-3 padding" method="POST" action="index.php?action=suaSP&&idsp=<?php if(!isset($update)){echo $id;}; ?>">
            <div>
                <p style ="text-align: center; font-weight: Bold; font-size: 30px" class = "key-color-admin">SỬA SẢN PHẨM</p>
            </div>
           
            <div class="mb-3">
                <label for="inputEmail4" class="form-label">Mã sản phẩm</label>
                <input type="text" class="form-control" name = "maSP" value="<?php if(!isset($update)){echo $row['ma_sp'];}?>" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Danh mục</label>
                <select class="form-select" name = "maDM">
                    
                    <?php 
                        while($j = $indanhmuc->fetch_array()) {
                            if($row['ma_dm'] == $j['ma_dm']) {
                    ?>
                            <option selected value="<?php echo $j['ma_dm'] ?>"><?php echo $j['ten'] ?></option>

                    <?php } else { ?>
                            <option value="<?php echo $j['ma_dm'] ?>"><?php echo $j['ten'] ?></option>
                        <?php } 
                
                        } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name = "tenSP" value="<?php if(!isset($update)){echo $row['ten_sp'];}?>" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Số lượng</label>
                <input type="text" class="form-control" name = "soluongSP" value="<?php if(!isset($update)){echo $row['so_luong'];}?>" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Giá</label>
                <input type="text" class="form-control" name = "giaSP" value="<?php if(!isset($update)){echo $row['gia'];}?>" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" name = "anh">
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Nôi dung</label>
                <textarea type="text" class="form-control" name = "noidungSP"><?php if(!isset($update)){echo $row['noidung'];}?></textarea>
            </div>
            <?php 
                if(isset($update)){
                    echo $update;
                }
            ?>
            <div class="col-12">
                <button style = "font-weight: bold; font-size: 20px" type="submit" class="btn btn-primary btn-admin" name="suaSP">Sửa sản phẩm</button>
            </div>
       
        </form>
    </div>
</div>