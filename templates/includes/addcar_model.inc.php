<?php


function get_last_id(object $pdo){

    $query = "SELECT * FROM comments";
    $pdo->prepare($query);
    $last_id = $pdo->lastInsertId();
    //echo "New record created successfully. Last inserted ID is: " . $last_id;

     $path = "/xampp/htdocs/dashboard/ajax_php/templates/database/article".$last_id;

     if (!is_dir($path)) {
         mkdir($path, 0777, true);
     }
    return $last_id;

};

function add_car_to_table(object $pdo, string $carBrand, string $carModel, 
    int $kilometers, string $location, int $year){

    $query = "INSERT INTO comments (NameBrand, CarName, Milage, Adress, Year)
    VALUES ('$carBrand', '$carModel', '$kilometers', '$location', '$year')";

    $stmt = $pdo->prepare($query);
    
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;


}


?>