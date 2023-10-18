<?php

declare(strict_types=1);

    

    function filter_cars_millage(string|int $milage){

       if($milage != 'Počet kilometrov...'){
            return true;
       }else{
            return false;
       }
        
    };

    function filter_cars_year(string|int $year){

     if($year != 'Rok výroby'){
          return true;
     }else{
          return false;
     }
      
     };

     function filter_cars_price(string|int $price){

          if($price != 'Cena Eur'){
               return true;
          }else{
               return false;
          }
           
          };

     function filter_cars_location(string|int $location){

               if($location != 'Kraj...'){
                    return true;
               }else{
                    return false;
               }
                
               };

?>