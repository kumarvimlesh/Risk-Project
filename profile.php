<?php
 session_start();
 if (isset($_POST['logout'])) {
   session_destroy();
   header("Location:inde.php");
 }
 if(isset($_SESSION["username"])){
?>
<!DOCTYPE html>
<html>
<head>
 
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ARMeD | SSFR</title>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="styles.css">

    <style type="text/css">
    	html
        {
            
        }
        .button
        {
            height: 60px;
            width:240px; 
            border-radius:30px;
            color: #000;
            background-color: #fff;
        }
        .button-a:hover
        {
            color: #fff;
        }
        .tablinks
        {
           padding: 8px 0px 8px 0px; margin-top: 5px;margin-bottom: 5px;
        }
        .tablinks:hover
        {
           padding: 8px 0px 8px 0px; margin-top: 5px;margin-bottom: 5px;
           opacity: 0.8; 
        }
    </style>
</head>
<body>

    <nav class="navbar stick-top">
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

    <div class="container-fluid"  style="background-color: #663388; padding:70px 60px 60px 60px;">
    	<div class="container-fluid" style="background-color: #fff;opacity: 0.85;padding:20px 20px 20px 20px;box-shadow: 6px 6px 6px 6px rgba(0.8,0.8,0.8,0.8);border-radius: 12px;">
           <div class="row">
               <div class="col-sm-3" style="border-right-width: 2px;border-right:ridge;">
                   <img src="image/img_avatar.jpg" class="img-fluid rounded-circle" alt="user profile picture">
                   <div class="tab">
                     <button class="tablinks btn btn-primary col-sm-12" onclick="showcontent(event, 'profile')" id="defaultOpen">Profile</button>
                     <button class="tablinks btn btn-primary col-sm-12" onclick="showcontent(event, 'logininfo')">LogIn Information</button>
                     <button class="tablinks btn btn-primary col-sm-12" onclick="showcontent(event, 'accountsetting')">Account Setting</button>
                   </div>
               </div>
               <div class="col-sm-9">
                 <div id="profile" class="tabcontent">
                   <div>
                      <h2 style="text-align: center;">User Name - <i>username</i></h2>
                   </div>
                   <hr>
                   <div>
                       <table align="center" style="padding: 5px 5px 5px 5px; margin-top: 30px;font-size: 18pt;">
                         <tr>
                           <td>Name</td>
                           <td>-----</td>
                         </tr>
                         <tr>
                           <td>Id Number</td>
                           <td>-----</td>
                         </tr>
                         <tr>
                           <td>Date of Birth</td>
                           <td>DD/MM/YYYY</td>
                         </tr>
                         <tr>
                           <td>Fathers Name</td>
                           <td>-----</td>
                         </tr>
                         <tr>
                           <td>Zone/Branch Name</td>
                           <td>-----</td>
                         </tr>
                         <tr>
                           <td>Pin Code</td>
                           <td>-----</td>
                         </tr>
                       </table>
                   </div>
                   <button style="float: right;" class="btn btn-secondary col-sm-2">Edit</button>
                 </div>
                 <div id="logininfo" class="tabcontent">
                  <div>
                      <h2 style="text-align: center;">User Name - <i>username</i></h2>
                  </div>
                  <hr>
                  <div style="text-align: center;">
                       <h5>User Name - <i>username</i></h5>
                       <h5>Password - <i>.....</i></h5>
                  </div>
                  <button style="float: right;" class="btn btn-secondary col-sm-2">Edit</button>
               </div>
               <div id="accountsetting" class="tabcontent">
                  <div>
                      <h2 style="text-align: center;">User Name - <i>username</i></h2>
                  </div>
                  <hr>
                  <div>
                     
                  </div>
                  <button style="float: right;" class="btn btn-secondary col-sm-2">Edit</button>
               </div>
               </div>
           </div>
        </div>
    </div>

  <script>
function showcontent(evt, evtName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(evtName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();
</script>

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