<?php

include("./templates/db/dbh.php");
    
    if(isset($_POST['selected'])){
        
        $userAnswer = $_POST['selected'];

        $query = "SELECT * FROM carsdata WHERE Brand= '$userAnswer'";

        $result = mysqli_query($conn,$query);

         if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {    
                 echo "<option  value=".$row["Model"].">" .  $row["Model"] . "</option>"  ;
         }};

        
           
    }else{
        echo "<h1>No select</h1>";
    };

    



?>