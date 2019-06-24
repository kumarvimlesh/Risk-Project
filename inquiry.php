<?php
 session_start();
 if(isset($_POST['submit']))
   {
     if($_POST['typeofcrime']=='cyber')
       {
         header("Location:inquirycyber.php");
       }
     if($_POST['typeofcrime']=='physical')
       {
         header("Location:inquiryphysical.php");
       }
   }


echo"<!-- login authentication-->";  
if (isset($_POST['login'])) {
  if($_POST['username']=='armed' && $_POST['password']=='ssfr')
  {
    $_SESSION["username"] = $_POST['username'];
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
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>ARMeD | SSFR</title>
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#form {
  background-color: #ffffff;
  margin: 60px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 200px;
}
label
{
  font-size: 20pt;
  padding: 10px 30px 10px 30px;
}
.button
        {
            height: 50px;
            width:150px; 
            border-radius:30px;
            color: #000;
            background-color: #fff;
        }

</style>
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
                    <form action="inquiry.php" method="POST">
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


  <nav class="navbar sticky-top">
            <ul style="list-style: none;">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Inquiry</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href=""></a></li>
            </ul>
            <span>
              <form action="dashboard.php" method="POST">
                    <?php
                      if(isset($_SESSION["username"]))
                       {
                           ?>
                           <input class="btn btn-primary" type="submit" name="logout" value="Log Out">
                           <?php
                           }
                           else
                           {
                            ?>
                            <button class="btn btn-primary"><a style="color: #fff;" class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Log In</a></button>
                            <?php
                           }
                      ?>  
                </form>
            </span>
    </nav>   



    <?php
    if(isset($_SESSION["username"]))
    {
    
     if(isset($_POST['logout']))
         {
            echo"<script>alert('You Will be Logged Out !')</script>";
            session_destroy();
            header("Location:index.php");
         }
      ?>
        <div class="container-fluid">
            <div id="form" align="center">
              <form action="inquiry.php" method="post">
                <div class="form-group " style="padding: 80px 10px 50px 10px;">
                  <div class="row">
                    <label class="col-sm-3 offset-2" style="font-size: 14pt;font-family: Raleway;" for="date"><b>Crime Date :</b></label>
                    <input class="form-control col-sm-4" type="date" name="date" placeholder="Date of Crime">
                  </div>
                  <label for="typeofcrime" ><b>Crime Type</b></label><br>
                  <label class="radio-inline"><input type="radio" name="typeofcrime" value="physical"><b>Non-Cyber</b></label>
                  <label class="radio-inline"><input type="radio" name="typeofcrime" value="cyber"><b>Cyber</b></label><br>
                  <input class="btn btn-primary button" type="submit" name="submit" value="Next">
                </div>
              </form>
            </div>
        </div>

        <?php
          }
          else
          {
            ?>
            <script type="text/javascript">
              alert("Please Log In to Start Investigation");
            </script>
            <?php 
          }
        ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>