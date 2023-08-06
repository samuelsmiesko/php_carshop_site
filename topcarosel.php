<style>
#container
{
  width: 100%;
  height: 300px;
  object-fit: cover;
  filter: blur(4px);
  -webkit-filter: blur(2px);
  animation-name: example;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  
}

@keyframes example {
  0%   {opacity: 0.8;}
  10%  {opacity: 1.0;}
  90%  {opacity: 1.0;}
  100% {opacity: 0.8;}
}
</style>



<img id="container" src="Photos/s3.jpg" alt="image">
</img>

<script type="text/javascript">

  let image = document.getElementById('container');
  let images = ["Photos/s2.jpg","Photos/s1.jpg","Photos/s3.jpg"]
  let random = 0;
  setInterval(function() {
    
    
    
    if(random < 2){
      random++;
      
    }else{
      random=0;
    }
    image.src=images[random];
  }, 3000);


</script>
