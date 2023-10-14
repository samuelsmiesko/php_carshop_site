<?php

declare(strict_types=1);

function is_year_correct(int $year){

    if(1900 < $year && $year < 2025){
        return true;
    }else{
        return false;
    }
        
};

?>