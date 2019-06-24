<?php
session_start();
if(isset($_POST['logout']))
{
  session_destroy();
  header("Location:index.php");
}
if(isset($_POST['submit']))
{
  header("Location:evidencevideo.php");
}
if(isset($_SESSION["username"])){
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
              <form action="dashboard.php" method="POST">
                <input class="btn btn-primary" type="submit" name="logout" value="Log Out">
              </form>
            </span>
    </nav>   

        <div class="container-fluid">
            <div id="form" align="center">
              <form action="" method="post">
                <div class="form-group " style="padding: 30px 10px 30px 10px;">
                  <label for="crimecategory" style="font-size: 20pt;"><b>Crime Category</b></label><br>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value="fraudemail"><b>Email Fraud</b></label>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value="socialmedia"><b>Social Media</b></label>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value="whatsapp"><b>Whatsapp</b></label>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value="atmfraud"><b>ATM Fraud</b></label>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value="cedit_debitcardfraud"><b>Credit/Debit Card Fraud</b></label>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value="websitedefecement"><b>Website Defecement</b></label>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value="datatheft"><b>Data Theft</b></label>
                  <label class="radio-inline"><input type="radio" name="crimecategory" value="fakenews"><b>Fake News</b></label>
                  <input class="form-control col-sm-6" type="text" name="other" placeholder="Any Other Category">
                  <br>
                  <input class="btn btn-primary button" type="submit" name="submit" value="Next">
                </div>
              </form>
            </div>
        </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
else{
  header("Location:index.php");
}
?>