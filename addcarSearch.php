<?php

include("./templates/db/dbh.php");

$query = "SELECT * FROM carsdata group by Brand";

$result = mysqli_query($conn,$query);

?>
    <form>
        <div class="form-group" >
            <label for="sel1">Vyberte značku:</label>
            <select class="form-control" id="sel1">

            <option>Všetky</option>
            <?php
            if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {    
                echo "<option>" .  $row["Brand"] . "</option>"  ;
              }} ?>
            </select>
            <br>
            <label for="sel2">Vyberte model</label>
            <select multiple class="form-control" id="sel2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            </select>
        </div>
    </form>

<?php


?>



<!-- <p><?php echo $result. 'done';?></p> -->