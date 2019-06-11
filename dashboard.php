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
                             <script type="text/javascript">
                               alert("Please LogIn");
                             </script>
                             <input class="btn btn-primary" type="submit" name="login" value="Log In">
                            <?php
                        }
                    ?>  
                </form>
            </span>
    </nav>   

   <?php
        if(isset($_POST['logout']))
         {
            session_destroy();
            header("Location:index.php");
         }
         if(isset($_POST['login']))
         {
            header("Location:index.php");
         }
    ?>

    <div class="container-fluid"  style="background-color: #663388; padding:70px 60px 60px 60px;">
    	<div class="container-fluid" style="background-color: #fff;opacity: 0.85;padding:20px 20px 20px 20px;box-shadow: 6px 6px 6px 6px rgba(0.8,0.8,0.8,0.8);border-radius: 12px;">
           <div class="row">
               <div class="col-sm-3" style="border-right-width: 2px;border-right:ridge;">
                   <img src="" class="img-fluid rounded-circle" alt="user profike picture">
               </div>
               <div class="col-sm-9">
                   <div>
                       <h3 style="text-align: center;">Welcome <i>User Name</i></h3>
                   </div>
                   <hr>
                   <div style="text-align:center; padding: 128px 10px 128px 10px;">
                       <button class="btn btn-secondary button"><b>View Prfile</b></button>
                       <button class="btn btn-secondary button"><a class="nav-link" href="inquiry.php" style="text-decoration: none;color: #000;"><b>Start Investigation</b></a></button>
                   </div>
               </div>
           </div>
        </div>
    </div>

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>