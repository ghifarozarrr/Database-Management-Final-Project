<?php include('server.php') ?>
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

<style type="text/css">
	body {
  background: #232222;
  font-family: 'Raleway', Arial, Helvetica, sans-serif;
  text-align: center;
  color: #fefefe;
  overflow-y: scroll;
}

*{
	text-align: center;
}

a {
  text-decoration: none;
}

a.link {
  color: #4477CC;
  -webkit-transition: all 150ms ease 0s;
  transition: all 150ms ease 0s;
}

a.link:hover {
  color: #e08f24;
}

p {
  margin-bottom: 10px;
}

.tabs {
  position: relative;
  margin: 30px auto;
  width: 1200px;
  max-width: 100%;
  overflow: hidden;
  padding-top: 100px;
  margin-bottom: 60px;
}

.tabs input {
  position: absolute;
  z-index: 1000;
  width: 25%;
  height: 50px;
  left: 0;
  top: 0;
  opacity: 0;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: alpha(opacity=0);
  cursor: pointer;
  margin: 0;
}

.tabs input#tab-2 {
  left: 25%;
}

.tabs input#tab-3 {
  left: 50%;
}

.tabs input#tab-4 {
  left: 75%;
}

.tabs label {
  background: #4477CC;
  color: #fefefe;
  font-size: 13px;
  line-height: 50px;
  height: 60px;
  position: relative;
  top: 0;
  padding: 0 10px;
  float: left;
  display: block;
  width: 12.5%;
  letter-spacing: 1px;
  font-weight: bold;
  text-align: center;
  box-shadow: 2px 0 2px rgba(0, 0, 0, 0.1), -2px 0 2px rgba(0, 0, 0, 0.1);
  box-sizing: border-box;
  -webkit-transition: all 150ms ease 0s;
  transition: all 150ms ease 0s;
}

.tabs label:hover {
  cursor: pointer;
}

.tabs label:after {
  content: '';
  background: #fefefe;
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 100%;
  height: 2px;
  display: block;
}

.tabs input:hover + label {
  background: #FF6600;
  /*e08f24*/
}

.tabs label:first-of-type {
  z-index: 4;
}

.tab-label-2 {
  z-index: 4;
}

.tab-label-3 {
  z-index: 3;
}

.tab-label-4 {
  z-index: 2;
}

.tabs input:checked + label {
  background: #fefefe;
  color: #1a1a1a;
  z-index: 6;
}

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

.content div h2 {
  margin-top: 0;
}

.tabs .tab-selector-1:checked ~ .content .content-1,
.tabs .tab-selector-2:checked ~ .content .content-2,
.tabs .tab-selector-3:checked ~ .content .content-3,
.tabs .tab-selector-4:checked ~ .content .content-4,
.tabs .tab-selector-5:checked ~ .content .content-5,
.tabs .tab-selector-6:checked ~ .content .content-6,
.tabs .tab-selector-7:checked ~ .content .content-7,
.tabs .tab-selector-8:checked ~ .content .content-8  {
  z-index: 100;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: alpha(opacity=100);
  opacity: 1;
  width: 100%;
  height: auto;
  width: 100%;
  height: auto;
  padding: 8%;
}

.content div h2 {
  color: #4477CC;
}

.content div p {
  font-size: 14px;
  line-height: 22px;
  text-align: left;
  margin: 0;
  color: #777;
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
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">BERANDA</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Administrasi</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="tabel.php">Informasi</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <?php  if (isset($_SESSION['username'])) : ?>
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php?logout='1'">logout</a>
              <?php endif ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="tabs">
  <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
  <label for="tab-1" class="tab-label-1">Penumpang</label>
  <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
  <label for="tab-2" class="tab-label-2">Supir</label>
  <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
  <label for="tab-3" class="tab-label-3">Titik Jemput</label>
  <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
  <label for="tab-4" class="tab-label-4">Titik Tujuan</label>
  <input id="tab-5" type="radio" name="radio-set" class="tab-selector-5" />
  <label for="tab-5" class="tab-label-5">Kendaraan</label>
  <input id="tab-6" type="radio" name="radio-set" class="tab-selector-6" />
  <label for="tab-6" class="tab-label-6">Pembayaran</label>
  <input id="tab-7" type="radio" name="radio-set" class="tab-selector-7" />
  <label for="tab-7" class="tab-label-7">Perjalanan</label>
  <input id="tab-8" type="radio" name="radio-set" class="tab-selector-8" />
  <label for="tab-8" class="tab-label-8">Detail Perjalanan</label>
  <div class="content">
    <div class="content-1">
      <h2>Tabel Penumpang</h2>
      
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

    <div class="content-2">
      <h2>Tabel Supir</h2>
      <table class="table table-hover table-bordered results">
         <?php
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $result = mysqli_query($db,"SELECT * FROM supir");
          ?>
        <div class="form-group pull-right">
          <input type="text" class="search form-control" placeholder="What you looking for?">
        </div>
        <span class="counter pull-right"></span>
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Supir</th>
            <th scope="col">No. Telp</th>
           <!--  <th scope="col">E-mail</th> -->
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Lahir</th>
             <th scope="col">Jenis Kelamin</th>
            <th scope="col">Kendaraan</th>
            <th scope="col">Pendapatan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              while($row = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>" . $row['s_id'] . "</td>";
                echo "<td>" . $row['s_nama'] . "</td>";
                echo "<td>" . $row['s_telp'] . "</td>";
                // echo "<td>" . $row['s_email'] . "</td>";
                echo "<td>" . $row['s_alamat'] . "</td>";
                echo "<td>" . $row['s_tgllahir'] . "</td>";
                echo "<td>" . $row['s_gender'] . "</td>";
                echo "<td>" . $row['k_id'] . "</td>";
                echo "<td>" . $row['s_pendapatan'] . "</td>";
                echo "</tr>";
              }
              // mysqli_close($db);
            ?>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="content-3">
      <h2>Tabel Titik Jemput</h2>
         <table class="table table-hover table-bordered results">
         <?php
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $result = mysqli_query($db,"SELECT * FROM titik_jemput");
          ?>
        <div class="form-group pull-right">
          <input type="text" class="search form-control" placeholder="What you looking for?">
        </div>
        <span class="counter pull-right"></span>
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Alamat</th>
            <th scope="col">Daerah</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              while($row = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>" . $row['tj_id'] . "</td>";
                echo "<td>" . $row['tj_alamat'] . "</td>";
                echo "<td>" . $row['tj_daerah'] . "</td>";
                echo "</tr>";
              }
              // mysqli_close($db);
            ?>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="content-4">
      <h2>Tabel Titik Tujuan</h2>
		<table class="table table-hover table-bordered results">
         <?php
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $result = mysqli_query($db,"SELECT * FROM titik_tujuan");
          ?>
        <div class="form-group pull-right">
          <input type="text" class="search form-control" placeholder="What you looking for?">
        </div>
        <span class="counter pull-right"></span>
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Sekolah</th>
            <th scope="col">Alamat</th>
            <th scope="col">Daerah</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              while($row = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>" . $row['tt_id'] . "</td>";
                echo "<td>" . $row['tt_deskripsi'] . "</td>";
                echo "<td>" . $row['tt_alamat'] . "</td>";
                echo "<td>" . $row['tt_daerah'] . "</td>";
                echo "</tr>";
              }
              // mysqli_close($db);
            ?>
          </tr>
        </tbody>
      </table>
    </div>

  <div class="content-5">
      <h2>Tabel Kendaraan</h2>
        <table class="table table-hover table-bordered results">
         <?php
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $result = mysqli_query($db,"SELECT * FROM kendaraan");
          ?>
        <div class="form-group pull-right">
          <input type="text" class="search form-control" placeholder="What you looking for?">
        </div>
        <span class="counter pull-right"></span>
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Merk</th>
            <th scope="col">Warna</th>
			<th scope="col">Kapasitas</th>
            <th scope="col">Pelat</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              while($row = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>" . $row['k_id'] . "</td>";
                echo "<td>" . $row['k_merk'] . "</td>";
                echo "<td>" . $row['k_warna'] . "</td>";
                echo "<td>" . $row['k_kapasitas'] . "</td>";
                echo "<td>" . $row['k_pelat'] . "</td>";
                echo "</tr>";
              }
              // mysqli_close($db);
            ?>
          </tr>
        </tbody>
      </table>
  </div>

  <div class="content-6">
      <h2>Tabel Pembayaran</h2>
      <table class="table table-hover table-bordered results">
         <?php
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $result = mysqli_query($db,"SELECT * FROM pembayaran");
          ?>
        <div class="form-group pull-right">
          <input type="text" class="search form-control" placeholder="What you looking for?">
        </div>
        <span class="counter pull-right"></span>
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">ID Siswa</th>
            <th scope="col">Status</th>
            <th scope="col">Bulan</th>
			<th scope="col">Biaya</th>
            <th scope="col">Tanggal Bayar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              while($row = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>" . $row['b_id'] . "</td>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['b_status'] . "</td>";
                echo "<td>" . $row['b_bulan'] . "</td>";
                echo "<td>Rp " . $row['b_biaya'] . "</td>";
                echo "<td>" . $row['b_tglbayar'] . "</td>";
                echo "</tr>";
              }
              // mysqli_close($db);
            ?>
          </tr>
        </tbody>
      </table>
  </div>
  <div class="content-7">
      <h2>Tabel Perjalanan</h2>
      <table class="table table-hover table-bordered results">
         <?php
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $result = mysqli_query($db,"SELECT * FROM perjalanan");
          ?>
        <div class="form-group pull-right">
          <input type="text" class="search form-control" placeholder="What you looking for?">
        </div>
        <span class="counter pull-right"></span>
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">ID Siswa</th>
   			<th scope="col">Tanggal Perjalanan</th>
            <th scope="col">Biaya Bensin</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              while($row = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>" . $row['pj_id'] . "</td>";
                echo "<td>" . $row['s_id'] . "</td>";
                echo "<td>" . $row['pj_tanggal'] . "</td>";
                echo "<td>Rp " . $row['pj_bensin'] . "</td>";
                echo "</tr>";
              }
              // mysqli_close($db);
            ?>
          </tr>
        </tbody>
      </table>
  </div>
  <div class="content-8">
      <h2>Tabel Detail Perjalanan</h2>
      <table class="table table-hover table-bordered results">
         <?php
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $result = mysqli_query($db,"SELECT * FROM detil_perjalanan");
          ?>
        <div class="form-group pull-right">
          <input type="text" class="search form-control" placeholder="What you looking for?">
        </div>
        <span class="counter pull-right"></span>
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID Siswa</th>
            <th scope="col">ID Perjalanan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              while($row = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>" . $row['p_id'] . "</td>";
                echo "<td>" . $row['pj_id'] . "</td>";
                echo "</tr>";
              }
              // mysqli_close($db);
            ?>
          </tr>
        </tbody>
      </table>
  </div>
  </div>
</section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>
</body>
</html>