<?php

if($_SERVER["REQUEST_METHOD"] ==="POST"){

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    

    try {

        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        $errors = [];

        
        if(is_input_empty($username, $pwd)){
            $errors["empty_input"] = "Fill in all fields";
        }

        $result = get_user($pdo,$username);

        print_r($result);

        if(is_username_wrong($result)){
            $errors["login_incorrect"] = "Incorrect login info!";
        };

        if(!is_username_wrong($result) && is_password_wrong($pwd, $result["pwd"])){
            $errors["login_incorrect"] = "Incorrect login info!";
        };

        require_once 'config_session.inc.php';

        if($errors){

            $_SESSION["errors_signup"] = $errors;

            header("Location: http://localhost/dashboard/AJAX_PHP/templates/loginForm.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_". $result["id"];
        session_id($sessionId);

        $SESSION['user_id'] = $result["id"];
        $SESSION['user_username'] = htmlspecialchars($result["username"]);
        $SESSION['user_id'] = time();

        header("Location: http://localhost/dashboard/AJAX_PHP/core.php?login=success");
        $pdo = null;
        $statement = null;

        die();

    }catch(Exception $e){
       die("Query failed:".$e->getMessage());
    }
    
}else{
    header("Location: http://localhost/dashboard/AJAX_PHP/core.php");
    die();
}


?>