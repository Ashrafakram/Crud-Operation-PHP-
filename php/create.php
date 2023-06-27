<?php
// echo "Heloo";

if (isset($_POST['Create'])){
    include "../db.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);

    $user_data = 'name'.$name.'&email='.$email;

    if (empty($name)){
        header("Location: ../index.php?error=Name is required&$user_data");
    }
    else if (empty($email)){
        header("Location: ../index.php?error=Email is required&$user_data");
    }
    else{
       $sql = "INSERT INTO sports_team(name, email) VALUES('$name', '$email') ";
       $result =mysqli_query($conn,$sql);
       if ($result){
        
        $sql1 = "SELECT Student_id from sports_team where name = '$name' and email = '$email'";
        $result1 =mysqli_query($conn,$sql1);
        if ($result1 && mysqli_num_rows($result1) == 1){
            $row = mysqli_fetch_assoc($result1);
            $Student_id = $row['Student_id'];
            // echo $id;
            // $Student_ID = $result2[];
            header("Location: ../ind.php?name=$name&email=$email&id=$Student_id&success=successfully Created");}
       
       }
       else{
        header("Location: ../index.php?error=Unknown error occurred&$name");
       }
    }
}