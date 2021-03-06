<?php include('server.php') ?>

<style type="text/css">

*{
	text-align:center;
}

.results tr[visible='false'],
.no-result{
  display:none;
}

.results tr[visible='true']{
  display:table-row;
}

.counter{
  padding:8px; 
  color:#ccc;
}


  hr.star-light:after {
    color: #fff;
    background-color: #e64398!important;

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
   <!--  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

  </head>

  <body id="page-top">

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
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="profile.php" style="color: #FFB85C !important;"><strong>Profil</strong></a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php" style="color: #FFB85C !important;"><strong>Informasi</strong></a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <?php  if (isset($_SESSION['username'])) : ?>
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php?logout='1'" style="color: #FFB85C !important;"><strong>Keluar</strong></a>
              <?php endif ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead text-white text-center" style="padding-top: 120px; padding-bottom: 200px;background-color: #e64398; max-height: 100vh;">
      <div class="container">
        <h1 class="text-uppercase mb-0" style="font-size: 50px;">Daerah Antar Jemput</h1><br>
        <div class="w3-row" style="font-size: 1.5em;">
          <a href="javascript:void(0)" onclick="openCity(event, 'London');">
             <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"  style="display: inline-block;padding: 0.5em;"><img src="https://image.flaticon.com/icons/svg/170/170427.svg" style="width: 150px"><p style="color: #fff;">Tabel Titik Tujuan</p></div>
          </a>
          <a href="javascript:void(0)" onclick="openCity(event, 'Paris');">
             <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"  style="display: inline-block;padding: 0.5em;"><img src="https://image.flaticon.com/icons/png/512/439/439902.png" style="width: 150px"><p style="color: #fff;">Tabel Titik Jemput</p></div>
          </a>
          <a href="javascript:void(0)" onclick="openCity(event, 'Mama');">
             <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"  style="display: inline-block;padding: 0.5em;"><img src="https://i.pinimg.com/originals/da/8f/2b/da8f2b7931a062f98daa85cec24d3e36.png" style="width: 150px"><p style="color: #fff;">Daerah Terbanyak</p></div>
          </a>
          <a href="javascript:void(0)" onclick="openCity(event, 'Papa');">
             <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"  style="display: inline-block;padding: 0.5em;"><img src="https://image.flaticon.com/icons/svg/262/262825.svg" style="width: 150px"><p style="color: #fff;">Jumlah Sekolah</p></div>
          </a>
            <a href="javascript:void(0)" onclick="openCity(event, 'Lala');">
             <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"  style="display: inline-block;padding: 0.5em;"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Circle-icons-denied.svg/2000px-Circle-icons-denied.svg.png" style="width: 150px"><p style="color: #fff;">0 Penumpang</p></div>
          </a>
        </div>
      </div>
    </header>

    <div class="w3-container">

  <div id="London" class="w3-container city" style="display:none">
    <div class="container">
        <br>
        <div class="row mb-4">
          <div class="col text-center">
            <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#insert">Insert</a>
          </div>
        </div>

        <div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Insert Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body">
              <form method="POST" action="titikantarjemput.php">
                <div class="form-group">
                  <div class="col-xs-3">
                      <input class="form-control" id="ex2" type="text" name="sklh" placeholder="Nama Sekolah">
                  </div><br>
                  <div class="col-xs-3">
                      <input class="form-control" id="ex2" type="text" name="almt" placeholder="Alamat Sekolah">
                  </div><br>
                  <div class="col-xs-3">
                      <input class="form-control" id="ex2" type="text" name="drh" placeholder="Daerah Sekolah" disabled="disabled">
                      <select style="width: 100%;" name="rumah"">
                            <option selected hidden><?php echo $rumah; ?></option>
                            <?php
                              $categorylist_sql1="SELECT DISTINCT tt_daerah FROM titik_tujuan";
                              $categorylist_query1=mysqli_query($db, $categorylist_sql1);
                              $categorylist_rs1=mysqli_fetch_assoc($categorylist_query1);
                              do{ 
                            ?>
                                <option>
                                    <?php
                                    echo $categorylist_rs1['tt_daerah'];
                                    ?>
                                  </option>
                                  <?php
                              } while($categorylist_rs1=mysqli_fetch_assoc($categorylist_query1));
                                ?>
                            </select>
                  </div><br>
                </div>
                <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="insert_gisa">Insert</button>
            </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>

      <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Update Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <div class="col-xs-3">
                      <input class="form-control" id="ex2" type="text" placeholder="Nama Sekolah">
                  </div><br>
                  <div class="col-xs-3">
                      <input class="form-control" id="ex2" type="text" placeholder="Alamat Sekolah">
                  </div><br>
                  <div class="col-xs-3">
                      <input class="form-control" id="ex2" type="text" placeholder="Daerah Sekolah" disabled="disabled">
                      <select style="width: 100%;" name="rumah"">
                            <option selected hidden><?php echo $rumah; ?></option>
                            <?php
                              $categorylist_sql1="SELECT DISTINCT tt_daerah FROM titik_tujuan";
                              $categorylist_query1=mysqli_query($db, $categorylist_sql1);
                              $categorylist_rs1=mysqli_fetch_assoc($categorylist_query1);
                              do{ 
                            ?>
                                <option>
                                    <?php
                                    echo $categorylist_rs1['tt_daerah'];
                                    ?>
                                  </option>
                                  <?php
                              } while($categorylist_rs1=mysqli_fetch_assoc($categorylist_query1));
                                ?>
                            </select>
                  </div><br>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
      </div>

      <table class="table table-hover table-bordered results">
         <?php
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $result = mysqli_query($db,"SELECT * FROM titik_tujuan");
          ?>
        <!-- <div class="form-group pull-right">
          <input type="text" class="search form-control" placeholder="What you looking for?">
        </div> -->
        <span class="counter pull-right"></span>
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">ID Titik Tujuan</th>
            <th scope="col">Sekolah</th>
            <th scope="col">Alamat</th>
            <th scope="col">Daerah</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $i=1;
              while($row = mysqli_fetch_array($result))
              {
                $idd=$row['tt_id'];
                
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $row['tt_id'] . "</td>";
                echo "<td>" . $row['tt_deskripsi'] . "</td>";
                echo "<td>" . $row['tt_alamat'] . "</td>";
                echo "<td>" . $row['tt_daerah'] . "</td>";
                echo"<td><a href='updatett.php?idgisa=". $idd ."'><button class='btn btn-success' data-toggle='modal' data-id='$idd'>Update</button></a></td>";
                echo"<td><a href='server.php?idgisadelete=". $idd ."'><button class='btn btn-danger' data-id='$idd'>Delete</button></a></td>";
                echo "</tr>";
                $i++;
              }
              // mysqli_close($db);
            ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

  <div id="Paris" class="w3-container city" style="display:none">
    <div class="container">
      <br>
        <div class="row mb-4">
          <div class="col text-center">
            <form method="POST" action="titikantarjemput.php">
              <input type="submit" class="btn btn-lg btn-success" name="index_gisa" value="Buat Index"></a>
            </form>
          </div>
          <div class="col text-center">
            <form method="POST" action="titikantarjemput.php">
              <input type="submit" class="btn btn-lg btn-success" name="drop_index_gisa" value="Drop Index"></a>
            </form>
          </div>
        </div>
      <table class="table table-hover table-bordered results">
         <?php
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $flags=$_SESSION['flag_idx_1'];
          if(!$flags){
            $result = mysqli_query($db,"SELECT * FROM titik_jemput");
          }
          else{
           $result = mysqli_query($db,"SELECT * FROM titik_jemput USE INDEX (index1)"); 
          }
          ?>
<!--         <div class="form-group pull-right">
          <input type="text" class="search form-control" placeholder="What you looking for?">
        </div> -->
        <span class="counter pull-right"></span>
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID Titik Jemput</th>
            <th scope="col">Alamat Titik Jemput</th>
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
  </div>
</div>

<div id="Mama" class="w3-container city" style="display:none">
    <div class="container">
      <br>
      <table class="table table-hover table-bordered results">
        <?php
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $result = mysqli_query($db,"SELECT * FROM ttsering");
        ?>
<!--         <div class="form-group pull-right">
          <input type="text" class="search form-control" placeholder="What you looking for?">
        </div> -->
        <span class="counter pull-right"></span>
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Daerah</th>
            <th scope="col">Jumlah Penumpang</th>
            <!-- <th scope="col">Tagihan Biaya</th> -->
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $i=1;
              while($row = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $row['tt_daerah'] . "</td>";
                echo "<td>" . $row['jumlah'] . "</td>";
                // echo "<td> Rp " . $row['b_biaya'] . "</td>";
                echo "</tr>";
              $i++;
              }
              
              // mysqli_close($db);
            ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div id="Lala" class="w3-container city" style="display:none">
    <div class="container">
      <br>
        <div class="row mb-4">
          <div class="col text-center">
            <form method="POST" action="titikantarjemput.php">
              <input type="submit" class="btn btn-lg btn-success" name="procedure_nuzha" value="Hapus Titik Tujuan"></a>
            </form>
          </div>
        </div>
      <table class="table table-hover table-bordered results">
        <?php
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $result = mysqli_query($db,"SELECT p_nama, tt_id, tt_deskripsi, tt_daerah
            FROM penumpang RIGHT JOIN titik_tujuan USING (tt_id)
            ORDER BY p_nama");
        ?>
        <span class="counter pull-right"></span>
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">ID Titik Tujuan</th>
            <th scope="col">Nama Sekolah</th>
            <th scope="col">Nama Daerah</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
              $i = 1;
              while($row = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $row['p_nama'] . "</td>";
                echo "<td>" . $row['tt_id'] . "</td>";
                echo "<td>" . $row['tt_deskripsi'] . "</td>";
                echo "<td>" . $row['tt_daerah'] . "</td>";
                echo "</tr>";
                $i++;
              }
              // mysqli_close($db);
            ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

 <div id="Papa" class="w3-container city" style="display:none">
    <div class="container">
      <br>
      <table class="table table-hover table-bordered results">
        <?php
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $result = mysqli_query($db,"SELECT DISTINCT tt_daerah, hitung_sekolah(tt_daerah) AS jml
                                      FROM titik_tujuan;");
        ?>
<!--         <div class="form-group pull-right">
          <input type="text" class="search form-control" placeholder="What you looking for?">
        </div> -->
        <span class="counter pull-right"></span>
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Daerah</th>
            <th scope="col">Jumlah Sekolah</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $i=1;
              while($row = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $row['tt_daerah'] . "</td>";
                echo "<td>" . $row['jml'] . "</td>";
                echo "</tr>";
                $i++;
              }
              
              // mysqli_close($db);
            ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Lokasi</h4>
            <p class="lead mb-0">Arief Rahman Hakim 48B
              <br>Surabaya, 60111</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Hubungi Kami</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Tentang Kami</h4>
            <p class="lead mb-0">Layanan jasa antar jemput sekolah-sekolah di daerah Surabaya.</p>
          </div>
        </div>
      </div>
    </footer>


    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Nufaroza 2018</small>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>

<script type="text/javascript">
  $(document).ready(function() {
  $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
      });
});

  function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
</script>