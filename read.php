<?php include "php/r.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sports_team</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Sports.css">
</head>
<body>
      <div class="container">
        <div class="box">
            <h4 class="display-4 text-center">Sportsteam</h4><br>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-success" role="alert">
                  <?php echo $_GET['success']; ?>
                </div>
            <?php }?>
            <?php if (mysqli_num_rows($result)) { ?>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Student_id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 0;
                        while($rows = mysqli_fetch_assoc($result)){
                        $i++;
                    ?>
                    <tr>
                        <th scope="row"><?=$i?></th>
                        <td><?=$rows['name']?></td>
                        <td><?php echo $rows['email'];?></td>
                        <td>
                            <a href="update.php?id=<?=$rows['Student_id']?>" class="btn btn-success">Update</a>
                            <a href="php/d.php?Student_id=<?=$rows['Student_id']?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } ?>
            <div class="link-right">
                <a href="index.php" class="link-primary">Create</a>
            </div>
        </div>
      </div>
</body>
</html>