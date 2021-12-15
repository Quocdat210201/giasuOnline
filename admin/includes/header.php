<!-- HEADER -->
<div class="header__wrap">
            <div class="header grid wide">
                <div class="header__logo">
                   <a href="#" class="">
                        <img src="./assest/img/logo.jpg" alt="" class="header__logo-img">
                   </a>
                </div>
                <div class="header__right">
                    <div class="header__right-search">
                        <input type="text" class="header__right-search-input" placeholder="Tìm kiếm">
                        <a href="" class="header__right-logo-search">
                            <i class="header__right-logo-search-icon fas fa-search"></i>
                        </a>
                    </div>
                    <div class="header__right-button">
                        <?php if(isset($_SESSION['name'])){?>
                            <div class="avatar">
                                <div class="avatar__logo">
                                    <a href="" class="avatar__logo-link">
                                        <i class="avatar__logo-link-icon fas fa-user-circle"></i>
                                    </a>
                                </div>
                                <div class="avatar__navbar">
                                    <ul class="avatar__navbar-list">
                                        <li class="avatar__navbar-item">
                                            <a href="" class="avatar__navbar-item-link">
                                                Chào, <?php echo $_SESSION['name'];?>
                                                <!-- Chào Admin -->
                                            </a>
                                        </li>
                                        <li class="avatar__navbar-item">
                                            <a href="./account.php" class="avatar__navbar-item-link">Quản lí gia sư</a>
                                        </li>
                                        <li class="avatar__navbar-item">
                                            <a href="./edit_account.php" class="avatar__navbar-item-link">Thông tin cá nhân</a>
                                        </li>
                                        <li class="avatar__navbar-item">
                                            <a href="./change-password.php" class="avatar__navbar-item-link">Đổi mật khẩu</a>
                                        </li>
                                        <li class="avatar__navbar-item">
                                            <a href="./signout.php" class="avatar__navbar-item-link">
                                                Đăng xuất
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php }else{ ?>
                            <button class="header__btn btn">
                                <a href="../register.php" class = "header__btn-link"  style = "font-size: 1.4rem;  text-decoration: none; color: var(--white-color);"  >
                                Đăng ký
                                </a>
                            </button>
                            <button class="header__btn btn" >
                                <a href="../login.php" class = "header__btn-link"  style = "font-size: 1.4rem;  text-decoration: none; color: var(--white-color);"  >
                                Đăng nhập
                                </a>
                            </button>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="header__navbar">
                <div class="header__navbar-wrap grid wide">
                    <div class="header__navbar-menu">
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item">
                                <a href="index.php" class="header__navbar-link">Trang chủ</a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-link">Gia sư</a>
                                <ul class="header__subnav-list">
                                    <li class="header__subnav-item">
                                        <a href="" class="header__subnav-link">Tuyển dụng gia sư</a>
                                    </li>
                                    <li class="header__subnav-item">
                                        <a href="" class="header__subnav-link">Danh sách lớp cần gia sư</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-link">Phụ huynh</a>
                                <ul class="header__subnav-list">
                                    <li class="header__subnav-item">
                                        <a href="" class="header__subnav-link">Đăng kí tìm gia sư</a>
                                    </li>
                                    <li class="header__subnav-item">
                                        <a href="" class="header__subnav-link">Bảng giá dịch vụ</a>
                                    </li>
                                    <li class="header__subnav-item">

                                        <a href="./search.php" class="header__subnav-link">Danh sách gia sư</a>

                                    </li>
                                </ul>
                            </li>
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-link">Thông báo</a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-link">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>