<?php
// echo "Heloo";

if (isset($_POST['Date'])){
    include "../db.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $id = validate($_POST['id']);
    echo $_GET['id'];

    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);

    if (empty($name)){
        header("Location: ../ind.php?error=Name is required&$name");
    }
    else if (empty($email)){
        header("Location: ../ind.php?error=Email is required&$name");
    }
    else if (empty($id)){
        header("Location: ../ind.php?error=id is required&$id");
    }
    else{
        $sql = "UPDATE sports_team SET name='$name', email='$email' WHERE Student_id=$id ";
       $result =mysqli_query($conn,$sql);
       if (mysqli_affected_rows($conn) == 0){
        header("Location: ../ind.php?error=User does not exist");
       }
       else{
        header("Location: ../read.php?success=successfully Created");
       }
    }
}
