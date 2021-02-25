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
            window.location.href = "/Ntc";
        });
    });
  </script>
    <style> 
    .top-bar{
        text-align:center;
        margin:25px 25px;

    }
    .top-bar h1 {
        color:blue;
    }
    .call_list{
        margin:100px, 0px, 100px, 0px;
    }
    h1 {
		border-bottom: 1px solid #D0D0D0;
		font-size: 50px;
        color: #CEF6EC;
		font-weight: bold;
		margin: 0;
		padding: 14px 15px 10px 15px;
	}
    h3{
		background-color: #585858;
		border-bottom: 1px solid #D0D0D0;
		font-size: 20px;
        color: #CEF6EC;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
    table {
        border-spacing: 3px;
        border-color:black;
        background-color:#F3F781;
        color:black;
    }
    #container{
		border-bottom: solid;
		font-size: 25px;
        color: black;
		font-weight: bold;
		margin: 0 0 0px 0;
		padding: 14px 15px 10px 15px;
    }
    </style>

    </script>
</head>
<body>
<div class="top-bar"> <h1>NTC Report</h1></div>
   <div><center>
    <div  id="container">
    <form action="" method="post">
    <p>From: <input type="text" id="datepicker" name="from" size="20">
  To: <input type="text" id="datepicker2" name="to" size="20">
   <button  type="submit" id="filter" name="button"><b>Filter</b></button>
   <button  type="button" id="reset" name="button"><b>Reset</b></button>
   </p>
   </form>
    
    
   
<?php if (!empty($cellid)) { ?>
    <table border="1" class="call_list">
    <tr>
        <th>S.No.</th>
        <th>CellId</th>
        <th>Time</th>
        <th>Volume</th>
        <th>Rev Date</th>
    </tr>
    <?php $i=1;?>
    <?php foreach($cellid as $cell):?>
    <tr>
        <td><?php echo $i++?></td>
        <td><?php echo $cell['CELLID'];?></td>
        <td><?php echo $cell['TIME'];?></td>
        <td><?php echo $cell['VOLUME'];?></td>
        <td><?php echo $cell['REVDATE'];?></td>
    </tr>
    <?php endforeach;?>
    </table>
<?php } else {?>
<p>Data Not Found</p>
 <?php } ?>
    <p>&copy; 2021</p>
    </div></center>
</body>
</html>