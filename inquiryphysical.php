<?php
 session_start();
 if(isset($_POST['next']))
  {
    header("Location:evidencevideo.php");
  }
if(isset($_SESSION["username"]))
 {
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
  padding: 20px;
  width: 70%;
  min-width: 200px;
}
label
{
  font-size: 12pt;
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
  <nav class="navbar sticky-top">
            <ul style="list-style: none;">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="inquiry.php">Inquiry</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href=""></a></li>
            </ul>
            <span>
              <form action="inquiryphysical.php" method="POST">
                <input type="submit" name="logout" value="LogOut" class="btn btn-primary">
              </form>    
            </span>
    </nav>   

        <div class="container-fluid">
            <div id="form" align="center">
              <form action="" method="post">
                <div class="form-group " style="padding: 30px 10px 30px 10px;">
                  <label for="crimecategory" style="font-size: 20pt;"><b>Crime Category</b></label><br>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value="murder"><b>Murder</b></label>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value="kidnapping"><b>Kidnapping</b></label>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value="robbery"><b>Robbery</b></label>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value="propertycrime"><b>Property Crime</b></label>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value="consensualcrime"><b>Consensual Crime</b></label>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value="rape_sexualassault "><b>Rape / Sexual assault </b></label>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value=""><b></b></label>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value=""><b></b></label>
                  <input class="form-control col-sm-6" type="text" name="other" placeholder="Any Other Category">
                  <br>
                  <input class="btn btn-primary button" type="submit" name="next" value="Next">
                </div>
              </form>
            </div>
        </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
  ?>
  <?php
  }
  else
  {
    header("Location:index.php");
  }
?>