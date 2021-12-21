
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
    <div class="app ">
        <!-- HEADER -->
        <?php include( 'includes/header.php');?>

        <!-- container -->
        <div class="slider1">
            <!-- Member -->
            <div class="member_register_tutor">
                <div class="member__wrap-header">
                    <h5>Đăng ký trở thành gia sư</h5>
                        <div class="form_register_tutor_left">
                                <input type="text" class="footer__left-input-name" placeholder="Họ và tên">
                                <div class="member__search-filter1">
                                    <div class="member__search-select">
                                        <select name="edit-place" id="" class="from-select">
                                            <option value="">  Giới tính </option>
                                            <option value="">  Nam</option>
                                            <option value="">  Nữ</option>
                                        </select>
                                    </div>
                                    <div class="member__search-select">
                                        <select name="edit-place" id="" class="from-select">
                                            <option value="">  Năm Sinh </option>
                                            <option value="">  2003</option>
                                            <option value="">  2002</option>
                                            <option value="">  2001</option>
                                            <option value="">  2000</option>
                                            <option value="">  1999</option>
                                            <option value="">  1998</option>
                                            <option value="">  1997</option>
                                            <option value="">  1996</option>
                                            <option value="">  1995</option>
                                            <option value="">  1994</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="text" class="footer__left-input-phone" placeholder="Số điện thoại">
                                <input type="text" class="footer__left-input-email" placeholder="Email">
                                <div class="member__search-filter1">
                                    <div class="member__search-select">
                                        <select name="edit-place" id="" class="from-select">
                                            <option value="">  Địa điểm </option>
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
                                            <option value="">  Môn học </option>
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
                                            <option value="">  Trình độ </option>
                                            <option value="">  Chuyên gia</option>
                                            <option value="">  Đi làm</option>
                                            <option value="">  Người nước ngoài </option>
                                            <option value="">  Giáo viên</option>
                                            <option value="">  Sinh viên</option>
                                        </select>
                                    </div>
                                </div>  
                                    <form action="upload_file.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label style=" color:white;">Upload ảnh chân dung và các bằng cấp </label>
                                            <div class="col-xl-10">
                                                <input type="file" id="txtFile" name="txtFile" class="form-control"/>
                                            </div>
                                        </div>
                                        
                                    </form>
                                
                                <button class="input-btn-tutor" type="button" onclick="abc()">Đăng ký</button>
                                <script>
                                    function abc(){
                                        alert("Hồ sơ của bạn đã được lưu, chúng tôi sẽ sớm phản hồi");
                                    }
                                </script> 
                        </div>
                </div>
            </div>    
        </div>

        <!-- FOOTER -->
        <?php include( 'includes/footer.php');?>
    </div>    
</body>
</html>