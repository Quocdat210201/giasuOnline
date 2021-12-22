
<?php
    session_start();
?>
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
    <div class="app ">
        <!-- HEADER -->
        <?php include( 'includes/header.php');?>

        <!-- container -->
        <div class="content grid wide">
            <!-- Member -->
            <div class="member member-search">
                <div class="member__search">
                    <div class="member__search-wrap">
                        <input type="text" class="member__search-input" placeholder="Tìm kiếm">
                        <a href="" class="member__search-logo">
                            <i class="member__search-logo-icon fas fa-search"></i>
                        </a>
                    </div>
                    <div class="member__search-filter">
                        <div class="member__search-select">
                            <select name="edit-place" id="" class="from-select">
                                <option value="">  Chọn địa điểm </option>
                                <option value="">  Hải Châu</option>
                                <option value="">  Thanh Khê</option>
                                <option value="">  Ngũ Hành Sơn </option>
                                <option value="">  Sơn Trà </option>
                                <option value="">  Cẩm Lệ</option>
                                <option value="">  Hòa khánh</option>
                                <option value="">  Hòa Vang </option>
                            </select>
                        </div>
                        <div class="member__search-select">
                            <select name="edit-place" id="" class="from-select">
                                <option value="">  Chọn môn học </option>
                                <option value="">  Toán cấp 1</option>
                                <option value="">  Toán cấp 2</option>
                                <option value="">  Toán cấp 3 </option>
                                <option value="">  Hóa cấp 1 </option>
                                <option value="">  Hóa cấp 2</option>
                                <option value="">  Lý cấp 1</option>
                                <option value="">  Lý cấp 2</option>
                                <option value="">  Lý cấp 3</option>
                                <option value="">  Luyện chữ</option>
                                <option value="">  Tiếng anh </option>
                            </select>
                        </div>
                        <div class="member__search-select">
                            <select name="edit-place" id="" class="from-select">
                                <option value="">  Chọn giới tính </option>
                                <option value="">  Nam</option>
                                <option value="">  Nữ</option>
                            </select>
                        </div>
                        <div class="member__search-select">
                            <select name="edit-place" id="" class="from-select">
                                <option value="">  Chọn trình độ </option>
                                <option value="">  Chuyên gia</option>
                                <option value="">  Đi làm</option>
                                <option value="">  Người nước ngoài </option>
                                <option value="">  Giáo viên</option>
                                <option value="">  Sinh viên</option>
                            </select>
                        </div>
                        <div class="member__search-btn">
                            <button class="btn">Lọc</button>
                        </div>
                    </div>
                </div>
                <div class="member__wrap-header">
                    <h4>Danh sách lớp học</h4>
                </div>
                <div class="member__wrap member__wrap-content">
                    <?php

                        $conn = mysqli_connect('localhost','root','','giasuonline');
                        mysqli_set_charset($conn,'UTF8');
                        $sql = "SELECT id_lop, monhoc, hinhthuc, hocphi, diachi, ghichu FROM lophoc LIMIT 10";
                        $result = mysqli_query($conn, $sql);
                        echo '<div class="box-big1">';
                            echo '<div class="box-left1">';
                                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                                {
                                    if($row != false)
                                    {
                                        $chi_tiet="?thamso=detail&id=".$row['id_lop'];
                                        $mon = $row['monhoc'];
                                        $ht = $row['hinhthuc'];
                                        $hp = $row['hocphi'];
                                        $dc = $row['diachi'];
                                        $gc = $row['ghichu'];
                                            echo "<div class='row-request bla-common-shadow'>";
                                                echo "<div class='one-row-class'>";
                                                    echo "<div class='row class__wrap'>";
                                                        echo "<div class='col-md-8 col-sm-8'>";
                                                            echo "<div class='row-request-2'>";
                                                                echo "<span class= 'class__wrap-lable'>Lớp: </span>";
                                                                echo "<span class= 'class__wrap-lable'>";
                                                                    echo "<a  class= 'class__wrap-lable' >";
                                                                        echo $mon;
                                                                        echo "&ensp;";
                                                                    echo "</a>";
                                                                echo "</span>";
                                                                echo "<span class= 'class__wrap-lable'>";
                                                                    echo "<a class= 'class__wrap-lable'>";
                                                                        echo $ht;
                                                                    echo "</a>";
                                                                echo"</span>";
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo "<div class='col-md-2 col-sm-2'>";
                                                            echo "<div class='row-request-3'>";
                                                                echo "<span class= 'class__wrap-lable'>";
                                                                echo "<span class= 'class__wrap-lable'>Học phí: </span>";
                                                                    echo "<a class= 'class__wrap-lable' href='$chi_tiet' >";
                                                                        echo $hp;
                                                                    echo "</a>";
                                                                echo "<span class= 'class__wrap-lable'> vnđ/Buổi</span>";
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo "<div class='col-md-2 col-sm-2'>";
                                                            echo "<div class='row-request-4'>";
                                                                echo "<div class='action-group text-right show-when-hover'>";
                                                                    echo "<span class='class__wrap-lable'>Địa chỉ: </span>";
                                                                        echo "<a class= 'class__wrap-lable' href='$chi_tiet' >";
                                                                            echo $dc;
                                                                        echo "</a>";
                                                                    echo "</span>";
                                                                echo "</div>";
                                                                echo "<div class='action-group text-right show-when-hover'>";
                                                                    echo "<span class= 'class__wrap-lable'>Ghi chú: </span>";
                                                                        echo "<a class= 'class__wrap-lable' href='$chi_tiet' >";
                                                                            echo $gc;
                                                                        echo "</a>";
                                                                    echo "</span>";
                                                                echo "</div>";
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo "<button class = 'class__wrap-btn btn'>
                                                                <a href = '$chi_tiet'>Xem chi tiết</a>
                                                            </button>";
                                                    echo "</div>";
                                                echo "</div>";
                                            echo "</div>";
                                            echo "<br>";
                                        }else 
                                        {
                                            echo "&nbsp;";
                                        }
                                }
                                    echo '</div>';
                                    echo '<div class="box-right1">';
                                        if(isset($_GET['thamso'])){$tham_so=$_GET['thamso'];}else{$tham_so="";}
                                        switch($tham_so)
                                        {
                                            case "detail":
                                                include("class_infor.php");
                                                break;
                                        }				
                                    echo '</div>';
                        echo '</div>';
                    ?>
                </div>
            </div>
        </div>
        
        <?php include( 'includes/footer.php');?>
        <!-- FOOTER -->
</body>
</html>