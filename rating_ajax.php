<?php

    include "./includes/connection.php";

    $userid = $_SESSION['id'];
    $tutorid = $_POST['tutorid'];
    $rating = $_POST['rating'];

    // Check entry within table
    $query = "SELECT COUNT(*) AS cntpost FROM tutor_rating WHERE tutorid=".$tutorid." and userid=".$userid;

    $result = mysqli_query($conn,$query);
    $fetchdata = mysqli_fetch_array($result);
    $count = $fetchdata['cntpost'];

    if($count == 0){
        $insertquery = "INSERT INTO tutor_rating(userid,tutorid,rating) values(".$userid.",".$tutorid.",".$rating.")";
        mysqli_query($conn,$insertquery);
    }else {
        $updatequery = "UPDATE tutor_rating SET rating=" . $rating . " where userid=" . $userid . " and tutorid=" . $tutorid;
        mysqli_query($conn,$updatequery);
    }


    // get average
    $query = "SELECT ROUND(AVG(rating),1) as averageRating FROM tutor_rating WHERE tutorid=".$tutorid;
    $result = mysqli_query($conn,$query) or die(mysqli_error());
    $fetchAverage = mysqli_fetch_array($result);
    $averageRating = $fetchAverage['averageRating'];

    $return_arr = array("averageRating"=>$averageRating);

    echo json_encode($return_arr);