<?php
require_once '../path.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title> Forgot Password <?php echo $titleval?></title>
</head>
<body>
    <div>
    <center style="margin-top: 20px;">
        <h1>Forgot Password???</h1>
    </div>
<div style="width:50%;" class="container">
<h3>Enter your Email</h3>
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" required>Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="name@example.com" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">You will receive a link to reset password in your inbox.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>