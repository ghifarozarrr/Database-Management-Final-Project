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

  *{
      text-align:center;
  }
 /* input[type="button"] {
  transition: all .3s;
    border: 1px solid #ddd;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 5px;
  font-size: 15px;

}

input[type="button"]:not(.active) {
  background-color:transparent;
}

.active {
  background-color: #ff4d4d;
  color :#fff;
}

input[type="button"]:hover:not(.active) {
  background-color: #ddd;
}*/

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
     <!--        <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#tagihan">View 1</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#daerah">View 2</a>
            </li> -->
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Informasi</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center" id="tagihan">
      <div class="container">
        <h1 class="text-uppercase mb-0">VIEW</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Siswa yang Belum Membayar</h2>
      </div>
    </header>
    <br>

    <div class="container">
      <table class="table table-hover table-bordered results">
         <?php
          if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $result = mysqli_query($db,"SELECT penumpang.`p_nama`, pembayaran.`b_bulan`, pembayaran.`b_biaya` FROM pembayaran, penumpang WHERE pembayaran.`p_id` = penumpang.`p_id` AND pembayaran.`b_status` = '-' ORDER BY penumpang.`p_nama` ASC");
          ?>
        <div class="form-group pull-right">
          <input type="text" class="search form-control" placeholder="What you looking for?">
        </div>
        <span class="counter pull-right"></span>
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Bulan</th>
            <th scope="col">Tagihan Biaya</th>
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
                echo "<td>" . $row['b_bulan'] . "</td>";
                echo "<td> Rp " . $row['b_biaya'] . "</td>";
                echo "</tr>";
                $i++;
              }
              // mysqli_close($db);
            ?>
          </tr>
        </tbody>
      </table>
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

// // get the table element
// var $table = document.getElementById("myTable"),
// // number of rows per page
// $n = 10,
// // number of rows of the table
// $rowCount = $table.rows.length,
// // get the first cell's tag name (in the first row)
// $firstRow = $table.rows[0].firstElementChild.tagName,
// // boolean var to check if table has a head row
// $hasHead = ($firstRow === "TH"),
// // an array to hold each row
// $tr = [],
// // loop counters, to start count from rows[1] (2nd row) if the first row has a head tag
// $i,$ii,$j = ($hasHead)?1:0,
// // holds the first row if it has a (<TH>) & nothing if (<TD>)
// $th = ($hasHead?$table.rows[(0)].outerHTML:"");
// // count the number of pages
// var $pageCount = Math.ceil($rowCount / $n);
// // if we had one page only, then we have nothing to do ..
// if ($pageCount > 1) {
//   // assign each row outHTML (tag name & innerHTML) to the array
//   for ($i = $j,$ii = 0; $i < $rowCount; $i++, $ii++)
//     $tr[$ii] = $table.rows[$i].outerHTML;
//   // create a div block to hold the buttons
//   $table.insertAdjacentHTML("afterend","<div id='buttons'></div");
//   // the first sort, default page is the first one
//   sort(1);
// }

// // ($p) is the selected page number. it will be generated when a user clicks a button
// function sort($p) {
//   /* create ($rows) a variable to hold the group of rows
//   ** to be displayed on the selected page,
//   ** ($s) the start point .. the first row in each page, Do The Math
//   */
//   var $rows = $th,$s = (($n * $p)-$n);
//   for ($i = $s; $i < ($s+$n) && $i < $tr.length; $i++)
//     $rows += $tr[$i];
  
//   // now the table has a processed group of rows ..
//   $table.innerHTML = $rows;
//   // create the pagination buttons
//   document.getElementById("buttons").innerHTML = pageButtons($pageCount,$p);
//   // CSS Stuff
//   document.getElementById("id"+$p).setAttribute("class","active");
// }


// // ($pCount) : number of pages,($cur) : current page, the selected one ..
// function pageButtons($pCount,$cur) {
//   /* this variables will disable the "Prev" button on 1st page
//      and "next" button on the last one */
//   var $prevDis = ($cur == 1)?"disabled":"",
//     $nextDis = ($cur == $pCount)?"disabled":"",
//     /* this ($buttons) will hold every single button needed
//     ** it will creates each button and sets the onclick attribute
//     ** to the "sort" function with a special ($p) number..
//     */
//     $buttons = "<input type='button' value='&lt;&lt; Prev' onclick='sort("+($cur - 1)+")' "+$prevDis+">";
//   for ($i=1; $i<=$pCount;$i++)
//     $buttons += "<input type='button' id='id"+$i+"'value='"+$i+"' onclick='sort("+$i+")'>";
//   $buttons += "<input type='button' value='Next &gt;&gt;' onclick='sort("+($cur + 1)+")' "+$nextDis+">";
//   return $buttons;
// }

// $(document).ready(function() {
//   $(".search").keyup(function () {
//     var searchTerm = $(".search").val();
//     var listItem = $('.results tbody').children('tr');
//     var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
//   $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
//         return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
//     }
//   });
    
//   $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
//     $(this).attr('visible','false');
//   });

//   $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
//     $(this).attr('visible','true');
//   });

//   var jobCount = $('.results tbody tr[visible="true"]').length;
//     $('.counter').text(jobCount + ' item');

//   if(jobCount == '0') {$('.no-result').show();}
//     else {$('.no-result').hide();}
//       });
// });
</script>