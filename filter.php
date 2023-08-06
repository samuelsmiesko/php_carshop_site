<?php include('templates/db/dbh.php'); ?>
<?php include('templates/header.php'); ?> 
<?php include('dropdown.php'); ?>    




    <?php 
        $sql = "SELECT * FROM comments LIMIT 2";
        $results = mysqli_query($conn, $sql);
        if(mysqli_num_rows($results) > 0){
            while($row = mysqli_fetch_assoc($results)){?>
                <div class="container text-bg-light mt-3 p-3">
                    <div class="d-flex justify-content-between flex-row ">
                        <h3 ><?php echo $row['author'];?></h3>
                        <h5 >Číslo inzerátu: <?php echo $row['id'];?></h5>
                    </div>
                    <div class="d-flex justify-content-between flex-row ">
                        <div class="col-sm-6">
                            <img src="../ajax_php/templates/database/blank.jpg" class="rounded" alt="Cinque Terre"> 
                        </div>
                        <div class="col-sm-6">
                            <p>Počet kilometrov: <?php echo $row['message'];?></p>
                        </div>
                    </div>
                    
                </div>        
                       
    <?php     }
        }else{
            echo "there ar no comments";
        }
    ?>




<?php include('templates/footer.php'); ?>    