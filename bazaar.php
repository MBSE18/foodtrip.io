<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid" style="height: 100px">
			<a class="navbar-brand" href="home.php"><img class="img1" src="FoodTrip Logo.png" alt="Avatar"></a>
			<a class="navbar-brand" style="font-size:25px; margin-top: 20px; padding-left: 40px;" href="bazaar.php"><i></i>Bazaar</a>
			<a class="navbar-brand" style="font-size:25px; margin-top: 20px; padding-left: 40px;" href="streetfoods.php"><i></i>Street Food</a>
			<a class="navbar-brand" style="font-size:25px; margin-top: 20px; padding-left: 40px;" href="map.php"><i></i>Map</a>
			<a class="navbar-brand" style="font-size:25px; margin-top: 20px; padding-left: 700px;" href="logout.php"><i></i>Log Out</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-lg well">
		<h3 class="text-primary" style="text-align: center; font-size: 35px;">Bazaar</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-lg">
        <?php
            include('conn.php');
    
            $query=mysqli_query($conn,"select * from image_tb");
            if(mysqli_num_rows($query) > 0){
                while($row=mysqli_fetch_array($query)){
                    ?>
                        <img src="<?php echo $row['img_location']; ?>">
                    <?php
                }
            }else{
                echo "<p><strong>No Images uploaded yet.</strong></p>";
            }
        ?>
    <div>
        <form method="POST" action="upload.php" enctype="multipart/form-data">
        <label>Image:</label><input type="file" name="image" accept="image/*">
        <button type="submit">Upload</button>
        <a href="delete.php?imageid=<?php echo $fetch['imageid']?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
        </form>
	</div>
		</div>
	</div>
</body>
</html>

<style>
	.img1{
		display: auto;
		height: 70px;
		width: 70px;
	}

	.img2{
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
</style>