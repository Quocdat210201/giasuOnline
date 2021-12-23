<?php
    session_start();
    include "include/connection.php";
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
    <!-- jQuery Bar Rating Plugin -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href='./assest/jquery-bar-rating-master/dist/themes/fontawesome-stars.css' rel='stylesheet' type='text/css'>

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./assest/jquery-bar-rating-master/dist/jquery.barrating.min.js" type="text/javascript"></script>

    <script type="text/javascript">
    $(function() {
            $('.rating').barrating({
                theme: 'fontawesome-stars',
                onSelect: function(value, text, event) {

                    // Get element id by data-id attribute
                    var el = this;
                    var el_id = el.$elem.data('id');

                    // rating was selected by a user
                    if (typeof(event) !== 'undefined') {
                        var split_id = el_id.split("_");
                        var tutorid = split_id[1];

                         // AJAX Request
                        $.ajax({
                            url: 'rating_ajax.php',
                            type: 'post',
                            data: {tutorid:tutorid,rating:value},
                            dataType: 'json',
                            success: function(data){
                                // Update average
                                var average = data['averageRating'];
                                $('#avgrating_'+tutorid).text(average);
                            }
                        });
                    }
                }
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
                <div class="member__wrap-header">
                    <h4>Thông tin gia sư</h4>
                </div>
            </div>

            <?php
		    include( 'includes/connection.php');
            if (isset($_SESSION['id'])) {
		    	//thực hiện việc lấy thông tin user
                $conn = mysqli_connect('localhost','root','','giasuonline');
                $userid = $_SESSION['id'];
                if(mysqli_connect_errno()!==0)
                {
                    die("Error: Could not connect to the database. An error ".mysqli_connect_error()." ocurred.");
                }else {
                    mysqli_set_charset($conn,'utf8');
                    $id = $_GET['id'];
                    $tutorid = $_GET['id'];
                    $sql = "SELECT * FROM tutor WHERE tutorID = '$id'";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_fetch_assoc($query);

                     // User rating
                     $conn = mysqli_connect('localhost','root','','giasuonline');
                     $query = "SELECT * FROM tutor_rating WHERE tutorid=".$id." and userid=".$userid;
                     $userresult = mysqli_query($conn,$query) or die(mysqli_error($conn));
                     $fetchRating = mysqli_fetch_array($userresult);
                     $rating = $fetchRating['rating'];

                     // get average
                     $query = "SELECT ROUND(AVG(rating),1) as averageRating FROM tutor_rating WHERE tutorid=".$id;
                     $avgresult = mysqli_query($conn,$query) or die(mysqli_error());
                     $fetchAverage = mysqli_fetch_array($avgresult);
                     $averageRating = $fetchAverage['averageRating'];

                     if($averageRating <= 0){
                         $averageRating = "No rating yet.";
                     }
                ?>
                    <div class="detail-tutor  grid row">
                        <div class="detail-tutor-avatar col l-3">
                            <img src="http://localhost/giasuOnline/assest/img/<?php echo $data['avatar'] ?>" alt="">
                            <!-- start rating -->
                            <div class="detail-tutor__evaluate">
                                <select class='rating' id='rating_<?php echo $id; ?>' data-id='rating_<?php echo $id; ?>'>
                                    <option value="1" >1</option>
                                    <option value="2" >2</option>
                                    <option value="3" >3</option>
                                    <option value="4" >4</option>
                                    <option value="5" >5</option>
                                </select>
                                <div style='clear: both;'></div>
                                    Average Rating : <span id='avgrating_<?php echo $id; ?>'><?php echo $averageRating; ?></span>

                                <!-- Set rating -->
                                <script type='text/javascript'>
                                    $(document).ready(function(){
                                        $('#rating_<?php echo $id; ?>').barrating('set',<?php echo $rating; ?>);
                                    });
                                </script>
                            </div>
                            <!-- end rating -->

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

<style>
    .like,.unlike{
        border: 0;
        background: none;
        letter-spacing: 1px;
        color: lightseagreen;
    }
    .like,.unlike:hover{
        cursor: pointer;
    }
</style>
</body>
</html>