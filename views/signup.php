<?php
require_once '../path.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title> Sign up <?php echo $titleval?></title>
</head>
<body>
    <div>
    <center style="margin-top: 20px;">
        <h1>DebaTor</h1>
    </div>
    <div style="width:50%; " class="container">
        <h3>Sign Up</h3>
    <form>
    <div class="row">
  <div class="col">
    <label for="exampleInputfirstname1" class="form-label">First name</label>
    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <label for="exampleInputlastname1" class="form-label">Last name</label>
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
</div>
<div class="row">
  <div class="col">
    <label for="exampleInputPhonenumber1" class="form-label">Phone number</label>
    <input type="tel" class="form-control" placeholder="Phone number" aria-label="Phone number">
  </div>
  <div class="col">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" placeholder="name@example.com" aria-label="Email">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
</div>
  <div class="row">
  <div class="col">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password" aria-label="Password">
    <div id="passwordHelpBlock" class="form-text">
    Must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
    </div>
  </div> 
  <div class="col">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" placeholder="Retype Password" aria-label="Retype Password">
  </div>
</div>
    <label for="exampleInputgender1" class="form-label">Gender</label>
    <div class="row">
  <div class="col">
    <input type="radio" class="form-radio-input" id="exampleRadio1">
    <label class="form-radio-label" for="exampleRadio1">Male</label>
  </div>
  <div class="col">
    <input type="radio" class="form-radio-input" id="exampleRadio2">
    <label class="form-radio-label" for="exampleRadio2">Female</label> 
  </div>
  <div class="col">
    <input type="radio" class="form-radio-input" id="exampleRadio2">
    <label class="form-radio-label" for="exampleRadio3">I don't know</label> 
  </div>
  </div>
  <div class="row">
  <div class="col">
    <label for="exampleInputBirthday1" class="form-label">Birthday</label>
    <input type="date" class="form-control" placeholder="Birthday" aria-label="Birthday">
  </div>
  </div>
  <div> 
    <label for="exampleInputAddress1" class="form-label">Address</label>
    <input type="country" class="form-control" id="exampleInputAddress1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">I agree with terms and conditions</label>
  </div>
  <button type="submit" class="btn btn-primary">SIGN UP</button>
</form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>