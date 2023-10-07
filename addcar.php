<?php include('templates/header.php'); ?> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">

  $(document).ready(function() {

    $.ajax({

        url:"addcarSearch.php",
        success:function(result){
            $('#carSpec').html(result);
        }
    });

  });

</script>


<div class="container">
  <div id="carSpec"></div>
  <h2>Zadajte špecifikaciu auta</h2>
  <p>Vyberte s možnosti:</p>
  <form>
    
    <div class="form-group" >
      
      <label for="sel1">Vyberte značku:</label>
      <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      <br>
      <label for="sel2">Vyberte model</label>
      <select multiple class="form-control" id="sel2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
  </form>
</div>
<?php include('templates/footer.php'); ?>    
</body>
</html>