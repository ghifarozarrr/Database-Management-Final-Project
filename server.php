<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'fp mbd');

// REGISTER USER
if (isset($_POST['reg_user'])) {

  // receive all input values from the form
  // $name = mysqli_real_escape_string($db, $_POST['name']);
  // $telp = mysqli_real_escape_string($db, $_POST['telp']);
  // $gender = mysqli_real_escape_string($db, $_POST['gender']);
  // $alamat = mysqli_real_escape_string($db, $_POST['alamat']);
  $rumah = mysqli_real_escape_string($db, $_POST['rumah']);
//  $sekolah = mysqli_real_escape_string($db, $_POST['sekolah']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  // if (empty($name)) { array_push($errors, "Nama is required"); }
  // if (empty($telp)) { array_push($errors, "Telp is required"); }
  // if (empty($gender)) { array_push($errors, "Gender is required"); }
  // if (empty($alamat)) { array_push($errors, "Alamat is required"); }
  if (empty($rumah)) { array_push($errors, "Rumah is required"); }
  //if (empty($sekolah)) { array_push($errors, "Password is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // // a user does not already exist with the same username and/or email
  // $user_check_query = "SELECT * FROM penumpang WHERE p_username='$username' OR p_email='$email' LIMIT 1";
  // $result = mysqli_query($db, $user_check_query);
  // $user = mysqli_fetch_assoc($result);
  
  // if ($user) { // if user exists
  //   if ($user['username'] === $username) {
  //     array_push($errors, "Username already exists");
  //   }

  //   if ($user['email'] === $email) {
  //     array_push($errors, "Email already exists");
  //   }
  // }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
    
  	// $query = "INSERT INTO penumpang (p_nama, p_telp, p_gender, p_username, p_email, p_password) 
  	// 		  VALUES('$name','$telp','$gender','$username', '$email', '$password')";
    // $query1 = "INSERT INTO titik_jemput (alamat, rumah) 
    //       VALUES('$tj_alamat','$tj_daerah')";
  //	mysqli_query($db, $query);
//    mysqli_query($db, $query1);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    $_SESSION['rumah'] = $rumah;

  	header('location: reg2.php');
  }
}

// LOGIN USER
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