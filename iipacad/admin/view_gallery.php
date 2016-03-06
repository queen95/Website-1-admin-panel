<?php
	mysql_connect('localhost','root','');
	mysql_select_db("iipacad");
?>
<html>
<head>
<title>View News</title>
<link href="css/style.css" rel="stylesheet"/>
</head>

<body>
<div class="main">
	<div>
	<?php include("header.php"); ?>
	</div>
	<div class="bg">
	<div class="heading">View Gallery</div>
	<table class="gridx" border="2" cellspacing="0">
    	<tr>
			<td>S.No</td>
			<td>Image_title</td>
			<td>Image</td>
		</tr>
	<?php
		$sel="select * from add_gallery";
    	$exe=mysql_query($sel);
		while($fetch=mysql_fetch_array($exe))
			{
	?>
		<tr>
			<td><?php echo $fetch['serial_id'] ?></td>
			<td><?php echo $fetch['gtitle'] ?></td>
			<td><img src="../galleryimages/<?php echo $fetch['gimage'] ?>" width="50" height="50"/></td>
			<td>Delete</td>
			<td>Edit</td>
		</tr>
	<?php } ?>
	</table>
	</div>
	<div>
	<?php include("footer.php"); ?>
	</div>
</div>
</body>
</html>
