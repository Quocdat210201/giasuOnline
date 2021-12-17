
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Cá Nhân</title>
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

        <div class="account grid wide mt-125">
            <h3 class="account-header" >Thông tin thành viên</h3>

            <?php
		    include( 'includes/connection.php');

            //khai bao
            $id = "";
		    $name = "";
		    $email = "";
		    $gender = "";
		    $phone = "";
		    $address = "";

		    if (isset($_SESSION['id'])) {
		    	//thực hiện việc lấy thông tin user
                $conn = mysqli_connect('localhost','root','','giasuonline');
                if(mysqli_connect_errno()!==0){
                    die("Error: Could not connect to the database. An error ".mysqli_connect_error()." ocurred.");
                }else {
                    mysqli_set_charset($conn,'utf8');
                    $id = $_SESSION['id'];
                    $sql = "SELECT adminID, fullName, emailAddress, gender, phone, address FROM administrator WHERE adminID = '$id'";
                    $query = mysqli_query($conn,$sql);
                    while ($data = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                        if($data != false) {
                            $id = $data["adminID"];
                            $name = $data["fullName"];
                            $email = $data["emailAddress"];
                            $gender = $data["gender"];
                            $phone = $data["phone"];
                            $address = $data["address"];
                        }
                    }
                }
                // lưu
                if (isset($_POST["save"])) {
                    $id = $_POST["adminID"];
                    $name = $_POST["fullName"];
                    $emailAddress = $_POST["emailAddress"];
                    $gender = $_POST["gender"];
                    $phone = $_POST["phone"];
                    $address = $_POST["address"];
                    $conn = mysqli_connect('localhost','root','','giasuonline');
                    $sql = "UPDATE administrator SET  fullName = '$name', emailAddress = '$emailAddress', gender = '$gender',
                                                phone = '$phone' , address = '$address' where adminID = '$id' ";
                    mysqli_query($conn, $sql);?>

                    <script> window.alert("Cập nhật thông tin thành công") </script>
                <?php  }
            }
		    ?>

            <form action="edit_account.php" method="POST">
                <table class="account-table">
                    <div class="input-form">
                        <input class="input-form-input" type="hidden" name="adminID" value="<?php echo $id; ?> ">
                    </div>
                    <div class="input-form">
                        <lable class="input-form-lable-text">Họ tên</lable>
                        <input class="input-form-input" type="text" name="fullName" value="<?php echo $name; ?>" >
                    </div>
                    <div class="input-form">
                        <lable class="input-form-lable-text">Địa chỉ email</lable>
                        <input class="input-form-input" type="text" name="emailAddress" value="<?php echo $email; ?>">
                    </div>
                    <div class="input-form">
                        <lable class="input-form-lable-text">Giới tính </lable>
                        <input class="input-form-input" type="text" name="gender" value="<?php echo $gender; ?>">
                    </div>
                    <div class="input-form">
                        <lable class="input-form-lable-text">Số điện thoại </lable>
                        <input class="input-form-input" type="text" name="phone" value="<?php echo $phone; ?>" >
                    </div>
                    <div class="input-form">
                        <lable class="input-form-lable-text">Địa chỉ </lable>
                       <input class="input-form-input" type="text" name="address" value="<?php echo $address; ?>" >
                    </div>
                    <div class="imput-form">
                        <input class="btn input-form-btn" type="submit" name="save" value="Lưu thông tin">
                    </div>
                </table>
            </form>
        </div>

        <!-- FOOTER -->
        <?php include( 'includes/footer.php');?>
    </div>
</body>
</html>