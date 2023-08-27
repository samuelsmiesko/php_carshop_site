<?php include('templates/db/dbh.php'); ?>
<?php include('templates/header.php'); ?> 
<?php include('dropdown.php'); ?>    




    <?php 

        

        $sql = "SELECT * FROM comments LIMIT 2";
        $results = mysqli_query($conn, $sql);
        if(mysqli_num_rows($results) > 0){
 
            while($row = mysqli_fetch_assoc($results)){?>

                <?php 
                    $dir = "../ajax_php/templates/database/article" . $row['id'] ."/";//;
                    
                    $b = scandir($dir);
                    

                    if(count($b) == 0 || count($b) == 2) {
                        
                        $c ="../ajax_php/templates/database/blank.jpg";
                        
                    } else {
                        
                        $c ="../ajax_php/templates/database/article" . $row['id']  ."/" . $b[2];
                        
                    }
                    
                    

                    
                ?> 
                
                <div class="container text-bg-light mt-3 p-3">
                    <div class="d-flex justify-content-between flex-row ">
                        <h3 ><?php echo $row['NameBrand'] . " " . $row['CarName'] ?></h3>
                        <h5 >Číslo inzerátu: <?php echo $row['id'];?></h5>
                    </div>
                    <div class="row ">
                        <div class="col-sm-6">
                        
                            <img src=<?php echo $c ?> class="rounded" alt="Cinque Terre" style="width: 100%;"> 
                        </div>
                        <div class="col-sm-6">
                            <p>Počet kilometrov: <?php echo $row['Milage'];?></p>
                            <p>Rok výroby: <?php echo $row['Year'];?></p>
                        </div>
                        
                    </div>
                    
                </div>    
                     
                       
    <?php     }
        }else{
            echo "there ar no comments";
        }
    ?>




<?php include('templates/footer.php'); ?>    

   