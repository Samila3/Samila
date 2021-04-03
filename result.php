<?php
defined('BASEPATH') OR exit('No direct script access allowed');


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Customer|detail</title>
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
<div class="top-bar"> <h1>Customer Detail</h1></div>
   <div><center>
    <div  id="container">

<?php if (!empty($customer)) { ?>
    <table border="1" class="call_list">
    <tr>
        <th>S.No. </th>
        <th>Name </th>
        <th>Permanent Address </th>
        <th>Mobile No. </th>
    </tr>

   
    <?php $i=1;?>
   
    <?php foreach($customer as $mob):?>

    <tr>
        <td><?php echo $i++?></td>
        <td><?php echo $mob->name;?></td>
        <td><?php echo $mob->address;?></td>
        <td><?php echo $mob->mobile;?></td>
    </tr>
    <?php endforeach;?>
    </table>
<?php } else {?>
<p>Data Not Found</p>
 <?php } ?>


    </div></center>
    <center><strong>Copyright &copy; 2021</br>... <a href="https://adminlte.io">Nepal Telecom</a>...</strong> </center>
    </div>
</body>
</html>
