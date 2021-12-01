<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./assest/css//style.css">
    </head>
    <body>
        <section>
            <form method="post" action="register.php" class="form_register">
            <h2 class="register_title" >Đăng ký tài khoản</h2>
                <input type="radio" name="people" value="phuhuynh">
                <label for="phuhuynh">Phụ Huynh</label>
                <input type="radio" name="people" value="giasu">
                <label for="giasu">Gia Sư</label>
                <input class="input_text" type="text" name="username" value="" placeholder="  Nhập Họ và Tên..." required>
                <input class="input_text" type="email" name="email" value="" placeholder="  Nhập Email..." required/>
                <input class="input_text" type="text" name="phone" value="" placeholder="  Nhập SĐT..." required/>
                <input class="input_text" type="text" name="password" value="" placeholder="  Nhập Mật Khẩu..." required/>
            <input class="btn_register" type="submit" name="dangky" value="Đăng Ký"/>
            </form>
        </section>
        <?php
            header('Content-Type: text/html; charset=utf-8');
            require_once("connection.php");
            mysqli_set_charset($conn, "utf8");


            if (isset($_POST['dangky'])) {
                $username = trim($_POST['username']);
                $password = trim($_POST['password']);
                $email = trim($_POST['email']);
                $phone = trim($_POST['phone']);
                if(isset($_POST['people']))
                {
                    $type = trim($_POST['people']);
                }else{
                    $type = false;
                }

                if (empty($username)) {
                    array_push($errors, "Username không được để trống");
                }
                if (empty($email)) {
                    array_push($errors, "Email không được để trống");
                }
                if (empty($phone)) {
                    array_push($errors, "SĐT không được để trống");
                }
                if (empty($password)) {
                    array_push($errors, "Password không được để trống");
                }
            // Kiểm tra username hoặc email có bị trùng hay không
                $sql = "SELECT * FROM member WHERE username = '$username' OR email = '$email'";
            // Thực thi câu truy vấn
                $result = mysqli_query($conn, $sql);
            // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
                if (mysqli_num_rows($result) > 0) {
                    echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';
            // Dừng chương trình
                    die();
                } else {
                    $sql = "INSERT INTO member (username, password, email, phone, type_people) VALUES ('$username','$password','$email','$phone','$type')";
                    echo '<script language="javascript">alert(" Đã Đăng ký thành công!"); window.location="register.php";</script>';
                    if (mysqli_query($conn, $sql)) {
                        echo "Tên đăng nhập: " . $_POST['username'] . "<br/>";
                        echo "Mật khẩu: " . $_POST['password'] . "<br/>";
                        echo "Email đăng nhập: " . $_POST['email'] . "<br/>";
                        echo "Số điện thoại: " . $_POST['phone'] . "<br/>";
                        echo "kiểu người dùng: " . $type . "<br/>";
                    } else {
                        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
                    }
                }
            }
        ?>
    </body>
</html>