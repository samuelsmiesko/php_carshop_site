<?php 

declare(strict_types=1);


function output_username(){
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    
    if(isset($_SESSION['user_id'])){
        echo "<p class='d-none d-sm-flex btn btn-outline-success'>you are logged in as " . $_SESSION["user_username"]."</p>";
        
        echo "
                <div class='d-flex d-sm-none btn-group'>
                    <form action='../ajax_php/loginForm.php' method='post'>
                        <button type='submit' class='btn btn-danger text-white' 
                        style=border-top-right-radius:0px;border-bottom-right-radius:0px;>Log out</button>
                    </form>
                    <form action='../ajax_php/templates/includes/account.inc.php' method='post'>
                        <button type='submit' class='d-flex d-sm-none btn btn-outline-success' 
                        style=border-top-left-radius:0px;border-bottom-left-radius:0px;>". $_SESSION["user_username"]."</button>
                    </form>
                </div>
            ";
    }else{
        echo "<p class='d-none d-sm-flex btn btn-outline-dark disabled'>You are not logged in</p>";
        
    }
};

function check_login_errors(){
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
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

function outPut_button(){
    if(!isset($_SESSION["user_id"])){
        echo '
        <form action="../ajax_php/loginForm.php" method="post">
            <button type="submit" class="btn btn-info text-white" >
                  Log in
              </button>
        </form>';
         
    }else{
        
        
        echo '
        <form action="../ajax_php/templates/includes/logout.inc.php" method="post">
            <button type="submit" class="d-none d-sm-flex btn btn-danger text-white" >
                  Log out
            </button>
        </form>';   
          
    }

}



function add_Search_button(){
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    
    if(isset($_SESSION['user_id'])){
        echo'
        <div class="m-3 d-flex align-items-center justify-content-center">
            <a href="addcar.php" type="submit" class="btn btn-primary ">Add</a> 
        </div>';
        
        
    }
}
?>