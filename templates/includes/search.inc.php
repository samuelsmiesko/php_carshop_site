<?php

if($_SERVER["REQUEST_METHOD"] ==="POST"){

    
    
        
        $year = $_POST['year'];
        $price = $_POST['price'];
        $milage = $_POST['milage'];
        $location = $_POST['location'];



        try {

            require_once 'dbh.inc.php';
            require_once 'search_model.inc.php';
            require_once 'search_contr.inc.php';

            $result = get_car($pdo);

                
            if(filter_cars_millage($milage)){
                
                $a = 0;
                
                foreach ($result as $value) {
                    if($value['Milage'] < $milage){
                    }else{
                        //unset($result[$a]);
                        $result[$a] ='';
                    }
                    ++$a;
                } 
            }

            print_r($result);
            echo '</br>';

            // if(filter_cars_price($price)){
                
            //     $n = 0;
            //     foreach ($result as $value) {
            //         if($value['price'] <br $price){
            //         }else{
            //             unset($result[$n]);
            //         }
            //         ++$n;
            //     } 
            // }

        
            if(filter_cars_location($location)){
                
                $n = 0;
                foreach ($result as $value) {

                    if($value['Adress'] === $location){
                        
                    }else{
                        
                        //array_splice($result[$n],1);
                        $result[$n] ='';
                    }
                    ++$n;
                } 
            }else{
                echo 'no location found';
            }
            print_r($result);
            echo '</br>';

            if(filter_cars_year($year)){
                
                  $b = 0;
                  foreach ($result as $value) {

                     
                      if($value['Year'] == $year){
                      }else{
                          //unset($result[$b]);
                          
                          $result[$b] ='';
                      }
                      ++$b;
                } 
             }
            
            
            session_start();
                
            $_SESSION['result'] = $result;

              
            header("Location: http://localhost/dashboard/AJAX_PHP/filter.php");
                
            die();
            
        }catch(Exception $e){
            
            die();
        
        }

    }
    

?>