<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
<?php
 if (isset($_POST['register'])) {
 	$con = mysqli_connect("localhost","root","","armed-ssfr");
 	if(!$con)
 	{
 		echo "not connect";
 	}
 	else{
 		$name = $_POST['name'];
 		$username = $_POST['username'];
 		$idnumber = $_POST['idnumber'];
 		$dob = $_POST['dob'];
 		$phone = $_POST['phone'];
 		$email = $_POST['email'];
 		$fathersname = $_POST['fathersname'];
 		$branchname = $_POST['branchname'];
 		$pincode = $_POST['pincode'];
 		$password = $_POST['fpassword'];

 		$sql = "insert into registration(name,username,idnumber,dob,phone,email,fathersname,branchname,pincode,password) values ('$name','$username',$idnumber,'$dob',$phone,'$email','$fathersname','$branchname',$pincode,'$password')";
 		$query = mysqli_query($con,$sql);
 		if ($query) {
 			?>
 			<script type="text/javascript">
 				alert('Successfully Registered');
 			</script>
 			<?php
 		}
 		else{
 			?>
 			<script type="text/javascript">
 				alert('Some error is there!');
 			</script>
 			<?php
 		}
 	}
 }
 else{
 	echo "not submitted";
 }
 //header("Location:index.php");
?>
</body>
</html>