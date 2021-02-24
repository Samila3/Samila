<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="uft-8">
    <title>Timevolcell data</title>
</head>
<body>
   <div><center>

   <!DOCTYPE html>
    <html>
    <head>
    <title>NTC Project</title>
    </head>
    <body>

    <h1>NTC</h1>
    <style> 
    h1 {
		background-color: #585858;
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
    #h2{
        background-color: #848484;
		border-bottom: solid;
		font-size: 20px;
        color: #CEF6EC;
		font-weight: normal;
		margin: 0 0 5px 0;
		padding: 14px 15px 10px 15px;
    }
    table {
        border-spacing: 3px;
        border-color:black;
        background-color:#F3F781;
        color:black;
    }
    #container{
        background-color: #848484;
		border-bottom: solid;
		font-size: 25px;
        color: black;
		font-weight: bold;
		margin: 0 0 0px 0;
		padding: 14px 15px 10px 15px;
    }
    </style>
    </body>
    </html>
    
    <div  id="container">
   <!doctype html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Datepicker - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
    $( "#datepicker" ).datepicker();
    } );

   

    </script>
    </head>
    <body>
    <p>Date: <input type="text" id="datepicker"></p>
    </body>
    </html></div>
   
<div id="h2">
    <table border="1">
    <tr>
        <th>CellId</th>
        <th>Time</th>
        <th>Volume</th>
        <th>RevDate</th>
    </tr>
    <?php foreach($cellid as $cell):?>
    <tr>
        <td><?php echo $cell['CELLID'];?></td>
        <td><?php echo $cell['TIME'];?></td>
        <td><?php echo $cell['VOLUME'];?></td>
        <td><?php echo $cell['REVDATE'];?></td>
    </tr>
    <?php endforeach;?>
    </table>
    </div>
    <h3>This is the Project of NTC.....</h3>
    </div></center>
</body>
</html>