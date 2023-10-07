
        <!-- if (mysqli_fetch_assoc($_SESSION['result']) > 0) {
            while ($row = mysqli_fetch_assoc($_SESSION['result'])) { 
    
                    
                    $dir =
                        "../ajax_php/templates/database/article" . $_SESSION['result']["id"] . "/"; //;
    
                    $b = scandir($dir);
    
                    if (count($b) == 0 || count($b) == 2) {
                        $c = "../ajax_php/templates/database/blank.jpg";
                    } else {
                        $c =
                            "../ajax_php/templates/database/article" .
                            $_SESSION['result']["id"] .
                            "/" .
                            $b[2];
                    }
                    
                    ?>
                    <div class="container text-bg-light mt-3 p-3">
                        <div class="d-flex justify-content-between flex-row ">
                            <h3 ><?php echo $row["NameBrand"] .
                                " " .
                                $_SESSION['result']["CarName"]; ?></h3>
                            <h5 >Číslo inzerátu: <?php echo $_SESSION['result']["id"]; ?></h5>
                        </div>
                        <div class="row ">
                            <div class="col-sm-6">
                            
                                <img src=<?php echo $c; ?> class="rounded" alt="Cinque Terre" style="width: 100%;"> 
                            </div>
                            <div class="col-sm-6">
                                <p>Počet kilometrov: <?php echo $_SESSION['result']["Milage"]; ?></p>
                                <p>Rok výroby: <?php echo $_SESSION['result']["Year"]; ?></p>
                            </div>
                            
                        </div>
                        
                    </div>     -->
