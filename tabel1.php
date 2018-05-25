<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>

<?php include('server.php') ?>

<style type="text/css">
  hr.star-light:after {
    color: #fff;
    background-color: #e64398!important;
    .content {
  height: auto;
  width: 100%;
  float: left;
  position: relative;
  z-index: 5;
  background: #fefefe;
  top: -10px;
  box-sizing: border-box;
}

.content div {
  position: relative;
  float: left;
  width: 0;
  height: 0;
  box-sizing: border-box;
  top: 0;
  left: 0;
  z-index: 1;
  opacity: 0;
  background: #fefefe;
}

}
</style>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Layanan AJS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    
  </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="" style="background-color: #27064C!important;">
      <div class="container" style="color: #F65E4A !important;">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="color: #F65E4A !important; font-size: 1.5em;"><strong>BERANDA</strong></a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" >
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <?php  if (isset($_SESSION['username'])) : ?>
                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger">Hi <strong><?php echo $_SESSION['username']; ?>!</strong></a>
                <?php endif ?>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio" style="color: #FFB85C !important;"><strong>Administrasi</strong></a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="tabel.php" style="color: #FFB85C !important;"><strong>Informasi</strong></a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <?php  if (isset($_SESSION['username'])) : ?>
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php?logout='1'" style="color: #FFB85C !important;"><strong>Log out</strong></a>
              <?php endif ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div class="container">
  <table class="table table-hover table-bordered results">
         <?php
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $result = mysqli_query($db,"SELECT * FROM penumpang");
          ?>
        <div class="form-group pull-right">
          <input type="text" class="search form-control" placeholder="What you looking for?">
        </div>
        <span class="counter pull-right"></span>
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">No. Telp</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Titik Tujuan ID</th>
            <th scope="col">Titik Jemput ID</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              while($row = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['p_nama'] . "</td>";
                echo "<td>" . $row['p_telp'] . "</td>";
                echo "<td>" . $row['p_gender'] . "</td>";
                echo "<td>" . $row['tj_id'] . "</td>";
                echo "<td>" . $row['tt_id'] . "</td>";
                echo "</tr>";
              }
              // mysqli_close($db);
            ?>
          </tr>
        </tbody>
      </table>
</div>