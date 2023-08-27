<?php 

if($_SERVER["REQUEST_METHOD"] ==="POST"){
    
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];
    
    try{

        require_once 'dbh.inc.php';

        require_once 'signup_model.inc.php';

        require_once 'signup_view.inc.php';

        require_once 'signup_contr.inc.php';

        // 

        $errors = [];

        
        
        if(is_input_empty($username, $pwd, $email)){
            $errors["empty_input"] = "Fill in all fields";
        }

        if(is_input_invalid( $email)){
            $errors["invalid_input"] = "Invalid email used";
        }
        if(is_username_invalid( $pdo, $username)){
            $errors["username_taken"] = "Username already taken";
        }
        if(is_username_registered( $pdo, $email)){
            $errors["email_used"] = "Email already registered";
        }

        require_once 'config_session.inc.php';

        if($errors){

            $_SESSION["errors_signup"] = $errors;
            header("Location: http://localhost/dashboard/AJAX_PHP/templates/loginForm.php");
            echo 'here 9';
        }
        

    }catch(Exception $e){
        die("Query failed:".$e->getMessage());
    }

}else{
    header("Location: http://localhost/dashboard/AJAX_PHP/core.php");
    die();
}

?>