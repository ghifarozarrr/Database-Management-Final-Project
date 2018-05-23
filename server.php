<?php
  session_start();
  $username = "";
  $email    = "";
  $errors = array(); 
  $db = mysqli_connect('localhost', 'root', '', 'fp mbd');
  if (isset($_POST['reg_user'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $telp = mysqli_real_escape_string($db, $_POST['telp']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $alamat = mysqli_real_escape_string($db, $_POST['alamat']);
    $rumah = mysqli_real_escape_string($db, $_POST['rumah']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    if (empty($name)) { array_push($errors, "Nama is required"); }
    if (empty($telp)) { array_push($errors, "Telp is required"); }
    if (empty($gender)) { array_push($errors, "Gender is required"); }
    if (empty($alamat)) { array_push($errors, "Alamat is required"); }
    if (empty($rumah)) { array_push($errors, "Rumah is required"); }
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
  	array_push($errors, "The two passwords do not match");
    }
    $user_check_query = "SELECT * FROM penumpang WHERE p_username='$username' OR p_email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) {
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }
      if ($user['email'] === $email) {
        array_push($errors, "Email already exists");
      }
    }
    if (count($errors) == 0) {
    	$_SESSION['username'] = $username;
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      $_SESSION['gender'] = $gender;
      $_SESSION['telp'] = $telp;
      $_SESSION['alamat'] = $alamat;
      $_SESSION['name'] = $name;
      $_SESSION['rumah'] = $rumah;
      $_SESSION['success'] = "You are now logged in";
      header('location: reg2.php');
    }
  }
  if (isset($_POST['reg2_user'])) {
    $sekolah = mysqli_real_escape_string($db, $_POST['sekolah']);
    if (empty($sekolah)) { array_push($errors, "Password is required"); }
    if (count($errors) == 0) {
      $username = $_SESSION['username'];
      $email = $_SESSION['email'];
      $password_1 = $_SESSION['password'];
      $name = $_SESSION['name'];
      $telp = $_SESSION['telp'];
      $gender = $_SESSION['gender'];
      $alamat = $_SESSION['alamat'];
      $rumah = $_SESSION['rumah'];
      $password = md5($password_1);
      $query1 = "INSERT INTO titik_jemput (tj_alamat, tj_daerah) VALUES('$alamat','$rumah')";
      mysqli_query($db, $query1);
      $daerah_id = "SELECT tj_id FROM titik_jemput WHERE tj_alamat='$alamat' AND tj_daerah='$rumah' LIMIT 1";
      $result = mysqli_query($db, $daerah_id);
      $hasil = mysqli_fetch_assoc($result);
      $tj_id2 = $hasil['tj_id'];
      $daerah2_id = "SELECT tt_id FROM titik_tujuan WHERE tt_deskripsi='$sekolah' AND tt_daerah='$rumah' LIMIT 1";
      $result2 = mysqli_query($db, $daerah2_id);
      $hasil2 = mysqli_fetch_assoc($result2);
      $tt_id2 = $hasil2['tt_id'];
      $query = "INSERT INTO penumpang (tt_id, tj_id, p_nama, p_telp, p_gender, p_username, p_email, p_password) VALUES('$tt_id2', '$tj_id2', '$name','$telp','$gender','$username', '$email', '$password')";
      mysqli_query($db, $query);
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }
  }
  if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM penumpang WHERE p_username='$username' AND p_password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: reg2.php');
      }else {
        array_push($errors, "Wrong username/password combination");
      }
    }
  }
?>