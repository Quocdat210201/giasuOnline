<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu</title>
    <link rel="stylesheet" href="./assest/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<?php include_once('connection.php');
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