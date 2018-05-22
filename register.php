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
      <label>Alamat Rumah</label>
      <input type="text" name="alamat">
    </div>
    <div class="input-group">
      <label>Daerah Rumah</label>
      <!-- <input type="text" name="rumah"> -->

      <select name="rumah">
      <?php
        $categorylist_sql1="SELECT * FROM titik_jemput";
      // $categorylist_sql1="SELECT * FROM titik_jemput WHERE tj_daerah = (SELECT DISTINCT tj_daerah FROM titik_jemput)";
        $categorylist_query1=mysqli_query($db, $categorylist_sql1);
        $categorylist_rs1=mysqli_fetch_assoc($categorylist_query1);

        do{ ?>
          <option value="<?php echo $categorylist_rs['tj_id']; ?>"
            ><?php echo $categorylist_rs1['tj_daerah']; ?></option>
        <?php
        } while($categorylist_rs1=mysqli_fetch_assoc($categorylist_query1));
        ?></select>

    </div>

    <div class="input-group">
      <label>Sekolah</label>
      <!-- <input type="text" name="sekolah"> -->

      <select name="sekolah">
      <?php
        $categorylist_sql="SELECT * FROM titik_tujuan";
        $categorylist_query=mysqli_query($db, $categorylist_sql);
        $categorylist_rs=mysqli_fetch_assoc($categorylist_query);

        do{ ?>
          <option value="<?php echo $categorylist_rs['tt_id']; ?>"
            ><?php echo $categorylist_rs['tt_deskripsi']; ?></option>
        <?php
        } while($categorylist_rs=mysqli_fetch_assoc($categorylist_query));
        ?></select>


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