
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gia sư</title>
    <!--Reset css--><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assest/css/base.css">
    <link rel="stylesheet" href="./assest/css/grid.css">
    <link rel="stylesheet" href="./assest/css/main.css">
    <link rel="stylesheet" href="./assest/css/style.css">
    <link rel="stylesheet" href="./assest/fonts/fontawesome-free-5.15.4-web/css/all.min.css">   <!--Icon-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">   <!--font chữ-->

</head>
<body>
    <div class="app ">
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
                        <?php if(isset($_SESSION['emailAddress'])){?>
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
                                <a href="./register.php" class = "header__btn-link"  style = "font-size: 1.4rem;  text-decoration: none; color: var(--white-color);"  >
                                Đăng ký
                                </a>
                            </button>
                            <button class="header__btn btn" >
                                <a href="./login.php" class = "header__btn-link"  style = "font-size: 1.4rem;  text-decoration: none; color: var(--white-color);"  >
                                Đăng nhập
                                </a>
                            </button>
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
                                <a href="" class="header__navbar-link">Trang chủ</a>
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


        <!-- slider -->
        <div class="slider">
            <div class="slider__content grid wide">
                <h2 class="slider__content-heading">Trung tâm gia sư Đà Nẵng</h2>
                <span class="slider__content-desc">Chất lượng  |  Uy tín  |  Chuyên nghiệp</span>
                <p class="slider__content-text">Nâng đỡ cho nền kiến thức của con bạn bay cao hơn, xa hơn.</p>
                <span class="slider__content-btn btn">Đăng ký ngay</span>
                <div class="slider__content-wrap row">
                    <div class="slider__content-item col l-2-4">
                        <div class="slider__content-item-body">
                            <img src="./assest/img/slider-img1.png" alt="" class="slider__content-item-img">
                            <span class="slider__content-item-number">15.000+</span>
                            <h5 class="slider__content-item-text">Gia sư khắp cả nước</h5>
                        </div>
                    </div>
                    <div class="slider__content-item col l-2-4">
                        <div class="slider__content-item-body">
                            <img src="./assest/img/slider-img2.png" alt="" class="slider__content-item-img">
                            <span class="slider__content-item-number">100.000+</span>
                            <h5 class="slider__content-item-text">Lượt truy cập Hàng Quý</h5>
                        </div>
                    </div>
                    <div class="slider__content-item col l-2-4">
                        <div class="slider__content-item-body">
                            <img src="./assest/img/slider-img3.png" alt="" class="slider__content-item-img">
                            <span class="slider__content-item-number">9500+</span>
                            <h5 class="slider__content-item-text">Yêu cầu tìm gia sư tỉ lệ hài lòng 97%</h5>
                        </div>
                    </div>
                    <div class="slider__content-item col l-2-4">
                        <div class="slider__content-item-body">
                            <img src="./assest/img/slider-img4.png" alt="" class="slider__content-item-img">
                            <span class="slider__content-item-number">700+</span>
                            <h5 class="slider__content-item-text">Phụ Huynh hợp tác với trung tâm</h5>
                        </div>
                    </div>
                    <div class="slider__content-item col l-2-4">
                        <div class="slider__content-item-body">
                            <img src="./assest/img/slider-img5.png" alt="" class="slider__content-item-img">
                            <span class="slider__content-item-number">95%</span>
                            <h5 class="slider__content-item-text">Học viên tiến bộ nhanh chóng</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- container -->
        <div class="content grid wide">

            <!-- content -->
            <div class="container">
                <h2 class="container__heading header-title">GIỚI THIỆU TRUNG TÂM GIA SƯ</h2>
                <div class="row container__wrap">
                    <div class="container__video-section col l-6">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/bCJK_VHztlo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="container__content col l-6">
                        <div class="container__content-body">
                            <p class="container__content-text">Trung tâm gia sư chuyên dịch vụ giới thiệu Gia Sư dạy kèm tại nhà uy tín.Trung tâm gia sư liên kết với đội ngũ giáo viên, Gia Sư nhiều năm kinh nghiệm, kỹ năng sư phạm cao giúp học sinh yếu học giỏi hơn và học sinh giỏi giữ vững phong độ. Văn phòng trung tâm gia sư nằm tại Đà Nẵng, liên kết với đội ngũ SINH VIÊN từ các trường Đại Học Sư Phạm Kỹ Thuật, Đại Học Sư Phạm, Đại Học Bách Khoa,...Minh bạch hồ sơ, bằng cấp. Học thử miễn phí!</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- tutorial -->
            <div class="tutorial">
                <h2 class="tutorial__heading header-title">LỰA CHỌN TỐT NHẤT DÀNH CHO CON BẠN</h2>
                <div class="tutorial__wrap row ">
                    <div class="tutorial__item col l-6">
                        <div class="tutorial__item-body">
                            <h4 class="tutorial__item-desc">Quy trình tuyển chọn gia sư nghiêm ngặt</h4>
                            <p class="tutorial__item-text">Luôn đảm bảo chất lượng, gia sư, để các học viên có một người thầy giúp các em học tốt, phụ huynh có một người để tin tưởng giao phó trọng trách nâng cao kiến thức cho con em mình.</p>
                        </div>
                    </div>
                    <div class="tutorial__item col l-6">
                        <div class="tutorial__item-body">
                            <h4 class="tutorial__item-desc">Học thử miễn phí</h4>
                            <p class="tutorial__item-text">Miễn phí buổi học đầu tiên để phụ huynh và học viên cân nhắc lựa chọn gia sư. Phụ huynh và học viên có quyền yêu cầu đổi gia sư nếu không hài lòng.</p>
                        </div>
                    </div>
                    <div class="tutorial__item col l-6">
                        <div class="tutorial__item-body">
                            <h4 class="tutorial__item-desc">Mức học phí phù hợp nhất</h4>
                            <p class="tutorial__item-text">Trung tâm sẽ tư vấn cho phụ huynh mức học phí phù hợp với điều kiện gia đình mà vẫn đảm bảo chất lượng giảng dạy.</p>
                        </div>
                    </div>
                    <div class="tutorial__item col l-6">
                        <div class="tutorial__item-body">
                            <h4 class="tutorial__item-desc">Cam kết chất lượng giảng dạy</h4>
                            <p class="tutorial__item-text">Trung tâm cam kết học viên sẽ tiếng bộ nhanh chóng sau 10-12 buổi học.</p>
                        </div>
                    </div>
                    <div class="tutorial__item col l-6">
                        <div class="tutorial__item-body">
                            <h4 class="tutorial__item-desc">Kiểm tra đánh giá học lực học viên miễn phí</h4>
                            <p class="tutorial__item-text">Việc kiểm tra đánh giá học lực thường xuyên để phụ huynh nắm được tình hình học tập của con em mình.</p>
                        </div>
                    </div>
                    <div class="tutorial__item col l-6">
                        <div class="tutorial__item-body">
                            <h4 class="tutorial__item-desc">Tư vấn - hỗ trợ</h4>
                            <p class="tutorial__item-text">Tư vấn miễn phí lựa chọn gia sư, hệ thống chăm sóc khách hàng hoạt động 24/7 đáp ứng yêu cầu hỗ trợ của phụ huynh.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Procedure -->
            <div class="procedure">
                <h2 class="procedure__heading header-title">QUY TRÌNH GIAO GIA SƯ</h2>
                <div class="procedure__wrap row">
                    <div class="procedure__item col l-2-4">
                        <div class="procedure__item-body">
                            <img src="./assest/img/procedure1.png" alt="" class="procedure__item-body-img">
                        </div>
                        <p class="procedure__item-step">Bước 1</p>
                        <span class="procedure__item-text">Tư vấn chọn gia sư</span>
                    </div>
                    <div class="procedure__item col l-2-4">
                        <div class="procedure__item-body">
                            <img src="./assest/img/procedure2.png" alt="" class="procedure__item-body-img">
                        </div>
                        <p class="procedure__item-step">Bước 2</p>
                        <span class="procedure__item-text">Lên kế hoạch giảng dạy</span>
                    </div>
                    <div class="procedure__item col l-2-4">
                        <div class="procedure__item-body">
                            <img src="./assest/img/procedure3.png" alt="" class="procedure__item-body-img">
                        </div>
                        <p class="procedure__item-step">Bước 3</p>
                        <span class="procedure__item-text">Lọc gia sư phù hợp</span>
                    </div>
                    <div class="procedure__item col l-2-4">
                        <div class="procedure__item-body">
                            <img src="./assest/img/procedure4.png" alt="" class="procedure__item-body-img">
                        </div>
                        <p class="procedure__item-step">Bước 4</p>
                        <span class="procedure__item-text">Gửi hồ sơ và duyệt</span>
                    </div>
                    <div class="procedure__item col l-2-4">
                        <div class="procedure__item-body">
                            <img src="./assest/img/procedure5.png" alt="" class="procedure__item-body-img">
                        </div>
                        <p class="procedure__item-step">Bước 5</p>
                        <span class="procedure__item-text">Gia sư nhận lớp</span>
                    </div>
                </div>
            </div>

            <!-- Member -->
            <div class="member">
                <h2 class="member__heading header-title">DANH SÁCH GIA SƯ NỔI BẬT</h2>
                <div class="member__wrap row">
                    <div class="member__wrap-item col l-3">
                        <div class="member__wrap-item-body">
                            <div class="member__wrap-item-img">
                                <img src="./assest/img/giasu1.jpg" alt="">
                            </div>
                            <div class="member__wrap-item-info">
                                <h4 class="member__wrap-item-info-name">Nguyễn Thị Quyên</h4>
                                <span class="member__wrap-item-info-subjects">
                                    Rèn chữ - Mẫu giáo, Báo bài - Cấp 1, Toán - Cấp 1, Tiếng việt - Cấp 1, Báo bài - Cấp 2, Ngữ văn - Cấp 2, Báo bài - Cấp 3, Ngữ văn - Cấp 3, Ngữ văn - Luyện thi đại học
                                </span>
                                <p class="member__wrap-item-info-introduce">
                                    Sinh viên năm 4. Trường Đại học Khoa Học Xã Hội và Nhân Văn.
                                </p>
                                <button class="member__wrap-item-info-btn btn">Mời dạy</button>
                            </div>

                        </div>
                    </div>
                    <div class="member__wrap-item col l-3">
                        <div class="member__wrap-item-body">
                            <div class="member__wrap-item-img">
                                <img src="./assest/img/giasu2.jpg" alt="">
                            </div>
                            <div class="member__wrap-item-info">
                                <h4 class="member__wrap-item-info-name">Lê Thị Minh Trang</h4>
                                <span class="member__wrap-item-info-subjects">
                                    Toán - Cấp 1, Tiếng anh - Cấp 1, Toán - Cấp 2, Toán - Cấp 3.
                                </span>
                                <p class="member__wrap-item-info-introduce">
                                    Mình hỗ trợ các bạn HS từ mất căn bản đến có thể học tốt môn Toán, luyện thi vào 10 và THPTQG (chương trình Bộ GD và Toán Tiếng Anh).
                                </p>
                                <button class="member__wrap-item-info-btn btn">Mời dạy</button>
                            </div>
                        </div>
                    </div>
                    <div class="member__wrap-item col l-3">
                        <div class="member__wrap-item-body">
                            <div class="member__wrap-item-img">
                                <img src="./assest/img/giasu33.jpg" alt="">
                            </div>
                            <div class="member__wrap-item-info">
                                <h4 class="member__wrap-item-info-name">Nguyễn Thị LAn Trinh</h4>
                                <span class="member__wrap-item-info-subjects">
                                    Tiếng anh - Cấp 1, Tiếng Anh - Cấp 2, Tiếng anh - Cấp 3.
                                </span>
                                <p class="member__wrap-item-info-introduce">
                                    Em hiện tại đang là sinh viên năm 2 chuyên ngành ngôn ngữ anh trường ĐH Tôn Đức Thắng.
                                    Đã có hai năm kinh nghiệm làm gia sư, và trợ giảng ở một số trung tâm lớn.
                                    Là người kĩ tính, kiên nhẫn, và có trách nhiệm cao trong công việc, sẵn sàng lắng nghe học viên của mình.
                                    Yêu trẻ em.
                                </p>
                                <button class="member__wrap-item-info-btn btn">Mời dạy</button>
                            </div>
                        </div>
                    </div>
                    <div class="member__wrap-item col l-3">
                        <div class="member__wrap-item-body">
                            <div class="member__wrap-item-img">
                                <img src="./assest/img/giasu4.jpeg" alt="">
                            </div>
                            <div class="member__wrap-item-info">
                                <h4 class="member__wrap-item-info-name">Thái Quỳnh Ngân</h4>
                                <span class="member__wrap-item-info-subjects">
                                    Toán - Cấp 1, Toán - Cấp 2, Lý Cấp 2, Tiếng Anh.
                                </span>
                                <p class="member__wrap-item-info-introduce">

                                    Sinh viên năm 2, chuyên ngành kiểm toán trường ĐH Kinh tế Luật ĐHQG TPHCM Em muốn đăng kí dạy gia sư 
                                    và đã có 1 năm kinh nghiệm dạy các bé từ cấp 2 trở xuống , hiện tại em đang dạy 2 bé lớp 7 môn 
                                    Toán và Lý , lớp nhận trong mùa dịch nên lương hơi thấp và em muốn đăng kí tìm lớp khác để dạy. 

                                </p>
                                <button class="member__wrap-item-info-btn btn">Mời dạy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sign in -->
            <div class="regiter">
                <div class="regiter__wrap row">
                    <div class="regiter__wrap-item col l-6">
                        <div class="regiter__wrap-body">
                            <h4 class="regiter__wrap-body-desc">Phụ huynh tìm gia sư cho con</h4>
                            <p class="regiter__wrap-body-text">
                                Chỉ cần gửi yêu cầu học, các tư vấn viên sẽ gọi điện tư vấn và lên lịch trình học phù hợp nhất. Sau đó sẽ lên lịch trình lọc gia sư chất lượng đúng theo yêu cầu
                            </p>
                            <button class="regiter__wrap-body-btn btn">Đăng yêu cầu</button>
                        </div>
                    </div>
                    <div class="regiter__wrap-item col l-6">
                        <div class="regiter__wrap-body">
                            <h4 class="regiter__wrap-body-desc">Đăng ký làm gia sư</h4>
                            <p class="regiter__wrap-body-text">
                                Nếu bạn có một khả năng nào đó, hãy đăng ký trở thành gia sư của Trung tâm gia sư WELearn, bạn sẽ được tiếp cận với hàng ngàn học viên và có cơ hội được truyền đạt kiến thức của mình.
                            </p>
                            <button class="regiter__wrap-body-btn btn">Đăng ký làm gia sư</button>
                        </div>
                    </div>
                </div>
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

    <!-- MODAL -->
    <div class="modal"></div>
</body>
</html>