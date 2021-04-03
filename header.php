<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>NTC | Project</title>

  <link rel="stylesheet" href="<?php echo base_url()?>public/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>public/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
    <center>  <span class="brand-text font-weight-light"><b>NTC PROJECT</b></span></center>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
      <center><ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="<?php echo base_url().'CustomerController/index';?>" class="nav-link active">
                  <p>Customer Detail</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url().'ContactController/index'?>" class="nav-link active">
                 <p>Contact Detail</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url().'ContactController/index'?>" class="nav-link active">
                  <p>Revenue</p>
                </a>
              </li>

            </ul>
          </li>
          
        </ul>
      </nav></center>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

</body>
</html>