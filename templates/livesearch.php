<?php

include("../templates/db/dbh.php");
if(isset($_POST['input'])){
    $input = $_POST['input'];

    $query = "SELECT * FROM comments WHERE NameBrand LIKE '{$input}%' ";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){

        ?>
        <table class="table table-hover">
            <tbody>
            <?php while($row = mysqli_fetch_array($result)){
          
                $name = $row['NameBrand'];
                $car = $row['CarName'];
                $year = $row['Year'];

                $dir =
                    "../templates/database/article" . $row["id"] . "/"; //;

                $b = scandir($dir);

                if (count($b) == 0 || count($b) == 2) {
                    $c = "../ajax_php/templates/database/blank.jpg";
                } else {
                    $c =
                        "../ajax_php/templates/database/article" .
                        $row["id"] .
                        "/" .
                        $b[2];
                }
                 
                
            }?>
                <tr>
                    <td>
                        <img src=<?php echo $c?> class="img rounded" alt="img" style=" max-height: 30px; ">
                    </td>
                    <td><?php echo $year;?></td>
                    <td><?php echo $name;?></td>
                    <td><?php echo $car;?></td>
                    
                <tr>
            </tbody>
        </table>



<?php
    }else{
        echo "<h6 class='text-danger text-center mt-3'>No data Found</h6>";
    }
}

?>