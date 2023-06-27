<?php

if(isset($_GET['Student_id'])){
    include  "../db.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Student_id = validate($_GET['Student_id']);

    $sql = "DELETE FROM sports_team WHERE Student_id=$Student_id";
    $result =mysqli_query($conn,$sql);
    if ($result){
     header("Location: ../read.php?success=successfully Deleted");
    }
    else{
     header("Location: ../read.php?error=Unknown error occurred&$user_data");
    }
}else{
    header("Location: ../read.php");
}