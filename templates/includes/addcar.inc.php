<?php

//header("Location: http://localhost/dashboard/AJAX_PHP/filter.php");



if($_SERVER["REQUEST_METHOD"] ==="POST"){

    $carBrand = $_POST["sel1"];
    $carModel = $_POST["sel2"];
    $kilometers = $_POST["NoMiles"];
    $location = $_POST["location"];
    $year = $_POST["NoProduction"];
    $photo = $_POST["FileForPhoto"];
    
    try{

        require_once 'dbh.inc.php';
    
        require_once 'addcar_model.inc.php';
    
        require_once 'addcar_contr.inc.php';

        $errors = [];

        if(is_year_correct( $year)){
            $errors["Year_incorrect"] = "Incorrect year of production!";
        };

        $result = add_car_to_table($pdo, $carBrand,  $carModel, 
            $kilometers, $location,  $year);

        $$last_id = get_last_id($pdo);

        header("Location: http://localhost/dashboard/AJAX_PHP/filter.php?add=success");
        $pdo = null;
        $statement = null;
    
        die();



    }catch(Exception $e){
        die("Query failed:".$e->getMessage());
     }

    // $query = "INSERT INTO comments (NameBrand, CarName, Milage, Adress, Year)
    // VALUES ('$carBrand', '$carModel', '$kilometers', '$location', '$year')";

    // $result = mysqli_query($conn,$query);

    // $lastID = 'SELECT * FROM comments LAST_INSERT_ID';

    // $result2 = mysqli_query($conn,$lastID);
    
    // echo $result2[0];

    // return $result;
    

    
}



// function createFolder(){
//     require_once '/xampp/htdocs/dashboard/ajax_php/templates/db/dbh.php';
//     $query = 'SELECT * FROM comments';
//     $result = mysqli_query($conn,$query);

//     if ($result->num_rows > 0) {
//         $length = 0;
//         while($row = $result->fetch_assoc()) {    
            
//             $length=$row['id'];
            
//     }};
    
//     $path = "/xampp/htdocs/dashboard/ajax_php/templates/database/article".$length;

//     if (!is_dir($path)) {
//         mkdir($path, 0777, true);
//     }
    


// }



    





