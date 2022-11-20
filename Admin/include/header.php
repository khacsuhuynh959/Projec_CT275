<div class="row header-admin sticky-top">
    <div class="col-1">
        <i class="fa-solid fa-bars bar-admin"></i>
    </div>
    <div class="col-3">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Tìm kiếm tại đây">
            <span class="input-group-text">
                <img style ="width: 20px;" src="../icon/magnifying-glass-solid.svg" alt="">
            </span>
        </div>
    </div>
    <div class="flex-1">
        <div class="btn-group" style="float: right;">
            <button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style = "display: flex;">
                <i class="fa-solid fa-user user-cart"></i>
                <span class="user_indexx">
                    <?php echo Session::get('loginad'); ?>
                </span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <?php 
                    if(isset($_GET['action']) && $_GET['action'] == 'logout') {
                        Session::destroy();
                    }
                ?>
                <li><a class="dropdown-item" href="?action=logout">Đăng xuất</a></li>
            </ul>
        </div>
    </div>
</div>