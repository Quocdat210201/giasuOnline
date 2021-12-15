<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gia sư</title>

    <!--Reset css--><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561Yhtmlc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assest/css/base.css">
    <link rel="stylesheet" href="./assest/css/grid.css">
    <link rel="stylesheet" href="./assest/css/style.css">
    <link rel="stylesheet" href="./assest/css/main.css">
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
                        $connect = mysqli_connect('127.0.0.1','root','','giasuonline');
                        if(mysqli_connect_errno()!==0)
                        {
                            die("Error: Could not connect to the database. An error ".mysqli_connect_error()." ocurred.");
                        }
                        mysqli_set_charset($connect,'utf8');
                        $sql = "SELECT monhoc, hinhthuc, hocphi, diachi, ghichu FROM lophoc LIMIT 6";
                        $result = mysqli_query($connect, $sql);
                            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                            {
                                if($row != false)
                                {
                                    $mon = $row['monhoc'];
                                    $ht = $row['hinhthuc'];
                                    $hp = $row['hocphi'];
                                    $dc = $row['diachi'];
                                    $gc = $row['ghichu'];
                                    echo "<div class='row-request bla-common-shadow'>";
                                        echo "<div class='one-row-class'>";
                                            echo "<div class='row-content'>";
                                                echo "<div class='col-md-8 col-sm-8'>";
                                                    echo "<div class='row-request-2'>";
                                                        echo "<span style='color: #4e4d4b;'>Lớp: </span>";
                                                        echo "<span class='group-span'>";
                                                            echo "<a href='' >";
                                                                echo $mon;
                                                                echo "&ensp;";
                                                            echo "</a>";
                                                        echo "</span>";
                                                        echo "<span class='group-span'>";
                                                            echo "<a href='' >";
                                                                echo $ht;
                                                            echo "</a>";
                                                        echo"</span>";
                                                    echo "</div>";
                                                echo "</div>";
                                                echo "<div class='col-md-2 col-sm-2'>";
                                                    echo "<div class='row-request-3'>";
                                                        echo "<span class='green-text' style='color:#eaa419;'>";
                                                        echo "<span style='color: #4e4d4b;'>Học phí: </span><span style='font-size: 18px;font-weight:bold;color:#eaa419;'>";
                                                            echo "<a href='' >";
                                                                echo $hp;
                                                            echo "</a>";
                                                        echo "</span> vnđ/tháng</span>";
                                                    echo "</div>";
                                                echo "</div>";
                                                echo "<div class='col-md-2 col-sm-2'>";
                                                    echo "<div class='row-request-4'>";
                                                        echo "<div class='action-group text-right show-when-hover'>";
                                                            echo "<span style='color: #4e4d4b;'>Địa chỉ: </span><span>";
                                                                echo "<a href='' >";
                                                                    echo $dc;
                                                                echo "</a>";
                                                            echo "</span>";
                                                        echo "</div>";
                                                        echo "<div class='action-group text-right show-when-hover'>";
                                                            echo "<span style='color: #4e4d4b;'>Ghi chú: </span><span>";
                                                                echo "<a href='' >";
                                                                    echo $gc;
                                                                echo "</a>";
                                                            echo "</span>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                    echo "</div>";
                                    echo "<br>";
                                }else
                                {
                                    echo "&nbsp;";
                                }
                            }
                    ?>
                </div>
            <div class="pagination">
                <ul class="pagination__product">
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">
                            <i class="pagination__product-icon fas fa-chevron-left"></i>
                        </a>
                    </li>
                    <li class="pagination__product-item pagination__product-item-active">
                        <a href="" class="pagination__product-link">1</a>
                    </li>
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">2</a>
                    </li>
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">3</a>
                    </li>
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">4</a>
                    </li>
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">5</a>
                    </li>
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">...</a>
                    </li>
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">14</a>
                    </li>
                    <li class="pagination__product-item">
                        <a href="" class="pagination__product-link">
                            <i class="pagination__product-icon fas fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include( 'includes/footer.php');?>
</body>
</html>