

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Lớp</title>
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

    <?php
    $connect = mysqli_connect('localhost','root','','giasuonline');
    mysqli_set_charset($connect,'UTF8');
    $id=$_GET['id'];
    $sql="SELECT * FROM lophoc WHERE id_lop='$id'";
    $tv_1=mysqli_query($connect,$sql);
    $row=mysqli_fetch_array($tv_1);

    $tieude = $row['TieuDe'];
    $mon = $row['monhoc'];
    $ht = $row['hinhthuc'];
    $hp = $row['hocphi'];
    $dc = $row['diachi'];
    $gc = $row['ghichu'];
    $tutor = $row['tutor'];
    $sl = $row['SoLuong'];
    $tg = $row['ThoiGian'];
    $phi = $row['PhiNhanLop'];

    echo '<div class="container-class_infor">';
        echo '<div class="row-class_infor">';
            echo '<h1 style="text-align:center;;"> Thông tin lớp học</h1>';
            echo '<div class="row-class_infor1" style="padding:15px 0;border-top:1px solid #e7e7e7;margin-left: 15px;">';
                echo '<div class="hang4 cot4">';
                    echo '<p class= "class__wrap-lable">'; echo 'Môn:&nbsp;';echo $mon;
                    echo '</p>';
                    echo '<p class= "class__wrap-lable">'; echo 'Hình Thức:';echo $ht; echo '</p>';
                    echo '<p class= "class__wrap-lable">';
                            echo '<a class= "class__wrap-lable" href="">';
                                echo 'Địa chỉ :';
                                echo $dc;
                            echo '</a>';
                    echo '</p>';
                echo '</div>';
    
                echo '<div class="hang4 cot4">';
                    echo '<p class= "class__wrap-lable">'; echo 'Giới tính:';echo $tutor; echo '</p>';
                        echo '<p class= "class__wrap-lable">Số lượng học sinh:'; echo $sl; echo '</p>';
                    echo '<p class= "class__wrap-lable">Số Buổi:'; echo $tg;  echo ' ( 1,5h/Buổi)';
                          echo '</p>';
                    echo '<p class= "class__wrap-lable" >Học Phí:'; echo '<span class="class-tutor-fee">'; echo $hp; echo 'vnđ </span>'; echo '</p>';
                echo '</div>';
    
                echo '<div class="hang4 cot4">';
                    echo '<div class="header-study-group-right">';
                       
                        echo '<div class="class-actions">';
                        echo '<a href="#popup-form" class="popup-modal link-register btn-bluewelearn btn btn-default">Nhận lớp</a>';                                
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
               
            echo '</div>';
        echo '</div>';
    echo '</div>';
    ?>
</body>
</html>