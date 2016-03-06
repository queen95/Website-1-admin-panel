<?php  
	mysql_connect("localhost","root","") or die('connectivity issue');
	mysql_select_db("iipacad") or die('db issue');
?>

<html>
<head>
<title>View Contact</title>
<link href="css/style.css" rel="stylesheet"/>
</head>

<body>
<div class="main">
	<div>
	<?php include("header.php"); ?>
	</div>
	<div class="bg">
	<div class="heading">View Contact Us</div>
	<table class="gridx" border="2" cellspacing="0">
    	<tr>
			<td></td>
			<td>S.No</td>
			<td>Company Name</td>
			<td>Address</td>
			<td>Phone No.</td>
			<td>Mobile No.</td>
			<td>Email id</td>
			<td>Delete</td>
			<td>Edit</td>
		</tr>
	 <?php
		$sel="select * from add_contact";
    	$exe=mysql_query($sel);
		while($fetch=mysql_fetch_array($exe))
			{
	?>
		<tr>
			<td><input type="checkbox"/></td>
			<td><?php echo $fetch['serial_id'] ?></td>
			<td><?php echo $fetch['c_name'] ?></td>
			<td><?php echo $fetch['addr'] ?></td>
			<td><?php echo $fetch['ph_no'] ?></td>
			<td><?php echo $fetch['m_no'] ?></td>
			<td><?php echo $fetch['email'] ?></td>
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
