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
                    <img src="./assest/img/logo.jpg" alt="" class="header__logo-img">
                </div>
                <div class="header__right">
                    <div class="header__right-search">
                        <input type="text" class="header__right-search-input" placeholder="Tìm kiếm">
                        <a href="" class="header__right-logo-search">
                            <i class="header__right-logo-search-icon fas fa-search"></i>
                        </a>
                    </div>
                    <div class="header__right-button">
                        <button class="header__btn btn">Đăng ký</button>
                        <button class="header__btn btn">Đăng nhập</button>
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
                    <h4>Danh sách gia sư</h4>
                </div>

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