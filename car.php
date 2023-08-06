


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body >

<!-- Carousel -->
<div class="d-flex ">
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators" >
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" ></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1" ></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2" ></button>
    </div>
    
    <!-- The slideshow/carousel -->
    <div class="carousel-inner ">
        <div class="carousel-item active">
        <img src="Photos/ID1/1.jpg" alt="Los Angeles" class="d-block" style="
  max-height: 500px;
  object-fit: scale-down; " >
        </div>
        <div class="carousel-item">
        <img src="Photos/ID1/2.jpg" alt="Chicago" class="d-block" style="
  max-height: 500px; 
  object-fit: scale-down; ">
        </div>
        <div class="carousel-item">
        <img src="Photos/ID1/3.jpg" alt="New York" class="d-block" style="
  max-height: 500px;
  object-fit: scale-down;">
        </div>
    </div>
    
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
    </div>

</div>    

</body>
</html>