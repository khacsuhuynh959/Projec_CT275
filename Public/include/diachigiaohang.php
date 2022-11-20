<?php 
    require_once('controller/xulygiohang.php');
    $dcgh = new giohang();
    if(isset($_GET['action']) && ($_GET['action'] == 'dcgh' || $_GET['action'] == 'tddcgh' )) {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $snha = $_POST['sn'];
            $la = $_POST['la'];
            $px = $_POST['px'];
            $qh = $_POST['qh'];
            $tp = $_POST['tp'];
            $dc = $snha.'-'.$la.'-'.$px.'-'.$qh.'-'.$tp;
            $user = $dcgh->get_makh($_SESSION['loginkh']);
            if($_GET['action'] == 'dcgh') {
                $themdc = $dcgh->themdiachi($user,$dc);
            } else {
                $thaydoidc = $dcgh->thaydoidiachi($user,$dc);
            }
            header('Location: giohang.php?action=dathang');
        }
    }
?>

<div class="row" style="margin-bottom: 30px">
    <div class="col-md-6 offset-md-3">
        <div class="form-dky">
            <form class="p-5" method = "POST" autocomplete = "off" action ="giohang.php?<?php if($_GET['action'] == 'dcgh') {echo 'action=dcgh' ;} else{echo 'action=tddcgh';} ?>">
                <div>
                    <p style ="text-align: center; font-weight: Bold; font-size: 30px" class = "key-color">ĐỊA CHỈ NHẬN HÀNG</p>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tỉnh/Thàng phố</label>
                    <input type="text" class="form-control" placeholder="Tỉnh/thành phố" name="tp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Quận/huyện</label>
                    <input type="text" class="form-control" placeholder="Quận/huyện" name="qh" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phường/xã</label>
                    <input type="text" class="form-control" placeholder="Phường/xã" name="px" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Làng/Ấp</label>
                    <input type="text" class="form-control" placeholder="Làng/ấp" name="la" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số nhà (nếu có)</label>
                    <input type="text" class="form-control" placeholder="Số nhà" name="sn">
                </div>
                <button style = "font-size: 20px; font-weight: bold" type="submit" class="btn btn-dky white-color">Thêm Địa Chỉ</button>
                <div class="mb-3" style="margin-top: 20px">
                    <p><a href="index.php">Quay lai trang chủ</a></p>
                </div>
            </form>
        </div>
    </div>
</div>