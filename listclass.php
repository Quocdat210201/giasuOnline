<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gia sư</title>

    <!--Reset css--><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561Yhtmlc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assest/css/base.css">
    <link rel="stylesheet" href="./assest/css/grid.css">
    <link rel="stylesheet" href="./assest/css/style.css">
    <link rel="stylesheet" href="./assest/css/main.css">
    <link rel="stylesheet" href="./assest/fonts/fontawesome-free-5.15.4-web/css/all.min.css">   <!--Icon-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">   <!--font chữ-->

</head>
<body>
    <div class="app ">
        <!-- HEADER -->
        <div class="header__wrap">
            <div class="header grid wide">
                <div class="header__logo">
                    <a href="./index.php" class="">
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
                        <?php if(isset($_SESSION['emailAddress'])){?>
                            <!-- <script>alert('Đăng nhập thành công');</script>
                            <a> Chào, <?php echo $_SESSION['emailAddress'];?></a>
                            <button class="header__btn btn" >
                                <a href="./index.php" class = "header__btn-link"  style = "font-size: 1.4rem;  text-decoration: none; color: var(--white-color);"  >
                                    Đăng xuất <?php  unset($_SESSION['emailAddress']);?>
                                </a>
                            </button> -->
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
                                                Chào, <?php echo $_SESSION['emailAddress'];?>
                                                <!-- Chào Admin -->
                                            </a>
                                        </li>
                                        <li class="avatar__navbar-item">
                                            <a href="./update_info.php" class="avatar__navbar-item-link">Thông tin cá nhân</a>
                                        </li>
                                        <li class="avatar__navbar-item">
                                            <a href="./index.php" class="avatar__navbar-item-link">
                                                Đăng xuất
                                                <?php  unset($_SESSION['emailAddress']);?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php }else{ ?>
                            <button class="header__btn btn">Đăng ký</button>
                            <button class="header__btn btn" >
                                <a href="./login.php" class = "header__btn-link"  style = "font-size: 1.4rem;  text-decoration: none; color: var(--white-color);"  >
                                Đăng nhập
                                </a></button>
                        <?php } ?>
                        <!-- <button class="header__btn btn">Đăng ký</button>
                        <button class="header__btn btn">Đăng nhập</button> -->
                    </div>
                </div>
            </div>
            <div class="header__navbar">
                <div class="header__navbar-wrap grid wide">
                    <div class="header__navbar-menu">
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item">

                                <a href="./index.php" class="header__navbar-link">Trang chủ</a>

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
                                        <a href="" class="header__subnav-link">Danh sách gia sư</a>
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

        <!-- container -->
        <div class="content grid wide">
            <!-- Member -->
            <div class="member member-search">
                <div class="member__search">
                    <div class="member__search-wrap">
                        <input type="text" class="member__search-input" placeholder="Tìm kiếm">
                        <a href="" class="member__search-logo">
                            <i class="member__search-logo-icon fas fa-search"></i>
                        </a>
                    </div>
                    <div class="member__search-filter">
                        <div class="member__search-select">
                            <select name="edit-place" id="" class="from-select">
                                <option value="">  Chọn địa điểm </option>
                                <option value="">  Hải Châu</option>
                                <option value="">  Thanh Khê</option>
                                <option value="">  Ngũ Hành Sơn </option>
                                <option value="">  Sơn Trà </option>
                                <option value="">  Cẩm Lệ</option>
                                <option value="">  Hòa khánh</option>
                                <option value="">  Hòa Vang </option>
                            </select>
                        </div>
                        <div class="member__search-select">
                            <select name="edit-place" id="" class="from-select">
                                <option value="">  Chọn môn học </option>
                                <option value="">  Toán cấp 1</option>
                                <option value="">  Toán cấp 2</option>
                                <option value="">  Toán cấp 3 </option>
                                <option value="">  Hóa cấp 1 </option>
                                <option value="">  Hóa cấp 2</option>
                                <option value="">  Lý cấp 1</option>
                                <option value="">  Lý cấp 2</option>
                                <option value="">  Lý cấp 3</option>
                                <option value="">  Luyện chữ</option>
                                <option value="">  Tiếng anh </option>
                            </select>
                        </div>
                        <div class="member__search-select">
                            <select name="edit-place" id="" class="from-select">
                                <option value="">  Chọn giới tính </option>
                                <option value="">  Nam</option>
                                <option value="">  Nữ</option>
                            </select>
                        </div>
                        <div class="member__search-select">
                            <select name="edit-place" id="" class="from-select">
                                <option value="">  Chọn trình độ </option>
                                <option value="">  Chuyên gia</option>
                                <option value="">  Đi làm</option>
                                <option value="">  Người nước ngoài </option>
                                <option value="">  Giáo viên</option>
                                <option value="">  Sinh viên</option>
                            </select>
                        </div>
                        <div class="member__search-btn">
                            <button class="btn">Lọc</button>
                        </div>
                    </div>
                </div>
                <div class="member__wrap-header">
                    <h4>Danh sách lớp học</h4>
                </div>
                <div class="member__wrap member__wrap-content">
                    <?php
                        $connect = mysqli_connect('127.0.0.1','root','','giasuonline');
                        if(mysqli_connect_errno()!==0)
                        {
                            die("Error: Could not connect to the database. An error ".mysqli_connect_error()." ocurred.");
                        }
                        mysqli_set_charset($connect,'utf8');
                        $sql = "SELECT monhoc, hinhthuc, hocphi, diachi, ghichu FROM lophoc LIMIT 6";
                        $result = mysqli_query($connect, $sql);
                            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                            {
                                if($row != false)
                                {
                                    $mon = $row['monhoc'];
                                    $ht = $row['hinhthuc'];
                                    $hp = $row['hocphi'];
                                    $dc = $row['diachi'];
                                    $gc = $row['ghichu'];
                                    echo "<div class='row-request bla-common-shadow'>";
                                        echo "<div class='one-row-class'>";
                                            echo "<div class='row-content'>";
                                                echo "<div class='col-md-8 col-sm-8'>";
                                                    echo "<div class='row-request-2'>";
                                                        echo "<span style='color: #4e4d4b;'>Lớp: </span>";
                                                        echo "<span class='group-span'>";
                                                            echo "<a href='' >";
                                                                echo $mon;
                                                                echo "&ensp;";
                                                            echo "</a>";
                                                        echo "</span>";
                                                        echo "<span class='group-span'>";
                                                            echo "<a href='' >";
                                                                echo $ht;
                                                            echo "</a>";
                                                        echo"</span>";
                                                    echo "</div>";
                                                echo "</div>";
                                                echo "<div class='col-md-2 col-sm-2'>";
                                                    echo "<div class='row-request-3'>";
                                                        echo "<span class='green-text' style='color:#eaa419;'>";
                                                        echo "<span style='color: #4e4d4b;'>Học phí: </span><span style='font-size: 18px;font-weight:bold;color:#eaa419;'>";
                                                            echo "<a href='' >";
                                                                echo $hp;
                                                            echo "</a>";
                                                        echo "</span> vnđ/tháng</span>";
                                                    echo "</div>";
                                                echo "</div>";
                                                echo "<div class='col-md-2 col-sm-2'>";
                                                    echo "<div class='row-request-4'>";
                                                        echo "<div class='action-group text-right show-when-hover'>";
                                                            echo "<span style='color: #4e4d4b;'>Địa chỉ: </span><span>";
                                                                echo "<a href='' >";
                                                                    echo $dc;
                                                                echo "</a>";
                                                            echo "</span>";
                                                        echo "</div>";
                                                        echo "<div class='action-group text-right show-when-hover'>";
                                                            echo "<span style='color: #4e4d4b;'>Ghi chú: </span><span>";
                                                                echo "<a href='' >";
                                                                    echo $gc;
                                                                echo "</a>";
                                                            echo "</span>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                    echo "</div>";
                                    echo "<br>";
                                }else
                                {
                                    echo "&nbsp;";
                                }
                            }
                    ?>
                </div>
            <div class="pagination">
                <ul class="pagination__product">
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">
                            <i class="pagination__product-icon fas fa-chevron-left"></i>
                        </a>
                    </li>
                    <li class="pagination__product-item pagination__product-item-active">
                        <a href="" class="pagination__product-link">1</a>
                    </li>
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">2</a>
                    </li>
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">3</a>
                    </li>
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">4</a>
                    </li>
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">5</a>
                    </li>
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">...</a>
                    </li>
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">14</a>
                    </li>
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">
                            <i class="pagination__product-icon fas fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- FOOTER -->
        <div class="footer">
            <div class="footer__wrap grid wide">
               <div class="row">
                    <div class="footer__left col l-4">
                        <h3 class="footer__left-desc">Liên hệ tìm gia sư</h3>
                        <div class="footer__left-input">
                            <input type="text" class="footer__left-input-name" placeholder="Họ và tên">
                            <input type="text" class="footer__left-input-phone" placeholder="Số điện thoại">
                            <input type="text" class="footer__left-input-email" placeholder="Email">
                            <textarea placeholder="Nội dung" name="" id="" cols="30" rows="10" class="footer__left-input-text" ></textarea>
                            <button class="footer__left-input-btn btn">SEND</button>
                        </div>
                    </div>
                    <div class="footer__right col l-8">
                        <div class="footer__right-wrap row">
                            <div class="col l-3 footer__right-first ">
                                <h3 class="footer__right-header">Trung tâm</h3>
                                <ul class="footer__right-list">
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">Giới thiệu</a>
                                    </li>
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">Tuyển dụng</a>
                                    </li>
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">Liên hệ</a>
                                    </li>
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">Góp ý</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col l-3">
                                <h3 class="footer__right-header">Hoạt động</h3>
                                <ul class="footer__right-list">
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">Quy định chung</a>
                                    </li>
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">Quy chế hoạt động</a>
                                    </li>
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">Chính sách bảo mật</a>
                                    </li>
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">Giải quyết tranh chấp</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col l-3">
                                <h3 class="footer__right-header">Phụ huynh</h3>
                                <ul class="footer__right-list">
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">Bảng giá gia sư</a>
                                    </li>
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">Danh sách gia sư</a>
                                    </li>
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">danh sách lớp VIP</a>
                                    </li>
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">Đăng ký tìm gia sư</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col l-3">
                                <h3 class="footer__right-header">Gia sư</h3>
                                <ul class="footer__right-list">
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">Tuyển dụng gia sư</a>
                                    </li>
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">Quy định nhận lớp</a>
                                    </li>
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">Thông tin thanh toán</a>
                                    </li>
                                    <li class="footer__right-item">
                                        <a href="" class="footer__right-link">Danh sách lớp</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="" class="footer__bottom-link">
                            <img src="./assest/img/logo-footer2.png" alt="" class="footer__bottom-img">
                        </a>
                        <div class="footer__bottom-text">
                            <p class="footer__bottom-text-lable">Địa chỉ: Số 48 Cao Thắng  - Hải Châu - Đà Nẵng</p>
                            <p class="footer__bottom-text-lable">Mã số doanh nghiệp: 02365598 do Sở Kế Hoạch và Đầu tư TP Đà Nẵng cấp lần đầu ngày 21/02/2001</p>
                            <p class="footer__bottom-text-lable">Hotline: 0789882291 - 0786432864</p>
                        </div>
                        <div class="footer__wrap-bottom">
                            <i class="footer__wrap-bottom-icon fab fa-facebook"></i>
                            <i class="footer__wrap-bottom-icon fab fa-instagram-square"></i>
                            <i class="footer__wrap-bottom-icon fab fa-twitter"></i>
                            <i class="footer__wrap-bottom-icon fab fa-youtube"></i>
                            <i class="footer__wrap-bottom-icon fab fa-vimeo"></i>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</body>
</html>