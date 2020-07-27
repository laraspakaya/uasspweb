<?php
include ("includes/config.php");
if(isset($_GET['id']))
{
	$delete = (int) $_GET['del'];
	$namafolder="gallery/"; 
	$sql = "select * from galeri where id='$id'";
	$result = mysqli_query($sql);
	if(mysqli_num_rows($result) > 0 )
	{
		$data = mysqli_fetch_array($result);
		
		@unlink($namafolder.$data['nama']);
		
		mysqli_query("delete from galeri where id='$id'");
	}
} 
header("Location: foto.php");
?>