<div class="sticky-top">
    <div>
        <div class="row align-item-ct bg-color">
                <a href="index.php">
                    <div class="col-1 center padding padding_tb">
                        <a href="index.php"><img src="../img/logokiwijpg-removebg-preview.png" class="logo"> </a>
                    </div>
                    <div class="col-2 padding padding_tb">
                        <a href="index.php"><h3 class="nameBrand white-color">Kiwii Shop</h3></a>
                    </div>     
                </a>
            <div class="col-6 padding">
                <form class="input-group" method="POST" action="index.php?action=timkiem">
                    <input type="text" class="form-control" placeholder="Tìm kiếm tại đây" name="search_name" required>
                    <button type="submit" class="input-group-text" name="search">
                        <i class="fa-solid fa-magnifying-glass icon-find"></i>
                    </button>
                </form>
            </div>
            
            <div class="col-1 display_flex text-center">
                <span class="text-center flex-1">
                    <a href="giohang.php">
                        <i class="fa-solid fa-cart-shopping icon-cart"></i>
                    </a>
                </span>
            </div>
            <?php 
                if(session::checkSession('loginkh') == false) {
            ?>
                <div class="col-2">
                    <div class="d-grid gap-2 d-md-block text-center">
                        <a class="signin white-color" href="./login.php">Đăng nhập</a>
                    </div>
                </div>
            <?php } else { ?>
            <div class="col-2">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="display: flex;">
                        <i class="fa-solid fa-user icon-user"></i>
                        <span class="white-color user_indexx">
                            <?php echo $_SESSION['loginkh'] ?>
                        </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <?php if(isset($_GET['action']) && $_GET['action'] == 'logout' ) {
                                session::destroy();
                            }
                        ?>
                        <li><a class="dropdown-item" href="?action=logout">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
            <?php } ?>
            <?php include ('menu.php');?>
        </div>
    </div>
</div>