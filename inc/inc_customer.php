<?php
include_once('classes/application_top.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vehicle Renting System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
      <?php
        if (!($_SESSION['status'] == 'logedin')) {
            echo "<script> window.location='index.php';</script>";
            die();
        }
        ?>

        <style>
            .navbar {
      background-color: lightcyan;
      margin-bottom: 0px;
    }
  hr { 
  display: block;
  color: black;
 margin: 0px;
  border-style:ridge;
  border-radius:2px;
  border-width:;
}
        </style>
     </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar">
      <div class="container">
        <div class="col-md-9">
        <a class="navbar-brand" href="index.php"><img src="img/focus-vehicle-rental-logo.png" height="80px",
          width="150px" alt="image""  ></a>
</div>
<div class="col-md-3">
       <span style="color: red;">Welcome,</span> 
      <?php if (isset($_SESSION['username'])) {
        echo $_SESSION['username'];
      }
      ?>

      <a class="btn btn-danger" href="logout.php"><span style="color: white; ">Logout</span></a>
                                    
      </div>

    </div>
    </nav>
    <hr>