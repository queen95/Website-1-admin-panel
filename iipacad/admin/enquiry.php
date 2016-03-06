<?php  
	mysql_connect("localhost","root","") or die('connectivity issue');
	mysql_select_db("iipacad") or die('db issue');
	?>

<html>
<head>
<title>Enquiry</title>
<link href="css/style.css" rel="stylesheet"/>
</head>

<body>
<div class="main">
	<div>
	<?php include("header.php"); ?>
	</div>
	<div class="bg">
	<div class="heading">Enquiry</div>
	<table class="gridx" border="2" cellspacing="0">
    	<tr>
			<td>S.No</td>
			<td>Gender</td>
			<td>Name</td>
			<td>Phone-no.</td>
			<td>Country</td>
			<td>State</td>
			<td>City</td>
			<td>Address</td>
			<td>Email</td>
			<td>Enquiry</td>
		</tr>
	 <?php
		$sel="select * from enquiry";
    	$exe=mysql_query($sel);
		while($fetch=mysql_fetch_array($exe))
			{
	?>
		<tr>
			<td><?php echo $fetch['serial_id'] ?></td>
			<td><?php echo $fetch['gender'] ?></td>
			<td><?php echo $fetch['name'] ?></td>
			<td><?php echo $fetch['contact'] ?></td>
			<td><?php echo $fetch['country'] ?></td>
			<td><?php echo $fetch['state'] ?></td>
			<td><?php echo $fetch['city'] ?></td>
			<td><?php echo $fetch['address'] ?></td>
			<td><?php echo $fetch['email'] ?></td>
			<td><?php echo $fetch['enquiry'] ?></td>
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
