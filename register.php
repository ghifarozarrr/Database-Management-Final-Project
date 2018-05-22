<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
    <div class="input-group">
      <label>Nama</label>
      <input type="text" name="name">
    </div>
    <div class="input-group">
      <label>No. Telp</label>
      <input type="text" name="telp">
    </div>
    <div class="input-group">
      <label>Jenis Kelamin</label>
      <input type="radio" name="gender" value="L" checked> L<br>
      <input type="radio" name="gender" value="P"> P<br>
    </div>
    <div class="input-group">
      <label>Daerah Rumah</label>
      <input type="text" name="rumah">
    </div>
        <div class="input-group">
      <label>Sekolah</label>
      <input type="text" name="sekolah">
    </div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>