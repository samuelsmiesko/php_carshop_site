<?php

declare(strict_types=1);

function get_car(object $pdo){

    $query = "SELECT * FROM comments";
    $stmt = $pdo->prepare($query);
    
    $stmt->execute();
    //print_r($stmt->fetchAll());

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;


};

?>