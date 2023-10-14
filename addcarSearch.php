<?php

include("./templates/db/dbh.php");

$queryBrand = "SELECT * FROM carsdata group by Brand";

$resultBrand = mysqli_query($conn,$queryBrand);

$queryModel = "SELECT * FROM carsdata group by Model";

$resultModel = mysqli_query($conn,$queryModel);



?>

<script type="text/javascript">
    $(document).ready(function(){
        $(document).on("change","#sel1",function(){
            var val = $(this).val();
            console.log(val);
            
                
            $.ajax({
                type: "POST",
                url:"addcarFilter.php",
                datatype:'json',
                data: {selected:val},
                success:function(result){
                    $('#sel2').html(result);
            }
        });

        });

    });
</script>
    <form action="../ajax_php/templates/includes/addcar.inc.php" method="post">
        <div class="form-group" >
            <label for="sel1">Vyberte značku:</label>
            <select class="form-control mt-3" name='sel1' id="sel1">
                <option value="">Všetky</option>
                <?php
                if ($resultBrand->num_rows > 0) {
                while($row = $resultBrand->fetch_assoc()) {    
                    echo "<option  value=".$row["Brand"].">" .  $row["Brand"] . "</option>"  ;
                }} ?>
            </select>
        
        </div>
        <div class="form-group" >
            <label for="sel2">Vyberte model</label>
            <select class="form-control mt-3" name='sel2' id="sel2" >
                <option>Všetky</option>
                <?php  if ($resultModel->num_rows > 0) {
                while($row = $resultModel->fetch_assoc()) {    
                    echo "<option value=".$row["Model"]. ">" .  $row["Model"] . "</option>"  ;
                }} ?>
            </select>
        </div>        
        
        <div class="form-group mt-3">
            <label for="NoMiles">Najazdene kilometrov</label>
            <input type="text" class="form-control" id="millage" name="NoMiles" placeholder="Počet kimotrov">
        </div>

        <div class="form-group mt-3">
            <label for="NoProduction">Rok výroby</label>
            <input type="text" class="form-control" id="year" name="NoProduction" placeholder="Rok výroby">
        </div>

        <div class="form-group mt-3">
            <label for="location">Lokalita</label>
            <select class="form-control mt-3" name='location' id="location" >
                <option selected>Kraj...</option>
                <option value="Bratislavský kraj">Bratislavský kraj</option>
                <option value="Trnavský kraj">Trnavský kraj</option>
                <option value="Trenčiansky kraj">Trenčiansky kraj</option>
            </select>
        </div>

        <div class="mb-3 mt-3">
            <label for="FileForPhoto" class="form-label">Choose photo</label>
            <input class="form-control" type="file" name="FileForPhoto" id="formFile">
        </div>

        <div class="mb-5 mt-5 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    




<?php 

?>





