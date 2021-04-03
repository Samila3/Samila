<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="uft-8">
    <title>Timevolcell data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NTC timevolcell</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
    $( "#datepicker" ).datepicker();
    } );

   /* $(function(){
    $("#filter").bind("click", function() {
        var from = $("#datepicker").val();
        var to = $("#datepicker2").val();
        alert(from + "  " + to);
    }); 
    });*/
    
    $( function() {
        $( "#datepicker2" ).datepicker();
    } );
    $(function(){
        $('#reset').click(function() {
            $("#datepicker").datepicker('setDate', null);
            $("#datepicker2").datepicker('setDate', null);
        });
    });
  </script>
    <style> 
     .row{
        text-align:center;
        margin:25px 25px;
        background: #ece0cf;
        border-bottom: 1px solid black;

    }
    .row h1{
        color: brown;
        align: center;
    }
    #container{
        border-bottom: solid;
    }
    </style>

    </script>
</head>
<body>
<div class="row">
	
		<h1 class="page-header">.....Contact Detail.....</h1>
	
</div><!--/.row-->
   <div><center>
    <div  id="container">
    <form action="<?php echo base_url().'ContactController/filter'?>" method="post">
            <p><b>Customer Phone No. : <input type="text" id="form" name="number" value="" size="40" placeholder="Enter the customer contact number......">
            <p>From:  <input type="text" id="datepicker" name="from" size="25">
            <p>To: </b><input type="text" id="datepicker2" name="to" size="22"></br></br>
   <button  type="submit" id="filter" name="button"><b>Search data</b></button>
   <button  type="button" id="reset" name="button"><b>Reset</b></button>
   </p>
   </form>
    
   
    
    </div></center>
    <center><strong>Copyright &copy; 2021</br>... <a href="https://adminlte.io">Nepal Telecom</a>...</strong> </center>
</body>
</html>