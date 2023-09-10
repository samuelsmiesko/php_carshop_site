<?php 

declare(strict_types=1);

function signup_inputs(){
    
    

    if(isset($_SESSION["signup_data"]["username"]) && 
    !isset($_SESSION["errors_signup"]["username"])){
        
        echo 
        '<div class="m-3"> 
            <label class="form-label" for="uname"><b>Username</b></label>
            <input class="form-control" type="text" placeholder="Username" name="username" value"'. $_SESSION["signup_data"]["username"].'">
        </div> ';
    }else{
        echo 
        '<div class="m-3"> 
            <label class="form-label" for="uname"><b>Username</b></label> 
            <input class="form-control" type="text" placeholder="Username" name="username" >
        </div> ';
    

        echo '<div class="m-3"> 
                <label class="form-label" for="pwd"><b>Password</b></label>
                <input class="form-control" type="password" placeholder="Password" name="pwd" >
            </div> ';
    }    
    if(isset($_SESSION["signup_data"]["email"]) && 
    !isset($_SESSION["errors_signup"]["email_used"]) &&
    !isset($_SESSION["errors_signup"]["invalid_email"])){
        echo 
        '<div class="m-3">
            
            <label class="form-label" for="psw"><b>Email</b></label>
            <input class="form-control" type="text" placeholder="E-mail" name="email"  value"'. $_SESSION["signup_data"]["email"].'">
        </div> 
        
        ';

        }else{
        echo 
        '<div class="m-3">
            <label class="form-label" for="psw"><b>Email</b></label>
            <input class="form-control" type="text" placeholder="E-mail" name="email" >
        </div>'
        ;   

    }
}


function check_signup_errors(){
    if(isset($_SESSION['errors_signup'])){
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach($errors as $error){
            echo '<h4 class="text-danger d-flex align-items-center justify-content-center">' . $error . '</h4>';
        }

        unset($_SESSION['errors_signup']);
    }else if (isset($_GET["signup"]) && $_GET["signup"] === "success"){
        echo "<br>";
        echo '<h4 class="text-success d-flex align-items-center justify-content-center">Signup success </h4>';

    };
}
?>