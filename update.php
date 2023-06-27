<?php include 'php/u.php';  ?> 
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
    <!-- <h1>Create</h1> -->
  <div class="container">
    <form action="php/u.php" method="POST">
        <h4 class="display-4 text-center">Updated Page</h4><hr><br>
        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['error']; ?>
        </div>
        <?php }?>
        
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="Name" class="form-control" id="Name" name="name" value="<?=$row['name']?>" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1"> Email address</label>
            <input type="email" class="form-control" id="Email" name="email" value="<?=$row['email']?>" >
        </div>
        <input type="hidden" name="id" value="<?php if(isset($_GET['id'])) echo $_GET['id']; ?>">
        <button type="submit" class="btn btn-primary" name="update">update</button>
        <a href="read.php" class="link-primary">View</a>
    </form>
  </div>
      
</body>
</html>