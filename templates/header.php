
<?php 

require_once 'includes/login_view.inc.php';

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The site</title>
    <link href="/paint.ico" rel="icon" type="image/x-icon" sizes="16x16"/>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body{
        overflow-x: hidden;
      }
    </style>
</head>
<body>

<div class="m-3 w-25">
  <div class="input-group ">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-append">
      <button class="btn btn-success" type="submit">Go</button>
    </div>
  </div>
    </div>



<h3>
  <?php
    output_username()
  ?>
</h3>
<div class="w-100">

<?php include('topcarosel.php'); ?>  
</div>

<div class="w-100  ">
  <nav class="navbar navbar-expand-sm bg-light sticky-top ">
    <div class="container">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="core.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="filter.php">Filter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Map</a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<?php include('addvertisment.php'); ?>  
