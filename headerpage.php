<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>UKDW Store</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">UKDW Store</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="about.php">
            <i class="fa fa-fw fa-square"></i>
            <span class="nav-link-text">About</span>
          </a>
        </li>      
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="contact.php">
            <i class="fa fa-fw fa-circle"></i>
            <span class="nav-link-text">Contact</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="tampilProduk.php">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">Produk</span>
        </a> </li> 
        <?php
        if(isset($_SESSION["username"])){ ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="tampil.php">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">Pengguna</span>
        </a> </li> 
        <li class="nav-item" data-toggle="tooltip" data-placement="right">
          <a class="nav-link" href="dataProduk.php">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">Data Produk</span>
        </a> </li> 

        <?php } ?>
        
      </ul>
    </div>
    <ul class="navbar-nav ml-auto">
      <?php if(isset($_SESSION["username"])){ ?>
          <li class="nav-item">
            <a class="nav-link"><?php echo "Hello: ".$_SESSION["username"] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="proseslogout.php">
              <i class="fa fa-fw fa-sign-out"></i>Logout</a>
          </li>
          
        
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="regis.php">
              <i class="fa fa-fw fa-sign-out"></i>Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="loginform.php">
              <i class="fa fa-fw fa-sign-out"></i>Login</a>
          </li>
        <?php } ?>
</ul>

  </nav>
  
  <div class="content-wrapper">
    <div class="container-fluid">
    