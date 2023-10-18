<?php

 require_once '../ajax_php/templates/includes/login_view.inc.php';

?>

<form action="../ajax_php/templates/includes/search.inc.php" method="post">

    <div class="container-fluid p-3 d-flex justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <select name="milage" class="form-select" aria-label="Default select example">
                        <option selected value="Počet kilometrov...">Počet kilometrov...</option>
                        <option value="50000">50000</option>
                        <option value="100000">100000</option>
                        <option value="150000">150000</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <select name="location" class="form-select" aria-label="Default select example">
                        <option value="Kraj..." selected>Kraj...</option>
                        <option value="Bratislavský kraj">Bratislavský kraj</option>
                        <option value="Trnavský kraj">Trnavský kraj</option>
                        <option value="Trenčiansky kraj">Trenčiansky kraj</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <select name="price" class="form-select" aria-label="Default select example">
                        <option selected value="Cena Eur">Cena Eur</option>
                        <option value="5000">5000</option>
                        <option value="10000">10000</option>
                        <option value="15000">15000</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <select name="year" class="form-select" aria-label="Default select example">
                        <option selected value="Rok výroby">Rok výroby</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
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