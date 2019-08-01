<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style type="text/css">
		.button{
			height: 60px; 
            border-radius:30px;
            color: #000;
            background-color: #fff;
		}
		div button a:hover{
			color: #fff;
		}
	</style>
</head>
<body>
 <?php
  if (!isset($_SESSION["adminusername"])) {
  	?>

        <div class="fluid-container" style="text-align: center;">
    	    <div class="row" style="margin-top: 20%;">
    		    <div class="col-sm-4">
    			    <button class="col-sm-10 btn btn-primary button"><h5>View Account</h5></button>
    		    </div>
    		    <div class="col-sm-4">
    		     	<button class="col-sm-10 btn btn-primary button"><a href="pending.php" style="text-decoration: none;"><h5>Pending Request</h5></a></button>
    		    </div>
    		    <div class="col-sm-4">
    		     	<button class="col-sm-10 btn btn-primary button"><h5>Aprooved Registration</h5></button>
    		    </div>
    	    </div>
        </div>

  	<?php
  }
  else{
  	?>
  	<script type="text/javascript">
  		alert('Admin Login Required!');
  	</script>
  	<?php
  }
  session_destroy();
 ?>
</body>
</html>