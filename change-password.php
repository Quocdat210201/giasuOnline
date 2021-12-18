<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thay Đổi mật khẩu</title>
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
<?php include_once('./include/connection.php');
if(isset($_POST['doimatkhau'])){
    $user = $_POST['emailAddress'];
    $oldpass = $_POST['oldpassword'];
    $newpass = $_POST['newpassword'];
    $cnewpass = $_POST['newpassword1'];
    $sql = "select emailAddress, password from account where emailAddress= '$user' and password ='$oldpass'";
$query = mysqli_query($conn,$sql);
$num = mysqli_fetch_array($query);
if($num>0){
    $con = mysqli_query($conn, "update account set password = '$newpass' where emailAddress = '$user'");
    $_SESSION['msg1'] = "Đổi mật khẩu thành công";
}else{
    $_SESSION['msg1'] = "Mật khẩu không đúng";
}
}
?>
<p style= "color:red;"><?php echo $_SESSION['msg1'];?><?php $_SESSION['msg1'] = ""; ?></p>


<section>
        <div class="login-box">
            <div class="form">
                <h2>Thay đổi mật khẩu</h2>
                <form action='change-password.php' method='POST'>
                    <div class="input-form">
                        <span>Tài khoản</span>
                        <input type="text" name="emailAddress" class="input-form-text">
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu cũ</span>
                        <input type="password" name="oldpassword" class="input-form-text">
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu mới</span>
                        <input type="password" name="newpassword" class="input-form-text">
                    </div>
                    <div class="input-form">
                        <span>xác nhận mật khẩu mới</span>
                        <input type="password" name="newpassword1" class="input-form-text">
                    </div>
                    <div class="input-form">
                        <input type="submit" value="Đổi mật khẩu" name="doimatkhau">
                    </div>
                    <a href="index.php" class = "login-back input-form-link">
                                Trang chủ
                    </a>
                </form>
            </div>
        </div>
</section>
</body>
</html>