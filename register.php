<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
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
    <!-- HEADER -->
    <?php include( 'includes/header.php');?>

    <section>
        <div class="login-box">
            <div class="form">
                <h2>Đăng ký tài khoản</h2>
                <form method="post" action="register.php">
                    <div class="register-radio">
                        <div class="input-form register-radio-form">
                            <input type="radio" name="people" value="phuhuynh">
                            <label for="phuhuynh">Phụ Huynh</label>
                        </div>
                        <div class="input-form register-radio-form">
                            <input type="radio" name="people" value="giasu">
                            <label for="giasu">Gia Sư</label>
                        </div>
                    </div>
                    <div class="input-form">
                        <span>
                            <label for="giasu">Tài khoản</label>
                        </span>
                        <input class="input_text input-form-text" type="email" name="email" value="" required/>
                    </div>
                    <div class="input-form">
                        <span>
                            <label for="giasu">Mật khẩu</label>
                        </span>
                        <input class="input_text input-form-text" type="text" name="password" value="" required/>
                    </div>
                    <div class="input-form">
                        <input class="btn_register" type="submit" name="dangky" value="Đăng Ký"/>
                    </div>
                    <div class="input-form input-form-active">
                        <p><a href="./index.php">Trang chủ</a></p>
                        <p><a href="./login.php">Đăng nhập</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php
        header('Content-Type: text/html; charset=utf-8');
        require_once("connection.php");
        mysqli_set_charset($conn, "utf8");


        if (isset($_POST['dangky'])){
            $password = trim($_POST['password']);
            $email = trim($_POST['email']);

            if(isset($_POST['people']))
            {
                $type = trim($_POST['people']);
            }else{
                $type = false;
            }

            if($type == "giasu"){
                $permission = 2;
            }else{
                if($type == "phuhuynh"){
                    $permission = 3;
                }
            }

            if (empty($email)) {
                array_push($errors, "Email không được để trống");
            }
            if (empty($password)) {
                array_push($errors, "Password không được để trống");
            }
        // Kiểm tra username hoặc email có bị trùng hay không
            $sql = "SELECT * FROM account WHERE emailAddress = '$email'";
        // Thực thi câu truy vấn
            $result = mysqli_query($conn, $sql);
        // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
            if (mysqli_num_rows($result) > 0) {
                echo '<script language="javascript">alert("Email đã tồn tại!"); window.location="register.php";</script>';
        // Dừng chương trình
                die();
            } else {
                $sql = "INSERT INTO account (emailAddress, password, permissionID) VALUES ('$email','$password','$permission')";
                echo '<script language="javascript">alert(" Đã Đăng ký thành công!"); window.location="register.php";</script>';
                if (mysqli_query($conn, $sql)) {
                    echo "Email đăng nhập: " . $_POST['email'] . "<br/>";
                    echo "Mật khẩu: " . $_POST['password'] . "<br/>";
                    echo "kiểu người dùng: " . $permission . "<br/>";
                } else {
                    echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
                }
            }
        }

    ?>
    <!-- FOOTER -->
    <?php include( 'includes/footer.php');?>
</body>
</html>