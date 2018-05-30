<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Layanan AJS</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="css/freelancer.min.css" rel="stylesheet">
  <style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Raleway|Varela+Round|Coda);
@import url(http://weloveiconfonts.com/api/?family=entypo);
[class*="entypo-"]:before {
  font-family: 'entypo', sans-serif;
}

body {
  background: #fffcdd;
  padding: 2.23em;
}

.title-pen {
  color: #333;
  font-family: "Coda", sans-serif;
  text-align: center;
}
.title-pen span {
  color: #F65E4A;
}

.user-profile {
  margin: auto;
  width: 50em; 
  height: 20em;
  background: #fff;
  border-radius: .3em;
}

footer > h1 {
  display: block;
  text-align: center;
  clear: both;
  font-family: "Coda", sans-serif;
  color: #343f3d;
  line-height: 6;
  font-size: 1.6em;
}
footer > h1 a {
  text-decoration: none;
  color: #ea4c89;
}
  </style>
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
        <a class="navbar-brand js-scroll-trigger" href="index.php" style="color: #F65E4A !important; font-size: 1.5em;"><strong>BERANDA</strong></a>
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
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#" style="color: #FFB85C !important;"><strong>Profil</strong></a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php" style="color: #FFB85C !important;"><strong>Informasi</strong></a>
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
    <div style="margin-top: 80px;">
      <h1 class="title-pen"> Profil <span>Pengguna</span></h1>
      <?php
        $username=$_SESSION['username'];
        $q1 = "SELECT p_nama, p_gender, p_email, tj_alamat, p_telp, tt_deskripsi, tt_alamat, tt_daerah
               FROM penumpang JOIN titik_jemput USING (tj_id) 
               JOIN titik_tujuan USING (tt_id)
               WHERE p_username='$username'";
        $q2 =mysqli_query($db, $q1);
        $q3=mysqli_fetch_assoc($q2);

        $k1 = "SELECT *
               FROM penumpang JOIN detil_perjalanan USING (p_id) JOIN perjalanan USING (pj_id) JOIN supir USING (s_id) JOIN Kendaraan USING (k_id)
               WHERE p_username='$username'";
        $k2 =mysqli_query($db, $k1);
        $k3=mysqli_fetch_assoc($k2);
      ?>
      <div class="user-profile">
        <div style="float: left; margin: 47px; margin-bottom: 0px; height: 280px;">
          <?php if($q3['p_gender'] == 'L') : ?>
          <img class="avatar" style="border-radius: 50%" src="img/cowo.png" alt="Ash" />
          <?php else : ?>
          <img class="avatar" style="border-radius: 50%" src="img/cewe.png" alt="Ash" />
          <?php endif ?>
        </div>
        <div style="padding: 20px;">
          <div style="font-weight: bold; color: #79bb8c; font-size: 1.93em; font-family: "Coda", sans-serif;"><?php echo $q3['p_nama']; ?></div>
          <div style="color: #ea9b25; font-size: 1em; font-family: "varela round", sans-serif;">
            <span class="entypo-mail"> <?php echo $q3['p_email']; ?></span>
          </div>
          <div style="color: #ea9b25; font-size: 1em;font-family: "varela round", sans-serif;">
            <span class="entypo-home"> <?php echo $q3['tj_alamat']; ?></span>
          </div>
          <div style="color: #ea9b25; font-size: 1em; font-family: "varela round", sans-serif;">
            <span class="entypo-phone"> <?php echo $q3['p_telp']; ?></span>
          </div>
          <br>
          <div style="font-weight: bold; color: #79bb8c; font-size: 1.93em; font-family: "Coda", sans-serif;">Rincian :</div>
          <div style="color: #ea9b25; font-size: 1em; font-family: "varela round", sans-serif;">
            <span class="entypo-graduation-cap"> <?php echo $q3['tt_deskripsi']; ?></span>
          </div>
          <div style="color: #ea9b25; font-size: 1em; font-family: "varela round", sans-serif;">
            <span class="entypo-address"> <?php echo $q3['tt_alamat'] . ", " . $q3['tt_daerah']; ?></span>
          </div>
          <div style="color: #ea9b25; font-size: 1em; font-family: "varela round", sans-serif;">
            <span class="entypo-user"> <?php echo $k3['s_nama']; ?></span>
          </div>
          <div style="color: #ea9b25; font-size: 1em; font-family: "varela round", sans-serif;">
            <span class="entypo-key"> <?php echo $k3['k_nama'] . " " . $k3['k_warna'] . " " . $k3['k_pelat']; ?></span>
          </div>
        </div>
      </div>
      <div align="center">
        <div align="center" style="background-color: #e64398; height: 60px; width: 800px; border-radius: 0 0 15px 15px; color: white; font-size: 25px; padding-top: 10px;">
          <span style="font-family: "varela round", sans-serif; color: #e3eeee; white-space: nowrap; font-size: 1.27em; font-weight: bold;" class="entypo-eye"> Tagihan</span>
        </div>
      </div>
    </div>
</body>
</html>