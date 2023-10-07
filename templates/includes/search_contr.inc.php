<?php

declare(strict_types=1);

    

    function filter_cars_millage(string|int $milage){

       if($milage != 'Počet kilometrov...'){
            return true;
       }else{
            return false;
       }
        
    };

?>