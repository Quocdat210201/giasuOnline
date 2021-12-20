
    <?php
    require_once("includes/connection.php");
    if(isset($_REQUEST["term"])){
        // Chuẩn bị câu lệnh SQL SELECT
        $sql = "SELECT * FROM tutor WHERE fullName LIKE ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Liên kết biến đến câu lệnh đã chuẩn bị như là tham số
            mysqli_stmt_bind_param($stmt, "s", $param_term);
            
            // Thiết lập các tham số
            $param_term = $_REQUEST["term"] . '%';
            
            // Cố gắng thực thi câu lệnh đã chuẩn bị
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
                
                // Kiểm tra số lượng row trong kết quả
                if(mysqli_num_rows($result) > 0){
                    // Tìm nạp các hàng kết quả dưới dạng mảng kết hợp
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo "<p>" . $row["fullName"] . "</p>";
                    }
                } 
            }  
        }
    }
    ?>