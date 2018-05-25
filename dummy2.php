<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<style type="text/css">
		/* CSS design by @jofpin */
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

.user-profile  .username {
  margin: auto;
  margin-top: -4.40em;
  margin-left: 5.80em;
  color: #658585;
  font-size: 1.53em;
  font-family: "Coda", sans-serif;
  font-weight: bold;
}
.user-profile  .bio {
  margin: auto;
  display: inline-block;
  margin-left: 10.43em;
  color: #e76043; 
  font-size: .87em;
  font-family: "varela round", sans-serif;
}
.user-profile > .description {
  margin: auto;
  margin-top: 1.35em;
  margin-right: 4.43em;
  width: 14em;
  color: #c0c5c5; 
  font-size: .87em;
  font-family: "varela round", sans-serif;
}
.user-profile > img.avatar {
	padding: .7em;
  margin-left: .8em;
  margin-top: .8em;
  height: 9.23em;
  width: 9.23em;
  border-radius: 18em;
}

.user-profile ul.data {
	margin: 10em auto;
	height: 3.70em;
  background: #e64398;
  text-align: center;
  border-radius: 0 0 .3em .3em;
}
.user-profile li {
	margin: 0 auto;
  padding: 1.30em; 
  width: 33.33334%;
  display: table-cell;
  text-align: center;
}

.user-profile span {
	font-family: "varela round", sans-serif;
	color: #e3eeee;
  white-space: nowrap;
  font-size: 1.27em;
  font-weight: bold;
}
.user-profile span:hover {
  color: #daebea;
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
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="profile.php" style="color: #FFB85C !important;"><strong>Profil</strong></a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio" style="color: #FFB85C !important;"><strong>Informasi</strong></a>
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
<div class="user-profile">
  <img class="avatar" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTF_erFD1SeUnxEpvFjzBCCDxLvf-wlh9ZuPMqi02qGnyyBtPWdE-3KoH3s" alt="Ash" />
    <div class="username" style="padding-top: 10px;">Will Smith</div>
  <div class="bio">
    Senior UI Designer
  </div>
    <div class="description">
      I use to design websites and applications
      for the web.
  </div>
  <ul class="data" style="display: flex; justify-content: center;">
    <li>
      <span class="entypo-eye"> Tagihan</span>
    </li>
 </ul>
</div>
  </div>
</body>
</html>