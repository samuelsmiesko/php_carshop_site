<?php 

declare(strict_types=1);

function output_username(){
    if(isset($_SESSION['user_id'])){
        echo "you are logged in as ". $_SESSION["username"];
    }else{
        echo "you are not logged in";
    }
};

function check_login_errors(){
    if(isset($_SESSION["errors_login"])){
        $errors = $_SESSION["errors_login"];

        echo "<br>";

        foreach($errors as $error ){
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION["errors_login"]);
    }

    else if (isset($_GET["login"]) && $_GET["login"] === "success"){
        
    }
}