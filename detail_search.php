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
                <div class="member__wrap-header">
                    <h4>Thông tin gia sư</h4>
                </div>
            </div>

            <?php
		    include( 'includes/connection.php');
            if (isset($_SESSION['id'])) {
		    	//thực hiện việc lấy thông tin user
                $conn = mysqli_connect('localhost','root','','giasuonline');
                if(mysqli_connect_errno()!==0)
                {
                    die("Error: Could not connect to the database. An error ".mysqli_connect_error()." ocurred.");
                }else {
                    mysqli_set_charset($conn,'utf8');
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM tutor WHERE tutorID = '$id'";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_fetch_assoc($query);?>
                    
                    <div class="detail-tutor  grid row">
                        <div class="detail-tutor-avatar col l-3">
                            <img src="http://localhost:8088/giasuOnline/assest/img/<?php echo $data['avatar'] ?>" alt="">
                            <div class="detail-tutor__evaluate">
                                <i class="detail-tutor__evaluate-icon color-yellow fas fa-star"></i>
                                <i class="detail-tutor__evaluate-icon color-yellow fas fa-star"></i>
                                <i class="detail-tutor__evaluate-icon color-yellow fas fa-star"></i>
                                <i class="detail-tutor__evaluate-icon color-yellow fas fa-star"></i>
                                <i class="detail-tutor__evaluate-icon far fa-star"></i>
                            </div>
                        </div>
                        <div class="detail-tutor-body col l-8">
                            <div class="detail-tutor-body-item">
                                <span class="detail-tutor-body-text">Tên</span>
                                <span class="active">:</span>
                                <p class="detail-tutor-content"><?php echo $data['fullName'] ?></p>
                            </div>
                            <div class="detail-tutor-body-item">
                                <span class="detail-tutor-body-text">Giới tính</span>
                                <span class="active">:</span>
                                <p class="detail-tutor-content"><?php echo $data['gender'] ?></p>
                            </div>
                            <div class="detail-tutor-body-item">
                                <span class="detail-tutor-body-text">Trình độ</span>
                                <span class="active">:</span>
                                <p class="detail-tutor-content"><?php echo $data['generalIntroduction'] ?></p>
                            </div>
                            <div class="detail-tutor-body-item">
                                <span class="detail-tutor-body-text">Môn dạy</span>
                                <span class="active">:</span>
                                <p class="detail-tutor-content"><?php echo $data['content'] ?></p>
                            </div>
                            <div class="detail-tutor-body-item">
                                <span class="detail-tutor-body-text">Lịch dạy</span>
                                <span class="active">:</span>
                                <p class="detail-tutor-content"><?php echo $data['teachingSchedule'] ?></p>
                            </div>
                            <div class="detail-tutor-body-item">
                                <span class="detail-tutor-body-text">SĐT</span>
                                <span class="active">:</span>
                                <p class="detail-tutor-content"><?php echo $data['phone'] ?></p>
                            </div>
                            <div class="detail-tutor-body-item">
                                <span class="detail-tutor-body-text">Email</span>
                                <span class="active">:</span>
                                <p class="detail-tutor-content active-email"><?php echo $data['emailAddress'] ?></p>
                            </div>
                        </div>
                    </div>
                    <button class="detail-tutor-btn btn">Mời dạy</button>
                <?php
                }
            }
            ?>

        </div>


        <!-- FOOTER -->
        <?php include( 'includes/footer.php');?>
</body>
</html>