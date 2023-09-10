<?php 

declare(strict_types=1);


function get_username(object $pdo ,string $username){

        $query = "SELECT username FROM members WHERE username = :username;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username",$username);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
        
}

function get_email(object $pdo ,string $email){

    $query = "SELECT username FROM members WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email",$email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
    
}

function set_user($pdo, $pwd, $username, $email){

    $query = "INSERT INTO members (username, pwd, email) 
    VALUES (:username, :pwd, :email);";
    $stmt = $pdo->prepare($query);
    $options = [
        'cost' => 12
    ];
    
    $hashedPWD = password_hash($pwd, PASSWORD_BCRYPT, $options);
    $stmt->bindParam(":username",$username);
    
    $stmt->bindParam(":pwd",$hashedPWD);
    
    $stmt->bindParam(":email",$email);
    
    $stmt->execute();
    
    
};

?>