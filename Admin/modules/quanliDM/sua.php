<?php
    $dmsua = new danhmuc();
    if(isset($_GET['iddm'])) {
        $id = $_GET['iddm'];
        $dmselect = $dmsua->iddm($id);    
        $row = $dmselect->fetch_array();
        $check = true;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $madm = $_POST['maDM'];
            $tendm = $_POST['tenDM'];
            $anh = $_POST['anh'];
            $anhold = $row['anh'];
    
            if($anh != '') {
                unlink('../img/'.$anhold);
                $update = $dmsua->update($madm,$tendm,$anh,$id);
            }else {
                $update = $dmsua->update($madm,$tendm,$anhold,$id);
            }
        }
    }
?>

<div class="row">
    <h4 class="qladmin_tittle">Chỉnh sửa danh mục</h4>
</div>
<div class="col-md-12 flex jtf-content-ct">
    <div class="padding form-admin col-7">
        <form class="p-5 row g-3 padding" autocomplete="off" method="POST" action="index.php?action=suaDM&&iddm=<?php if(!isset($update)){echo $id;}; ?>">
            <div>
                <p style ="text-align: center; font-weight: Bold; font-size: 30px" class = "key-color-admin">SỬA DANH MỤC</p>
            </div>
            <div class="mb-3">
                <label for="inputEmail4" class="form-label">Mã Danh Mục</label>
                <input type="text" class="form-control" value = "<?php if(!isset($update)){echo $row['ma_dm'];}?>" name = "maDM" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Tên Danh Mục</label>
                <input type="text" class="form-control" value = "<?php if(!isset($update)){echo $row['ten'];}?>" name = "tenDM" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword4" class="form-label">Ảnh</label>
                <input type="file" class="form-control" name = "anh">
            </div>
            <?php 
                if(isset($update)){
                    echo $update;
                }
            ?>
            <div>
                <button style = "font-weight: bold; font-size: 20px" type="submit" class="btn btn-primary btn-admin"  name="suaDM">Sửa</button>
            </div>
    
        </form>
    </div>
</div>