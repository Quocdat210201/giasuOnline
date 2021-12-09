
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
                                            <a href="./account.php" class="avatar__navbar-item-link">Quản lí tài khoản</a>
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
               
        <div class="account grid wide mt-125">
            <h3 class="account-header" >Thông tin thành viên</h3>

            <?php
		    require_once("connection.php");

            // lưu
            if (isset($_POST["save"])) {
		    	$tutorID = $_POST["tutorID"];
		    	$fullName = $_POST["fullName"];
		    	$emailAddress = $_POST["emailAddress"];
		    	$phone = $_POST["phone"];
		    	$address = $_POST["address"];
		    	$sql = "UPDATE tutor SET  fullName = '$fullName', emailAddress = '$emailAddress', phone = '$phone' , address = '$address' where tutorID = $tutorID";
		    	mysqli_query($conn, $sql);
		    }

            $id = "";
		    $name = "";
		    $email = "";
		    $gender = "";
		    $phone = "";
		    $address = "";
		    if (isset($_GET["tutorID"])) {
		    	//thực hiện việc lấy thông tin user
		    	$id = $_GET["tutorID"];
		    	$sql = "SELECT * FROM tutor where tutorID = $id";
		    	$query = mysqli_query($conn,$sql);
                while ($data = mysqli_fetch_array($query)) {
		    		$name = $data["fullName"];
		    		$email = $data["emailAddress"];
		    		$gender = $data["gender"];
		    		$phone = $data["phone"];
		    		$address = $data["address"];
		    	}
		    }
		    ?>

            <form action="edit_account.php" method="POST">
                <table class="account-table">
                    <div class="input-form">
                        <input class="input-form-input" type="hidden" name="tutorID" value="<?php echo $id; ?> ">
                    </div>
                    <div class="input-form">
                        <lable class="input-form-lable-text">Họ tên</lable>
                        <input class="input-form-input" type="text" name="fullName" value="<?php echo $name; ?>" >
                    </div>
                    <div class="input-form">
                        <lable class="input-form-lable-text">Địa chỉ email</lable>
                        <input class="input-form-input" type="text" name="emailAddress" value="<?php echo $email; ?>">
                    </div>
                    <div class="input-form">
                        <lable class="input-form-lable-text">Giới tính </lable>
                        <input class="input-form-input" type="text" name="gender" value="<?php echo $gender; ?>">
                    </div>
                    <div class="input-form">
                        <lable class="input-form-lable-text">Số điện thoại </lable>
                        <input class="input-form-input" type="text" name="phone" value="<?php echo $phone; ?>" >
                    </div>
                    <div class="input-form">
                        <lable class="input-form-lable-text">Địa chỉ </lable>
                       <input class="input-form-input" type="text" name="address" value="<?php echo $address; ?>" >                      
                    </div>
                    <div class="imput-form">
                        <input class="btn input-form-btn" type="submit" name="save" value="Lưu thông tin">
                    </div>
                </table>    
            </form>    
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