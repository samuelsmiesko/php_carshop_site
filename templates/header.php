
<?php

 require_once '../ajax_php/templates/includes/login_view.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The site</title>
    <link href="/paint.ico" rel="icon" type="image/x-icon" sizes="16x16"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body{
        overflow-x: hidden;
      }
    </style>
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">

  $(document).ready(function() {

  $("#live_search").keyup(function(){

      var input = $(this).val();
      

      if(input != ''){
          $('#searchresult').css('display','block');
          $.ajax({

              url:"templates/livesearch.php",
              method:"POST",
              data:{input:input},

              success:function(data){
                  $('#searchresult').html(data);
              }
          });
      }else{
          $('#searchresult').css('display','none');
      }
  });
  });

</script>

<body>
<div class="row">
  <div class="p-3 col-lg-3 col-md-4 col-sm-4 ">
    <div class="input-group ">
      <input id="live_search" type="text" class="form-control" placeholder="Search">
      <div class="input-group-append">
        <button class="btn btn-success" type="submit"><span class="bi-search"></span> Search</button>
      </div>
    </div>
  </div>
</div>
<div class="row">
  
    <div id="searchresult" class="p-3 col-lg-3 col-md-4 col-sm-4" 
      style="position: absolute; top: 60px; left: 5px;
      z-index: 1;border: 1px solid grey;
      height: 200px; background: white; border-radius: 5px;
      display: none"
      >
    </div>
  
</div>



<h3>

</h3>
<div class="w-100">

<?php include('topcarosel.php'); ?>
</div>

<div class="w-100  ">
  <nav class="navbar navbar-expand-sm bg-light sticky-top ">
        <ul class="d-none d-sm-flex ms-4 navbar-nav me-auto">

          <li class="nav-item">
            <a class="nav-link" href="filter.php">Filter</a>
          </li>
        </ul>
        <div class="d-flex d-sm-none ms-3">
          <i class='material-icons' style='font-size:36px'>reorder</i>
        </div>
      <div class="d-sm-flex me-4 ">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link">
              <?php
                output_username()
              ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" >
              <?php
                outPut_button()
              ?>
            </a>
          </li>
        </ul>
      </div>

  </nav>
</div>


<?php include('addvertisment.php'); ?>
