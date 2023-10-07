<?php 
declare(strict_types=1);


session_start();
function output_filtered_cars(){
    
    if(isset($_SESSION['result'])){
        
        
        $arrlength = count($_SESSION['result']);

        for($i = 0; $i < $arrlength; $i++){

            
            $dir ="../ajax_php/templates/database/article" . $_SESSION['result'][$i]["id"] . "/"; //;
    
            $b = scandir($dir);
    
            if (count($b) == 0 || count($b) == 2) {
                $c = "../ajax_php/templates/database/blank.jpg";
            } else {
                $c ="../ajax_php/templates/database/article" .$_SESSION['result'][$i]["id"] ."/" .$b[2];
            }
                    
            ?>
            <div id="<?php echo $_SESSION['result'][$i]["id"]; ?>" class="container text-bg-light mt-3 p-3" >
                <div class="d-flex justify-content-between flex-row ">
                    <h3 ><?php echo $_SESSION['result'][$i]["NameBrand"] ." " .$_SESSION['result'][$i]["CarName"]; ?></h3>
                    <h5 >Číslo inzerátu: <?php echo $_SESSION['result'][$i]["id"]; ?></h5>
                </div>
                <div class="row " >
                    <div class="col-sm-6">
                        <img src=<?php echo $c; ?> class="rounded" alt="Cinque Terre" style="object-fit: contain; max-height: 150px;"> 
                    </div>
                    <div class="col-sm-6">
                        <p>Počet kilometrov: <?php echo $_SESSION['result'][$i]["Milage"]; ?></p>
                        <p>Rok výroby: <?php echo $_SESSION['result'][$i]["Year"]; ?></p>
                    </div>
                </div>  
            </div> 
<?php             
        }; 
    };
};

function view_selected_car(){

};

