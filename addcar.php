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

</div>
<?php include('templates/footer.php'); ?>    
</body>
</html>