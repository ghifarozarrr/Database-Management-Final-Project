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
      <input type="text" name="name" value="<?php echo $name; ?>">
    </div>
    <div class="input-group">
      <label>No. Telp</label>
      <input type="text" name="telp" value="<?php echo $telp; ?>">
    </div>
    <div class="input-group">
      <label>
        Jenis Kelamin
      </label>
      <?php if ($gender == 'P') : ?>
        <input type="radio" name="gender" value="L"><br>
        <input type="radio" name="gender" value="P" checked="">P<br>
      <?php else : ?>
        <input type="radio" name="gender" value="L" checked>L<br>
        <input type="radio" name="gender" value="P">P<br>
      <?php endif ?>
    </div>
    <div class="input-group">
      <label>
        Alamat Rumah
      </label>
      <input type="text" name="alamat" value="<?php echo $alamat; ?>">
    </div>
    <div class="input-group">
      <label>
        Daerah Rumah
      </label>
      <select name="rumah"">
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
    </div>
    <div class="input-group">
      <label>
        Username
      </label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>
        Email
      </label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>
        Password
      </label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>
        Confirm password
      </label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">
        Next
      </button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</body>
</html>


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
  
  <form method="post" action="reg2.php">
    <?php include('errors.php'); ?>

    <div class="input-group">
      <label>Sekolah</label>
      <!-- <input type="text" name="sekolah"> -->

      <select name="sekolah">
      <?php
        $rumah=$_SESSION['rumah'];
        $categorylist_sql="SELECT tt_deskripsi FROM titik_tujuan WHERE tt_daerah='$rumah'";
        $categorylist_query=mysqli_query($db, $categorylist_sql);
        $categorylist_rs=mysqli_fetch_assoc($categorylist_query);

        do{ ?>
          <option>
            <?php 
              echo $categorylist_rs['tt_deskripsi']; 
            ?>
          </option>
        <?php
        } while($categorylist_rs=mysqli_fetch_assoc($categorylist_query));
        ?></select>


    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg2_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</body>
</html>