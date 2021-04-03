<?php
defined('BASEPATH') OR exit('No direct script access allowed');


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="uft-8">
    <title>Customer|detail</title>
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
            window.location.href = "/Ntelecom1";
        });
    });
  </script>


    <style>
        .top-bar{
            text-align:center;
            margin:25px 25px;
            background: #ece0cf;
            border-bottom: 1px solid black;

        }
        .top-bar h1 {
            color: brown;
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
</head>
<body>
<div class="top-bar"> <h1>.....Contact Detail.....</h1></div>
   <div><center>
    <div  id="container">

<?php if (!empty($contact)) { ?>
    <table border="1" class="call_list">
    <tr>
        <th>S.No. </th>
        <th>Customer No. </th>
        <th>Opponent no. </th>
        <th>Date </th>
        <th>Time </th>
        <th>Location From </th>
        <th>Location To </th>
        <th>Revenue </th>
    </tr>

   
    <?php $i=1;?>
   
    <?php foreach($contact as $cont):?>

    <tr>
        <td><?php echo $i++?></td>
        <td><?php echo $cont['custno'];?></td>
        <td><?php echo $cont['oppono'];?></td>
        <td><?php echo $cont['date'];?></td>
        <td><?php echo $cont['time'];?></td>
        <td><?php echo $cont['locfrom'];?></td>
        <td><?php echo $cont['locto'];?></td>
        <td><?php echo $cont['revenue'];?></td>
    </tr>
    <?php endforeach;?>
    </table>
<?php } else {?>
<p>Contact record not found!!!!!!!</p>
 <?php } ?>


    </div></center>
    <center><strong>Copyright &copy; 2021</br>... <a href="https://adminlte.io">Nepal Telecom</a>...</strong> </center>
    </div>
</body>
</html>
