<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>

    <?php
    $connect = mysqli_connect('127.0.0.1','root','hoangkha17','danhsachlop');
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
            echo '<h1 style="padding-left:10px;">';
                echo $row['TieuDe'];
                  echo'</h1>';
            echo '<div class="row-class_infor1" style="padding:15px 0;border-top:1px solid #e7e7e7;margin-left: 15px;">';
                echo '<div class="hang4 cot4">';
                    echo '<p class="no-padding">'; echo 'Môn:&nbsp;';echo $mon;
                    echo '</p>';
                    echo '<p>'; echo 'Hình Thức:';echo $ht; echo '</p>';
                    echo '<p class="no-padding">';
                            echo '<a href="">';
                                echo 'Địa chỉ :';
                                echo $dc;
                            echo '</a>';
                    echo '</p>';
                echo '</div>';
    
                echo '<div class="hang4 cot4">';
                    echo '<p>'; echo 'Giới tính:';echo $tutor; echo '</p>';
                        echo '<p>Số lượng học sinh:'; echo $sl; echo '</p>';
                    echo '<p>Số Buổi:'; echo $tg;  echo ' ( 1,5h/Buổi)';
                          echo '</p>';
                    echo '<p>Học Phí:'; echo '<span class="class-tutor-fee">'; echo $hp; echo 'vnđ </span>'; echo '</p>';
                echo '</div>';
    
                echo '<div class="hang4 cot4">';
                    echo '<div class="header-study-group-right">';
                        echo '<p>Phí:<span class="connection-fee">'; echo $phi; echo 'VNĐ/Buổi</span></p>';
                        echo '<div class="class-actions">';
                        echo '<a href="#popup-form" class="popup-modal link-register btn-bluewelearn btn btn-default">Click để nhận lớp</a>';                                
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
                echo '<div class="hang4 cot4">';
                    echo '<h3><i class="fa fa-quote-right" aria-hidden="true"></i> Ghi chú :</h3>';
                    echo $gc;
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    ?>
</body>
</html>