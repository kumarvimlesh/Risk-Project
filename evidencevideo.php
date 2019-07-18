<?php
 session_start();
 if (isset($_POST['logout'])) {
    session_destroy();
    header("Location:index.php");
 }
 $con=mysqli_connect('localhost','root','','armed-ssfr');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evidence Colletion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <style type="text/css">
        .tab {
           float: left;
           border: 1px solid #ccc;
           background-color: #f1f1f1;
           width: 100%;
           }
.tab button {
  display: block;
  background-color: #abc;
  color: black;
  padding:8px 5px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
}
.tab button:hover {
  background-color: #27f;
  color: white;
  width: 100%;
  text-align: center;
}
.tab button.active {
  background-color: #bbb;
  width: 100%;
}
.sidepanel  {
  width:0;
  position: fixed;
  z-index: 1;
  height:100%;
  top: 0;
  right: 0;
  background-color: #aef;
  font-size: 14pt;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 30px;
}

.sidepanel .closebtn {
  position:absolute;
  top: 0;
  right: 0;
  font-size: 20px;
}
    </style>
</head>
<body>

  <nav class="navbar sticky-top">
            <ul style="list-style: none;">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Inquiry</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href=""></a></li>
            </ul>
            <span>
              <form action="evidencevideo.php" method="POST">
                <input type="submit" name="logout" value="LogOut" class="btn btn-primary">
              </form>
            </span>
    </nav>    
<?php
  if(isset($_SESSION["username"])) {
    ?>
    <div class="container-fluid" style="padding: 20px 20px 20px 20px;">
      <div class="row">
        <div class="col-sm-6" style="text-align: center;">
            <div class="btn-group">
               <button class="btn btn-primary" id="btnStart">START RECORDING</button>
               <button class="btn btn-primary" id="btnStop">STOP RECORDING</button>
               <button class="btn btn-primary"><a style="text-decoration: none;color: #fff;" href="#vid2">PLAY VIDEO</a></button>
            </div>
            <div>
               <video class="col-sm-12" height="456px" controls></video>
               <form class="row" action="upload.php" method="post" enctype="multipart/form-data">
                 <label for="image" class="col-sm-12">Upload Image</label>
                 <input type="file" name="fileToUpload" id="fileToUpload" class="form-control col-sm-7 offset-1">
                 <input type="submit" value="Upload" name="submit" class="form-control col-sm-3 btn btn-primary">
               </form>

               <form class="row" action="uploadvideo.php" method="post" enctype="multipart/form-data">
                 <label for="video" class="col-sm-12">Upload Video</label>
                 <input type="file" name="videofile" id="videofile" class="form-control col-sm-7 offset-1">
                 <input type="submit" value="Upload" name="submit" class="form-control col-sm-3 btn btn-primary">
               </form>

               <h6 style="text-align: center;">video url : <span id="mytext"></span></h6>
            </div>
        </div>
        <div class="col-sm-2 " style="margin-top:35px;">
            <div class="tab">
              <button>Computer</button>
              <button>Laptop</button>
              <button>Mobile Phone</button>
              <button>TelePhone</button>
              <button>TV/LED TV</button>
              <button>Tablet</button>
              <button>Printer</button>
              <button>Camera</button>
              <button>Watch</button>
              <button>Radio</button>
              <button>Audio Recorder</button>
              <button>Others</button>
            </div>
        </div>

        <div class="col-sm-4">
          <!-- Text Evidence-->
          <div class="col-sm-12" style="padding: 10px 10px 10px 10px; text-align: center;">
            <form action="evidence.php" method="post">
              <label style="font-size: 15pt;float: left;" for="textevidence">Type Text Evidence</label>
              <textarea class="form-control" id="textevidence" name="textevidence" class="col-sm-12" rows="5" placeholder="Write some text"></textarea>
              <input style="margin-top: 5px;" class="form-control btn btn-primary" type="submit" name="submit">
            </form>
          </div>
          <!--Help Section Begin-->
          <div class="col-sm-12" style="padding: 30px 30 30px 30px;margin-top: 35px;">
            <!--Help Icons-->
            <div class="col-sm-12" style="text-align: center;">
              <h3 style="font-family:fantasy;">Help</h3>
              <button class="btn openbtn" onclick="document.getElementById('general').style.width ='400px'"><img src="image/general.jfif" class="img-fluid" height="50" width="50"></button>
              <button class="btn openbtn" onclick="document.getElementById('computer').style.width ='400px'"><img src="image/mycomputer.png" class="img-fluid" height="50" width="50"></button>
              <button class="btn openbtn" onclick="document.getElementById('laptop').style.width ='400px'"><img src="image/download.png" class="img-fluid" height="55" width="50"></button>
              <button class="btn openbtn" onclick="document.getElementById('mobile').style.width ='400px'"><img src="image/mobile.png" class="img-fluid" height="40" width="50"></button>
              <button class="btn openbtn" onclick="document.getElementById('telephone').style.width ='400px'"><img src="image/telephone.jfif" class="img-fluid" height="50" width="50"></button>  
              <button class="btn openbtn" onclick="document.getElementById('tv').style.width ='400px'"><img src="image/tv.png" class="img-fluid" height="50" width="50"></button>
              <button class="btn openbtn" onclick="document.getElementById('tablet').style.width ='400px'"><img src="image/tablet.jfif" class="img-fluid" height="50" width="50"></button>
              <button class="btn openbtn" onclick="document.getElementById('printer').style.width ='400px'"><img src="image/printer.jfif" class="img-fluid" height="50" width="50"></button>
              <button class="btn openbtn" onclick="document.getElementById('camera').style.width ='400px'"><img src="image/camera.jfif" class="img-fluid" height="50" width="50"></button>
              <button class="btn openbtn" onclick="document.getElementById('radio').style.width ='400px'"><img src="image/radio.jpg" class="img-fluid" height="50" width="50"></button>
              <button class="btn openbtn" onclick="document.getElementById('watch').style.width ='400px'"><img src="image/watch.jfif" class="img-fluid" height="50" width="50"></button>
              <button class="btn openbtn" onclick="document.getElementById('audio').style.width ='400px'"><img src="image/audiorecord.jfif" class="img-fluid" height="50" width="50"></button>
              <button class="btn col-sm-10 offset=1 btn-primary openbtn" onclick="document.getElementById('addhelpbutton').style.width ='400px'">Add Another Help</button>
            </div>
            <!--Sidepannels Begin-->
            <div id="computer" class="sidepanel" style="margin-top: 80px;">
                <button class="closebtn btn-primary" onclick="document.getElementById('computer').style.width = '0';">×</button>
                <div style="padding: 10px 10px 10px 10px;margin-bottom: 60px;">
                  <ul>
                    <?php
                     if($con){
                        $sql="select description from helpdesk where category='computer'";
                        $query = mysqli_query($con,$sql);
                          while($row2 = $query->fetch_assoc()){
                            echo "<li>".$row2['description']."</li>";
                        }
                      }
                     else{
                      die("Connection failed: " . mysqli_connect_error());
                      echo "error to connecting to the database";
                     }
                    ?>
                  </ul>
                </div>
            </div>
            <div id="general" class="sidepanel" style="margin-top: 80px;">
                <button class="closebtn btn-primary" onclick="document.getElementById('general').style.width = '0';">×</button>
                 <div style="padding: 10px 10px 10px 10px;margin-bottom: 60px;">
                   <ul>
                     <?php
                     if($con){
                        $sqlg="select description from helpdesk where category='general'";
                        $queryg = mysqli_query($con,$sqlg);
                          while($rowg = $queryg->fetch_assoc()){
                            echo "<li>".$rowg['description']."</li>";
                        }
                      }
                     else{
                      die("Connection failed: " . mysqli_connect_error());
                      echo "error to connecting to the database";
                     }
                    ?>
                   </ul>
                 </div>
            </div>
            <div id="mobile" class="sidepanel" style="margin-top: 80px;">
                <button class="closebtn btn-primary" onclick="document.getElementById('mobile').style.width = '0';">×</button>
                <div style="padding: 10px 10px 10px 10px;margin-bottom: 60px;">
                  <ul>
                    <?php
                     if($con){
                        $sqlm="select description from helpdesk where category='mobile'";
                        $querym = mysqli_query($con,$sqlm);
                          while($rowm = $querym->fetch_assoc()){
                            echo "<li>".$rowm['description']."</li>";
                        }
                      }
                     else{
                      die("Connection failed: " . mysqli_connect_error());
                      echo "error to connecting to the database";
                     }
                    ?>
                  </ul>
                </div>
            </div>
            <div id="laptop" class="sidepanel" style="margin-top: 80px;">
                <button class="closebtn btn-primary" onclick="document.getElementById('laptop').style.width = '0';">×</button>
                <div style="padding: 10px 10px 10px 10px;margin-bottom: 60px;">
                  <ul>
                    <?php
                     if($con){
                        $sqllap="select description from helpdesk where category='laptop'";
                        $querylap = mysqli_query($con,$sqllap);
                          while($rowlap = $querylap->fetch_assoc()){
                            echo "<li>".$rowlap['description']."</li>";
                        }
                      }
                     else{
                      die("Connection failed: " . mysqli_connect_error());
                      echo "error to connecting to the database";
                     }
                    ?>
                  </ul>
                </div>
            </div>
            <div id="telephone" class="sidepanel" style="margin-top: 80px;">
                <button class="closebtn btn-primary" onclick="document.getElementById('telephone').style.width = '0';">×</button>
                <div style="padding: 10px 10px 10px 10px;margin-bottom: 60px;">
                  <ul>
                    <?php
                     if($con){
                        $sqlt="select description from helpdesk where category='telephone'";
                        $queryt = mysqli_query($con,$sqlt);
                          while($rowt = $queryt->fetch_assoc()){
                            echo "<li>".$rowt['description']."</li>";
                        }
                      }
                     else{
                      die("Connection failed: " . mysqli_connect_error());
                      echo "error to connecting to the database";
                     }
                    ?>
                  </ul>
                </div>
            </div>
            <div id="tv" class="sidepanel" style="margin-top: 80px;">
                <button class="closebtn btn-primary" onclick="document.getElementById('tv').style.width = '0';">×</button>
                <div style="padding: 10px 10px 10px 10px;margin-bottom: 60px;">
                  <ul>
                    <?php
                     if($con){
                        $sqltv="select description from helpdesk where category='tv'";
                        $querytv = mysqli_query($con,$sqltv);
                          while($rowtv = $querytv->fetch_assoc()){
                            echo "<li>".$rowtv['description']."</li>";
                        }
                      }
                     else{
                      die("Connection failed: " . mysqli_connect_error());
                      echo "error to connecting to the database";
                     }
                    ?>
                  </ul>
                </div>
            </div>
            <div id="tablet" class="sidepanel" style="margin-top: 80px;">
                <button class="closebtn btn-primary" onclick="document.getElementById('tablet').style.width = '0';">×</button>
                <div style="padding: 10px 10px 10px 10px;margin-bottom: 60px;">
                  <ul>
                    <?php
                     if($con){
                        $sqltab="select description from helpdesk where category='tablet'";
                        $querytab = mysqli_query($con,$sqltab);
                          while($rowtab = $querytab->fetch_assoc()){
                            echo "<li>".$rowtab['description']."</li>";
                        }
                      }
                     else{
                      die("Connection failed: " . mysqli_connect_error());
                      echo "error to connecting to the database";
                     }
                    ?>
                  </ul>
                </div>
            </div>
            <div id="printer" class="sidepanel" style="margin-top: 80px;">
                <button class="closebtn btn-primary" onclick="document.getElementById('printer').style.width = '0';">×</button>
                <div style="padding: 10px 10px 10px 10px;margin-bottom: 60px;">
                  <ul>
                    <?php
                     if($con){
                        $sqlprint="select description from helpdesk where category='printer'";
                        $queryprint = mysqli_query($con,$sqlprint);
                          while($rowprint = $queryprint->fetch_assoc()){
                            echo "<li>".$rowprint['description']."</li>";
                        }
                      }
                     else{
                      die("Connection failed: " . mysqli_connect_error());
                      echo "error to connecting to the database";
                     }
                    ?>
                  </ul>
                </div>
            </div>
            <div id="camera" class="sidepanel" style="margin-top: 80px;">
                <button class="closebtn btn-primary" onclick="document.getElementById('camera').style.width = '0';">×</button>
                <div style="padding: 10px 10px 10px 10px;margin-bottom: 60px;">
                  <ul>
                    <?php
                     if($con){
                        $sqlcam="select description from helpdesk where category='camera'";
                        $querycam = mysqli_query($con,$sqlcam);
                          while($rowcam = $querycam->fetch_assoc()){
                            echo "<li>".$rowcam['description']."</li>";
                        }
                      }
                     else{
                      die("Connection failed: " . mysqli_connect_error());
                      echo "error to connecting to the database";
                     }
                    ?>
                  </ul>
                </div>
            </div>
            <div id="watch" class="sidepanel" style="margin-top: 80px;">
                <button class="closebtn btn-primary" onclick="document.getElementById('watch').style.width = '0';">×</button>
                <div style="padding: 10px 10px 10px 10px;margin-bottom: 60px;">
                  <ul>
                    <?php
                     if($con){
                        $sqlwa="select description from helpdesk where category='watch'";
                        $querywa = mysqli_query($con,$sqlwa);
                          while($rowwa = $querywa->fetch_assoc()){
                            echo "<li>".$rowwa['description']."</li>";
                        }
                      }
                     else{
                      die("Connection failed: " . mysqli_connect_error());
                      echo "error to connecting to the database";
                     }
                    ?>
                  </ul>
                </div>
            </div>
            <div id="radio" class="sidepanel" style="margin-top: 80px;">
                <button class="closebtn btn-primary" onclick="document.getElementById('radio').style.width = '0';">×</button>
                <div style="padding: 10px 10px 10px 10px;margin-bottom: 60px;">
                  <ul>
                    <?php
                     if($con){
                        $sqlrad="select description from helpdesk where category='radio'";
                        $queryrad = mysqli_query($con,$sqlrad);
                          while($rowrad = $queryrad->fetch_assoc()){
                            echo "<li>".$rowrad['description']."</li>";
                        }
                      }
                     else{
                      die("Connection failed: " . mysqli_connect_error());
                      echo "error to connecting to the database";
                     }
                    ?>
                  </ul>
                </div>
            </div>
            <div id="audio" class="sidepanel" style="margin-top: 80px;">
                <button class="closebtn btn-primary" onclick="document.getElementById('audio').style.width = '0';">×</button>
                <div style="padding: 10px 10px 10px 10px;margin-bottom: 60px;">
                  <ul>
                    <?php
                     if($con){
                        $sqlaud="select description from helpdesk where category='audio'";
                        $queryaud = mysqli_query($con,$sqlaud);
                          while($rowaud = $queryaud->fetch_assoc()){
                            echo "<li>".$rowaud['description']."</li>";
                        }
                      }
                     else{
                      die("Connection failed: " . mysqli_connect_error());
                      echo "error to connecting to the database";
                     }
                    ?>
                  </ul>
                </div>
            </div>
            <div id="addhelpbutton" class="sidepanel" style="margin-top: 80px;">
                <button class="closebtn btn-primary" onclick="document.getElementById('addhelpbutton').style.width = '0';">×</button>
                <div style="padding: 10px 10px 10px 10px;margin-bottom: 60px;">
                  <form action="evidence.php" method="POST">
                    <label for="category" class="col-sm-8" style="margin-top: 10px;">Select from following</label>
                    <select class="form-control col-sm-8" id="category" name="category">
                      <option>select</option>
                      <option>general</option>
                      <option>computer</option>
                      <option>laptop</option>
                      <option>mobile</option>
                      <option>telephone</option>
                      <option>tv</option>
                      <option>tablet</option>
                      <option>printer</option>
                      <option>camera</option>
                      <option>watch</option>
                      <option>radio</option>
                      <option>audio</option>
                    </select>

                    <label for="description" class="col-sm-8">Description</label>
                    <textarea class="form-control" rows="8" name="description" placeholder="write description" style="margin-top: 10px;"></textarea>
                    <button class="col-sm-12 btn btn-primary" type="submit" name="addhelp" style="margin-top: 10px;">Add Help</button>
                  </form>
                </div>
            </div>
            <!--Sidepannel end-->
          </div>
          <!--Help Section End-->
        </div>

      </div>


      <div class="row" style="margin-top: 25px;padding: 20px 20px 20px 20px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <video id="vid2" class="col-12" controls></video>                
        </div>
        <div class="col-sm-2">
            
        </div>
      </div>
    </div> 
    <?php
  }
  else{
    ?>
    <script>
      alert('Please Login!');
    </script>
    <?php
    header("Location:index.php");
  }
 ?>      
    <script>
        
        let constraintObj = { 
            audio: true, 
            video: { 
                facingMode: "user" 
            } 
        }; 
        if (navigator.mediaDevices === undefined) {
            navigator.mediaDevices = {};
            navigator.mediaDevices.getUserMedia = function(constraintObj) {
                let getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia;
                if (!getUserMedia) {
                    return Promise.reject(new Error('Media Capture is Not Supporting in this browser'));
                }
                return new Promise(function(resolve, reject) {
                    getUserMedia.call(navigator, constraintObj, resolve, reject);
                });
            }
        }else{
            navigator.mediaDevices.enumerateDevices()
            .then(devices => {
                devices.forEach(device=>{
                    console.log(device.kind.toUpperCase(), device.label);
                    //, device.deviceId
                })
            })
            .catch(err=>{
                console.log(err.name, err.message);
            })
        }
        navigator.mediaDevices.getUserMedia(constraintObj)
        .then(function(mediaStreamObj) {
            //connect the media stream to the first video element
            let video = document.querySelector('video');
            if ("srcObject" in video) {
                video.srcObject = mediaStreamObj;
            } else {
                video.src = window.URL.createObjectURL(mediaStreamObj);
            }
            
            video.onloadedmetadata = function(ev) {
                //show in the video element what is being captured by the webcam
                video.play();
            };
            
            //add listeners for saving video/audio
            let start = document.getElementById('btnStart');
            let stop = document.getElementById('btnStop');
            let vidSave = document.getElementById('vid2');
            let mediaRecorder = new MediaRecorder(mediaStreamObj);
            let chunks = [];
            
            start.addEventListener('click', (ev)=>{
                mediaRecorder.start();
                console.log(mediaRecorder.state);
            })
            stop.addEventListener('click', (ev)=>{
                mediaRecorder.stop();
                console.log(mediaRecorder.state);
            });
            mediaRecorder.ondataavailable = function(ev) {
                chunks.push(ev.data);
            }
            mediaRecorder.onstop = (ev)=>{
                let blob = new Blob(chunks, { 'type' : 'video/mp4;' });
                chunks = [];
                let videoURL = window.URL.createObjectURL(blob);
                vidSave.src = videoURL;
                document.getElementById('mytext').innerHTML=videoURL;
            }
        })
        .catch(function(err) { 
            console.log(err.name, err.message); 
        });

</script>
<script type="text/javascript">
  
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

