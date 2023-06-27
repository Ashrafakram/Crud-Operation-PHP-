<?php

if (isset($_GET['id'])) {
    include "db.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Student_id = validate($_GET['id']);

    $sql = "SELECT * FROM sports_team WHERE Student_id=$Student_id ";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }else{
        header("Location: ../read.php");
    }

}else if(isset($_POST['update'])){
    include "../db.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $Student_id = validate($_POST['id']);
    // $user_data = 'name'.$name.'&email='.$email;

    if (empty($name)){
        header("Location: ../update.php?Student_id=$Student_id&error=Name is required");
    }
    else if (empty($email)){
        header("Location: ../update.php?Student_id=$Student_id&error=Email is required");
    }
    else{
       $sql = "UPDATE sports_team SET name='$name', email='$email' WHERE Student_id=$Student_id ";
       $result =mysqli_query($conn,$sql);
       if ($result){
        header("Location: ../read.php?success=successfully Updated");
       }
       else{
        header("Location: ../update.php?Student_id=$Student_id&error=Unknown error occurred$Student_id");
       }
    }
}else{
    header("Location: ../read.php");
}
    