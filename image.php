<?php include('header.php'); ?>
<br>

	<?php
	if (isset($_GET['image_path'])) {
		# code...
		$image_path = $_GET['image_path'];
	}

	 ?>
<center><img src="<?php echo $image_path; ?>" alt=""></center>
<br>
<br>


<?php include('footer.php'); ?>