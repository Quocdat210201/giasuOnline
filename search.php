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
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Lấy giá trị đầu vào khi có thay đổi */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("ajax-search.php", {term: inputVal}).done(function(data){
                // Hiển thị dữ liệu trả về trong trình duyệt
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });

    // Thiết lập giá trị đầu vào khi click vào result
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

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

                    <form class="search-box" acction="search.php">
                        <input class = "search-box-input" type="text" autocomplete="off" placeholder="Tìm kiếm" name="search" />
                        <input class="member__search-logo btn" type="submit" value ="Tìm kiếm" name="ok"/>
                        <div class="result"></div>
                    </form>

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
                    <h4>Danh sách gia sư</h4>
                </div>

                <div class="member__wrap row">

                <?php
                    require_once("includes/connection.php");
                    if (isset($_REQUEST['ok'])) {
                        $search = addslashes($_GET['search']);
                        // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
                        if (empty($search)) {?>
                            <script> alert("Chư nhập dữ liệu"); </script>
                        <?php
                        }
                        else{
                            $query_result = "SELECT * from tutor where fullName like '%$search%'";

                            $sql_result = mysqli_query($conn,$query_result);

                            // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                            if ( $search != "")
                            {

                                // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                                while ($row = mysqli_fetch_assoc($sql_result)) {?>
                                <div class="member__wrap-item col l-3">
                                    <div class="member__wrap-item-body">
                                        <div class="member__wrap-item-img">
                                            <img src="http://localhost:8088/giasuOnline/assest/img/<?php echo $row['avatar'] ?>" alt="">
                                        </div>
                                        <div class="member__wrap-item-info">
                                            <h4 class="member__wrap-item-info-name"><?php echo $row['fullName'] ?></h4>
                                            <span class="member__wrap-item-info-subjects">
                                                <?php echo $row['content'] ?>
                                            </span>
                                            <p class="member__wrap-item-info-introduce">
                                                <?php echo $row['generalIntroduction'] ?>
                                            </p>
                                            <button class="member__wrap-item-info-btn btn">
                                                <a href="./detail_search.php?id=<?php echo $id ?>" class="btn-link">Xem chi tiết</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <?php }
                            }

                        }

                    }
                    else {
                        $sql = "SELECT * FROM tutor";
                        $query = mysqli_query($conn,$sql);
                        while ($data = mysqli_fetch_array($query)) {
                            $id=$data['tutorID'];
                            ?>
                            <div class="member__wrap-item col l-3">
                                <div class="member__wrap-item-body">
                                    <div class="member__wrap-item-img">
                                        <img src="http://localhost/giasuOnline/assest/img/<?php echo $data['avatar'] ?>" alt="">
                                    </div>
                                    <div class="member__wrap-item-info">
                                        <h4 class="member__wrap-item-info-name"><?php echo $data['fullName'] ?></h4>
                                        <span class="member__wrap-item-info-subjects">
                                            <?php echo $data['content'] ?>
                                        </span>
                                        <p class="member__wrap-item-info-introduce">
                                            <?php echo $data['generalIntroduction'] ?>
                                        </p>
                                        <button class="member__wrap-item-info-btn btn">
                                            <a href="./detail_search.php?id=<?php echo $id ?>" class="btn-link">Xem chi tiết</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>


        <!-- FOOTER -->
        <?php include( 'includes/footer.php');?>
</body>
</html>