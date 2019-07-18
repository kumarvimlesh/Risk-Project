<?php
 if (isset($_POST['addhelp'])) {
 	$category = $_POST['category'];
 	$description = $_POST['description'];
 	$con = mysqli_connect('localhost','root','','armed-ssfr');
 	if ($con) {
 		$sql = "insert into helpdesk(category,description) values ('".$category."','".$description."')";
 		$query = mysqli_query($con,$sql);
 		if($query){
 		?>
 		<script type="text/javascript">
 			alert('successful');
 		</script>	
 		<?php
 		header("Location:evidencevideo.php");
 	    }
 	    else{
 	    	?>
 		<script type="text/javascript">
 			alert('failed');
 		</script>
 		<?php
 	    }
 	}
 	else {
 		?>
 		<script type="text/javascript">
 			alert('not connected to the database');
 		</script>
 		<?php
 	}
 }
 else{
 	?>
 	<script type="text/javascript">
 		alert('something went wrong');
 	</script>
 	<?php
 }
?>