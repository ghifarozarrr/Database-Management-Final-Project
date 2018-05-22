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
      <label>Sekolah</label>
      <!-- <input type="text" name="sekolah"> -->

      <select name="sekolah">
      <?php
        $rumah=$_SESSION['rumah'];
        $categorylist_sql="SELECT tt_deskripsi FROM titik_tujuan WHERE tt_daerah='$rumah'";
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
  	  <button type="submit" class="btn" name="reg2_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
  <script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
  <script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script>
  <script type="text/javascript">
   function load(){
       var selected_option_value=$("#rumah option:selected").val(); //get the value of the current selected option.

       $.post("register.php", {option_value: selected_option_value}
       );
  } 
  </script>
</body>
</html>