<?php 

require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';


?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
  <div class="d-flex align-items-center justify-content-center " style="opacity: 0.5, z-index = 2">
    <div class="col-sm-6 mt-5 p-2" style="background-color:#f1f1f1" style="z-index:3;">
      <form action="includes/signup.inc.php" method="post">
      
        <div class="m-3">
          <label class="form-label" for="uname"><b>Username</b></label>
          <input class="form-control" type="text" placeholder="Username" name="username" >
        </div> 
        <div class="m-3">
          <label class="form-label" for="psw"><b>Password</b></label>
          <input class="form-control" type="password" placeholder="Password" name="pwd" >
        </div>
        <div class="m-3">
          <label class="form-label" for="psw"><b>Email</b></label>
          <input class="form-control" type="text" placeholder="E-mail" name="email" >
        </div>
        <div class="m-3">
          <button type="submit" class="btn btn-success">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        
          <button type="button" class="btn btn-primary">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>   
  </div> 
<?php 
check_signup_errors();
?> 
</body>
</html>