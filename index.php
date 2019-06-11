<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
 
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="styles.css">

    <style type="text/css">
    	
    </style>
</head>
<body>

<!--login begin-->
<div id="loginModal" class="modal fade" style="padding: 0px 0px 0px 0px;margin-top: 0px;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" style="text-align: center; font-size: 20pt; text-align: center;">Log In to Your Account</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="index.php" method="POST">
                        <div class="offset-2">
                        	<p class="text-danger">Login and Registration is allowed to specific Officer's only.</p>
                            <div class="form-group row col-sm-10">
                                <label style="font-size: 10pt;" class="sr-only" for="email">User Name</label>
                                <input style="font-size: 10pt;" type="text" class="form-control form-control-sm mr-1" id="username" name="username" placeholder="Enter User Name">
                            </div>
                            <div class="form-group row col-sm-10">
                                <label style="font-size: 10pt;" class="sr-only" for="email">Password</label>
                                <input style="font-size: 10pt;" type="password" class="form-control form-control-sm mr-1" id="password" name="password" placeholder="Enter Password">
                            </div>
                            <p class="text-warning">use username-armed and password-ssfr for login</p>
                            <div class="form-group row col-sm-10">
                            <button type="button" style="font-size: 10pt;" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button style="font-size: 10pt;" type="submit" name="login" class="btn btn-primary btn-sm ml-1">Log In</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
  </div>
<!--login end-->

<!--login authentication-->
<?php
 if (isset($_POST['login'])) {
 	if($_POST['username']=='armed' && $_POST['password']=='ssfr')
 	{
 		$_SESSION["username"] = $_POST['username'];
 		$_SESSION['logintime']=time();
 		header("Location:dashboard.php");
 	}
 	else {
 	    ?>
 	    <script type="text/javascript">
 	    	alert("Invalid UserName or Password");
 	    </script>
 	    <?php
 	}
 }
?>

<!--registration begin-->
<div id="registrationModal" class="modal fade" style="padding: 0px 0px 0px 0px;margin-top: 0px;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" style="text-align: center; font-size: 20pt; text-align: center;">Register a New Account</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="offset-1">
                        	<p class="text-danger">Login and Registration is allowed to specific Officer's only .</p>
                            <div class="form-group row col-sm-12">
                               <label for="name" class="col-sm-3" style="font-size: 12pt;">Full Name</label>
                               <input type="text" style="font-size: 10pt;" id="name" name="name" placeholder="Full Name" class="form-control col-sm-9" autofocus>
                            </div>
                            <div class="form-group row col-sm-12">
                               <label for="username" class="col-sm-3" style="font-size: 12pt;">User Name</label>
                               <input type="text" style="font-size: 10pt;" id="username" name="username" placeholder="Create User Name" class="form-control col-sm-9" autofocus>
                            </div>
                            <div class="form-group row col-sm-12">
                               <label for="idnumber" class="col-sm-3" style="font-size: 12pt;">Id Number</label>
                               <input type="numeric" style="font-size: 10pt;" id="idnumber" name="idnumber" placeholder="Id Number" class="form-control col-sm-9" autofocus>
                            </div>
                            <div class="form-group row col-sm-12">
                               <label for="dob" class="col-sm-3" style="font-size: 12pt;">Date of Birth</label>
                               <input type="date" style="font-size: 10pt;" id="dob" name="dob" placeholder="Date of Birth" class="form-control col-sm-9" autofocus>
                            </div>
                            <div class="form-group row col-sm-12">
                               <label for="fathersname" class="col-sm-3" style="font-size: 12pt;">Father's Name</label>
                               <input type="text" style="font-size: 10pt;" id="fathersname" name="fathersname" placeholder="Father's Name" class="form-control col-sm-9" autofocus>
                            </div>
                            <div class="form-group row col-sm-12">
                               <label for="branchname" class="col-sm-3" style="font-size: 12pt;">Zone/Branch Name</label>
                               <input type="text" style="font-size: 10pt;" id="branchname" name="branchname" placeholder="Zone/Branch Name" class="form-control col-sm-9" autofocus>
                            </div>
                            <div class="form-group row col-sm-12">
                               <label for="pincode" class="col-sm-3" style="font-size: 12pt;">Pin Code</label>
                               <input type="text" style="font-size: 10pt;" id="pincode" name="pincode" placeholder="Pin Code" class="form-control col-sm-9" autofocus>
                            </div>
                            <div class="form-group row col-sm-12">
                               <label for="password" class="col-sm-3" style="font-size: 12pt;">Password</label>
                               <input type="password" style="font-size: 10pt;" id="password" name="password" placeholder="Create Password" class="form-control col-sm-9" autofocus>
                            </div>
                            <div class="form-group row col-sm-12">
                               <label for="password" class="col-sm-3" style="font-size: 12pt;">Password</label>
                               <input type="password" style="font-size: 10pt;" id="password" name="password" placeholder="Confirm Password" class="form-control col-sm-9" autofocus>
                            </div>
                            <div class="form-group row col-sm-12">
                            <button type="button" style="font-size: 10pt;" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button style="font-size: 10pt;" type="submit" name="register" class="btn btn-primary btn-sm ml-1">Register</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
  </div>
<!--registration end-->

    <div class="container-fluid" style="background-color: skyblue;">
    	<div class="row">
    		<div class="col-sm-9">
    			<img src="image/ziksan-logo.jpg" class="img-fluid" alt="logo image" style="padding: 20px 20px 20px 20px">
    		</div>
    		<div class="col-sm-3" style="margin-top: 20px;">
    			<span class="navbar-text" id="login">
    				<?php
                      if(isset($_SESSION["username"]))
                       {
                            ?>
                            <button type="submit" name="logout" class="btn btn-primary">Log Out</a></button>
                           <?php
                           }
                        else
                        {
                           ?>
                             <button class="btn btn-primary"><a style="color: #fff;" class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Log In</a></button>
                            <?php
                        }
                    ?>  
                    <button class="btn btn-primary"><a style="color: #fff;" class="nav-link" href="#" data-toggle="modal" data-target="#registrationModal">Register</a></button>
              </span>
    		</div>
    	</div>
    </div>

<?php
    if(isset($_POST['logout']))
       {
            session_destroy();
            header("Location:index.php");
       }
 ?>

    <nav class="navbar stick-top">
    		<ul style="list-style: none;">
    			<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="inquiry.php">Inquiry</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href=""></a></li>
    		</ul>
    </nav>

    

    <div class="container-fluid">
    	
    </div>

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>