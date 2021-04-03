<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
<title>Form</title>





<style>
    .row{
        text-align:center;
        margin:25px 25px;
        background: #ece0cf;
        border-bottom: 1px solid black;

    }
    #container{
        border-bottom: solid;
    }
</style>
</head>
<body>

<div class="row">
	
		<center><h1 class="page-header">Customer Detail</h1></center>
	
</div><!--/.row-->

<div><center>
    <div  id="container">
        <form action="<?php echo base_url().'CustomerController/filter'?>" method="post">
            <p>Mobile No. : <input type="text" id="form" name="from" size="20">
            </br></br>
            <button  type="submit" id="filter" name="button"><b>Search data</b></button>
            <button  type="button" id="reset" name="button"><b>Reset</b></button>
            </p>
        </form>
    
    </div>
    <strong>Copyright &copy; 2021</br>... <a href="https://adminlte.io">Nepal Telecom</a>...</strong> 
</div></center>
</body>
</html>
