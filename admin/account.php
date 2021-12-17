
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Gia Sư</title>
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
    <div class="app ">
        <!-- HEADER -->
        <?php include( 'includes/header.php');?>

        <?php
            require_once("includes/connection.php");
        ?>
        <div class="account grid wide mt-125">
            <h3 class="account-header" >Danh sách thành viên đã đăng ký</h3>
            <table class="account-table">

                    <tr>
                        <th style ="text-align:center;">STT</th>
                        <th>Họ Tên</th>
                        <th>Địa chỉ email</th>
                        <th>Giới tính</th>
                        <th>Số điện thoại</td>
                        <th>Địa chỉ</td>
                        <th>Hành động</td>
                    </tr>


                <?php
                    $stt = 1 ;   
                    $sql = "SELECT * FROM tutor";
                    // thực thi câu $sql với biến conn lấy từ file connection.php
                    $query = mysqli_query($conn,$sql);
                    while ($data = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <th scope="row" style ="text-align:center;"><?php echo $stt++ ?></th>
                        <td><?php echo $data["fullName"]; ?></td>
                        <td><?php echo $data["emailAddress"]; ?></td>
                        <td><?php echo $data["gender"]; ?></td>
                        <td><?php echo $data["phone"]; ?></td>
                        <td><?php echo $data["address"]; ?></td>
                        <td>
                            <a href="edit_account.php?id=<?php echo $data["tutorID"]; ?>">Sửa</a>
                            <a href="delete_account.php?id=<?php echo $data["tutorID"]; ?>">Xóa</a>
                        </td>
                    </tr>
                    <?php }  ?>

            </table>
        </div>


        <!-- FOOTER -->
        <?php include( 'includes/footer.php');?>

</body>
</html>