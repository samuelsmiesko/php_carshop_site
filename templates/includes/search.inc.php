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
                
                $n = 0;
                
                foreach ($result as $value) {
                    //echo $n;
                    if($value['Milage'] < $milage){
                        echo "menej";
                
                        
                    }else{

                        unset($result[$n]);
                    }
                    print_r($value);
                  
                    ++$n;
                }
                session_start();
                
                $_SESSION['result'] = $result;
            }else{
                
            }
            

              
            header("Location: http://localhost/dashboard/AJAX_PHP/filter.php");
                
            die();
            
        }catch(Exception $e){
            
            die();
        
        }

    }
    

?>