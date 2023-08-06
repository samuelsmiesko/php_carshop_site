<style>
#add
{

  animation-name: moveimage;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  
  
}

@keyframes moveimage {
  0%   {
        display: none;
        margin-left: -20%;
    }
  10%  {
        display: block;
        margin-left: 0%;
  }
  90%  {
        display: block;
        margin-left: 0%;
  }
  100% {
        display: none;
        margin-left: 20%;
    }
}
</style>



<div id="add" class="container-fluid d-flex justify-content-center h-25 p-2">
    <div class="d-flex flex-column">
        <h2>Filter</h2>    
        <img id="containerForAdd" src="templates/Images/filter.jpg" class="rounded" alt="Cinque Terre" width="304" height="236"> 
        <p>Oil filter for engine with discount</p>   
    </div>
</div>

<script type="text/javascript">

  let imageForAdd = document.getElementById('containerForAdd');
  let imagesForAdd = ["templates/Images/belt.jpg","templates/Images/filter.jpg","templates/Images/spark.jpg"]
  let randomForAdd = 0;
  setInterval(function() {
    
    
    
    if(random < 2){
        randomForAdd++;
      console.log(randomForAdd);
    }else{
        randomForAdd=0;
    }
    imageForAdd.src=imagesForAdd[randomForAdd];
  }, 3000);


</script>