<nav class="navbar navbar-expand-lg navbar-light padding">
        <div class="container-fluid">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link white-color" href="?action=trangchu">Trang chủ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle white-color" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Danh Mục sản phẩm
                    </a>
                    <ul class="dropdown-menu zindex" aria-labelledby="navbarDropdownMenuLink">
                        <?php
                            require_once('controller/quanlypublic.php');
                            $br = new brand();
                            $ds_brand = $br->ds_brand();
                            while ($row = $ds_brand->fetch_array()) {
                        ?>
                            <li><a class="dropdown-item" href="?action=brand&iddm=<?php echo $row['ma_dm']?>"><?php echo $row['ten'] ?></a></li>
                        <?php } 
                        ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link white-color" href="?action=gioithieu">giới thiệu</a>
                </li>
            </ul>
        </div>
</nav>