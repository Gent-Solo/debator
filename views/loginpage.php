<?php
require_once '../path.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="awesome-font/css/font-awesome.min.css" type="text/css"/>
    <title>Login to <?php echo $titleval?></title>
</head>
<body>
    <div>
    <center style="margin-top: 20px;">
        <h1>Welcome Back Strong!!!</h1>
    </div>

        
<div style="width:50%;" class="container">
  <h3>Login to continue</h3>
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="name@example.com" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">LOGIN</button>
  <a href= './forgotpassword.php'>Forgot password?</a>
<div>
  <center style="margin-top: 20px;">
    <h5>Don't have an account? <a href= './index.php'>Sign up</a></h5>
    <h6>Or login with</h6>
    <i class="fa fa-google" ></i>
    <i class="fa fa-facebook" ></i>
    <i class="fa fa-twitter" ></i>
    <i class="fa fa-instagram" ></i>
    <i class="fa fa-linkedin" ></i>
    <!-- <a href= './googlelogin.php'><img src="./images/google.png" alt="google" width="50px" height="50px"></a>
    <a href= './facebooklogin.php'><img src="./images/facebook.png" alt="facebook" width="50px" height="50px"></a>
    <a href= './twitterlogin.php'><img src="./images/twitter.png" alt="twitter" width="50px" height="50px"></a> -->
</div>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>    
</body>
</html>