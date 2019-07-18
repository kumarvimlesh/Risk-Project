<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style type="text/css">
        body{
            text-align: center;
            margin-top: 100px;
            background-color: #aef;
            font-size: 18pt;
        }
    </style>
</head>
<body>
<?php 
 if (isset($_POST['submit'])) {
     $maxsize = 5242880000; // 5MB
 
       $name = $_FILES['videofile']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["videofile"]["name"];
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg","MKV");
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['videofile']['size'] >= $maxsize) || ($_FILES["videofile"]["size"] == 0)) {
            echo "File too large. File must be less than 5MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['videofile']['tmp_name'],$target_file)){
              // Insert record
              echo "Uploaded successfully.";
            }
            else{
            echo "error";
          }
          }

       }else{
          echo "Invalid file extension.";
       }
 }
 else{
    echo "not submitted";
 }
?>
<br>
<a href="evidencevideo.php" style="text-decoration:none;"><button class="btn btn-primary">Return</button></a>
</body>
</html>
