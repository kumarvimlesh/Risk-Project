<?php
session_start();

//admin login authentication begin
if (isset($_POST['adminlogin'])) {
  if($_POST['adminusername']=='admin' && $_POST['adminpassword']=='armed-ssfr')
  {
    $_SESSION["adminusername"] = $_POST['adminusername'];
    header("Location:admin.php");
  }
  else {
      ?>
      <script type="text/javascript">
        alert("Invalid UserName or Password");
      </script>
      <?php
      header("Location:index.php");
  }
 }
//admin login aunthentication end
?>
