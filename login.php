<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./assest/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
<!-- Xu ly dang nhap -------------------------------------------------------------------------->
<?php
	//Gọi file connection.php
	require_once("connection.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["dangnhap"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
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
			$sql = "select * from account where emailAddress = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {?>
                <p style = "width: 400px; height: 50px;padding-left: 60px ; padding-top: 13px; color: red;
                                    background-color: rgb(255, 204, 204); border-radius: 4px; margin-left: 550px">
                                    Tài khoản hoặc mật khẩu không đúng !
                </p>
			<?php }else{ ?>
				<?php
                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				 $_SESSION['emailAddress'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: index.php');
			}
		}
	}
?>
<!-- -------------------------------------------------------------------------------------------- --------------------->
    <section>
        <div class="login-box">
            <div class="form">
                <h2>Đăng Nhập</h2>
                <form action='login.php' method='POST'>
                    <div class="input-form">
                        <span>Tài khoản</span>
                        <input type="text" name="username">
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="password">
                    </div>
                    <div class="nho-dang-nhap">
                        <label><input type="checkbox" name=""> Nhớ Đăng Nhập</label>
                    </div>
                    <div class="input-form">
                        <input type="submit" value="Đăng Nhập" name="dangnhap">
                    </div>
                    <div class="input-form">
                        <p>Bạn Chưa Có Tài Khoản? <a href="#">Đăng Ký</a></p>
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