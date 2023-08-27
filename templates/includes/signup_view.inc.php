<?php 

declare(strict_types=1);


function check_signup_errors(){
    if(isset($_SESSION['errors_signup'])){
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach($errors as $error){
            echo '<h4 class="text-danger d-flex align-items-center justify-content-center">' . $error . '</h4>';
        }

        unset($_SESSION['errors_signup']);
    }
}
?>