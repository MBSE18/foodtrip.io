<?php
	require_once 'conn.php';
	
	if($_GET['imageid']){
		$imageid=$_GET['imageid'];
		
		$query=mysqli_query($conn, "SELECT * FROM `image_tb` WHERE `imageid`='$imageid'") or die(mysqli_error());
		$fetch=mysqli_fetch_array($query);
		
		$img_location=$fetch['img_location'];
		
		
		if(unlink($location)){
			mysqli_query($conn, "DELETE FROM `image_tb` WHERE `imageid`='$imageid'") or die(mysqli_error());
			
			header('location: home.php');
		}
		
	}
	
?>