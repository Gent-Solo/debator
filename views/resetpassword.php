<?php
require_once '../path.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title> Reset Password <?php echo $titleval?></title>
</head>
<body>
    <div>
    <center style="margin-top: 20px;">
        <h1>Reset Password</h1>
    </div>
<div style="width:50%;" class="container">
<h3>Enter New Password</h3>
    <form>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">New Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    <div id="passwordHelpBlock" class="form-text">
    Must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
    </div>
  </div>
  <div> 
    <label for="exampleInputPassword1" class="form-label">Confirm New Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
<br><br>
  <button type="submit" class="btn btn-primary">Reset Password</button>
  </form>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>