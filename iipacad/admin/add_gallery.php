<?php
	mysql_connect("localhost","root",'');
	mysql_select_db("iipacad");
		if($_POST['gtitle']!="")
			{
				$name=$_FILES['gimage']['name'];
				$tmp_name=$_FILES['gimage']['tmp_name'];
				$path="../galleryimages/".$name;
				move_uploaded_file($tmp_name,$path);
				$insert="insert into add_gallery set gtitle='".$_POST['gtitle']."',gimage='".$name."'";
				mysql_query($insert);
			}
?>
<html>
<head>
<title>Add Gallery</title>
<link href="css/style.css" rel="stylesheet"/>
</head>

<body>
<div class="main">
	<div>
	<?php include("header.php"); ?>
	</div>
	<div class="bg">
	<form action="" method="post" enctype="multipart/form-data">
		<div>
			<div class="contleft">Gallery title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</div>
			<div class="contright"><input type="text" name="gtitle" value=""/></div>
		</div>
		<div class="clear"></div>
		<div>
			<div class="contleft">Gallery Image &nbsp;:</div>
			<div class="contright"><input type="file" name="gimage" value="Choose File.."/></div>
		</div>
		<div class="clear"></div>
		<div class="cell">
		<input type="submit" value="Save" name="usave"/>
		</div>
	</form>
	</div>
	<div>
	<?php include("footer.php"); ?>
	</div> 
</div>
</body>
</html>
