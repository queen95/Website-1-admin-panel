<?php  
	mysql_connect("localhost","root","") or die('connectivity issue');
	mysql_select_db("iipacad") or die('db issue');
?>


<html>
<head>
<title>Why IIP</title>
<link href="css/style.css" rel="stylesheet"/>
</head>

<body>
<div class="main">
	<div>
	<?php include("header.php"); ?>
	</div>
	<div class="bg">
	<div class="heading">View Why IIP</div>
	<table class="gridx" border="2" cellspacing="0">
    	<tr>
			<td></td>
			<td>S.No</td>
			<td>Title</td>
			<td>Delete</td>
			<td>Edit</td>
		</tr>
	 <?php
		$sel="select * from why_iip";
    	$exe=mysql_query($sel);
		while($fetch=mysql_fetch_array($exe))
			{
	?>
		<tr>
			<td><input type="checkbox"/></td>
			<td><?php echo $fetch['serial_id'] ?></td>
			<td><?php echo $fetch['title'] ?></td>
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
