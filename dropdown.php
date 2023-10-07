<?php

 require_once '../ajax_php/templates/includes/login_view.inc.php';

?>

<form action="../ajax_php/templates/includes/search.inc.php" method="post">

    <div class="container-fluid p-3 d-flex justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <select name="milage" class="form-select" aria-label="Default select example">
                        <option selected>Počet kilometrov...</option>
                        <option value="50000">50000</option>
                        <option value="100000">100000</option>
                        <option value="150000">150000</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <select name="location" class="form-select" aria-label="Default select example">
                        <option selected>Kraj...</option>
                        <option value="1">Bratislavský kraj</option>
                        <option value="2">Trnavský kraj</option>
                        <option value="3">Trenčiansky kraj</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <select name="price" class="form-select" aria-label="Default select example">
                        <option selected>Cena Eur</option>
                        <option value="5000">5000</option>
                        <option value="10000">10000</option>
                        <option value="15000">15000</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <select name="year" class="form-select" aria-label="Default select example">
                        <option selected value="0">Rok výroby</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="5">2002</option>
                        <option value="6">2003</option>
                        <option value="7">2004</option>
                        <option value="8">2005</option>
                    </select>
                </div>
            </div>
            <div class="m-3 d-flex align-items-center justify-content-center">
                
                <button type="submit" class="btn btn-danger ">Search</button>
                
                <?php
                    add_Search_button()
                ?>
            </div>
        </div>
        
    </div>
    
</form>