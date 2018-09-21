<?php include('header.php'); ?>
<div class="container">
	<div class="row">
<?php
$folder_path = 'gallery/salman_photos/';

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);

if($num_files > 0)
{
while(false !== ($file = readdir($folder)))
{
$file_path = $folder_path.$file;
$extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp')
{
?>
<div class="col-md-4" style="margin-top: 10px">
<a href="image.php?image_path=<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>" height="250" />
</a>
</div>
<?php
}
}
}
else
{
echo "No Images Found";
}
closedir($folder);
?>
</div>
</div>
<?php include('footer.php'); ?>