<?php 

require_once 'templates/includes/config_session.inc.php';
require_once 'templates/includes/signup_view.inc.php';
require_once 'templates/includes/login_view.inc.php';


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
      
    <?php if(!isset($_SESSION['user_id'])){ ?>
      <form action="../ajax_php/templates/includes/login.inc.php" method="post">
              <h4 class=" p-3">Login form</h4>
              <div class="m-3">
                  <label class="form-label" for="username"><b>Username</b></label>
                  <input class="form-control" type="text" placeholder="Username" name="username" >
              </div>
              <div class="m-3">
                  <label class="form-label" for="password"><b>Password</b></label>
                  <input class="form-control" type="password" placeholder="Password" name="pwd" >
              </div>
              <div class="d-flex flex-row">
                <div class="m-3 ">
                  <button type="submit" class="btn btn-success">Login</button>

                  <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <span class="psw">Forgot <a href="#">password?</a></span> 
                </div>
                
              </div>
          

      </form>
        
      <?php }?>

    
      <form action="../ajax_php/templates/includes/signup.inc.php" method="post">
      <h4 class=" p-3">Signup form</h4>
        <?php 
        signup_inputs()
        ?> 
        
        <div class="m-3">
          <button type="submit" class="btn btn-success">Signup</button>
          
          
        </div>
      </form>

      <?php 
      check_login_errors();
      
      ?>
      
    </div>   
  </div> 
<?php 
check_signup_errors();
?> 
      
</body>
</html>