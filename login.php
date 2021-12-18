<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <!--Reset css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
                integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assest/css/base.css">
    <link rel="stylesheet" href="./assest/css/grid.css">
    <link rel="stylesheet" href="./assest/css/main.css">
    <link rel="stylesheet" href="./assest/css/style.css">
    <link rel="stylesheet" href="./assest/fonts/fontawesome-free-5.15.4-web/css/all.min.css">   <!--Icon-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">   <!--font chữ-->
</head>

<body>
<!-- Xu ly dang nhap -------------------------------------------------------------------------->
<?php
	//Gọi file connection.php
	include( 'includes/connection.php');
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["dangnhap"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];

		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {?>
        <p style = "width: 400px; height: 50px;padding-left: 60px ; padding-top: 13px; color: red;
                            background-color: rgb(255, 204, 204); border-radius: 4px; margin-left: 550px">
                            Tài khoản hoặc mật khẩu không được để trống!
         </p>
		<?php }else{ ?><?php
			$sql = "SELECT emailAddress, password, permissionID from account where emailAddress = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {?>
                <p style = "width: 400px; height: 50px;padding-left: 60px ; padding-top: 13px; color: red;
                                    background-color: rgb(255, 204, 204); border-radius: 4px; margin-left: 550px">
                                    Tài khoản hoặc mật khẩu không đúng !
                </p>
			<?php }else{ ?>
				<?php
                    $maQuyen = "";
                    $id = "";
                    $name = "";

                    $conn = mysqli_connect('localhost','root','','giasuonline');
                    mysqli_set_charset($conn,'utf8');
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_fetch_array($query, MYSQLI_ASSOC);
                    $maQuyen = $data["permissionID"];

                    if ($maQuyen == 1) {
                        $sql = "SELECT adminID, fullName FROM administrator WHERE emailAddress = '$username'";
                        $query = mysqli_query($conn,$sql);
                        while ($data = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                            if($data != false) {
                                $id = $data["adminID"];
                                $name = $data["fullName"];
                            }
                        }
                        $_SESSION['id'] = $id;
                        $_SESSION['name'] = $name;
                        header('Location: admin/index.php');

                    } elseif($maQuyen == 2){
                        $sql = "SELECT tutorID, fullName FROM tutor WHERE emailAddress = '$username'";
                        $query = mysqli_query($conn, $sql);
                        while ($data = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                            if($data != false) {
                                $id = $data["tutorID"];
                                $name = $data["fullName"];
                            }
                        }
                        $_SESSION['id'] = $id;
                        $_SESSION['name'] = $name;
                        header('Location: index.php');
                    }else{
                        $sql = "SELECT parentsID, fullName FROM parents WHERE emailAddress = '$username'";
                        $query = mysqli_query($conn, $sql);
                        while ($data = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                            if($data != false) {
                                $id = $data["parentsID"];
                                $name = $data["fullName"];
                            }
                        }
                        $_SESSION['id'] = $id;
                        $_SESSION['name'] = $name;
                        header('Location: index.php');
                    }
                }
			}
		}
	
?>
    <section>
        <div class="login-box">
            <div class="form">
                <h2>Đăng Nhập</h2>
                <form action='login.php' method='POST'>
                    <div class="input-form">
                        <span>Tài khoản</span>
                        <input type="text" name="username" class="input-form-text">
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="password" class="input-form-text">
                    </div>
                    <div class="nho-dang-nhap input-form-back ">
                        <label><input type="checkbox" name=""> Nhớ Đăng Nhập</label>
                        <label><a href="index.php" class="input-form-link">Trang chủ</a></label>
                    </div>
                    <div class="input-form">
                        <input type="submit" value="Đăng Nhập" name="dangnhap">
                    </div>
                    <div class="input-form input-form-active">
                        <p class = "input-form-link">Bạn Chưa Có Tài Khoản?</p>
                        <p class = "input-form-link"><a href="./register.php">Đăng Ký</a></p>
                    </div>
                </form>
                <h3>Đăng Nhập Bằng:</h3>
                <ul class="icon-dang-nhap">
                    <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                    <li><i class="fa fa-google" aria-hidden="true"></i></li>
                </ul>
            </div>
        </div>
    </section>
</body>

</html>