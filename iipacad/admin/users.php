<?php  
	mysql_connect("localhost","root","") or die('connectivity issue');
	mysql_select_db("iipacad") or die('db issue');
	$del="delete from users where serial_id='".$_GET['uid']."'";
	mysql_query($del);
?>

<html>
<head>
<title>Users</title>
<link href="css/style.css" rel="stylesheet"/>

</head>
<div class="main">
	<div>
	<?php include("header.php"); ?>
	</div>
	<div class="bg">
	<div class="heading">View Users</div>
	<table class="gridx" border="2" cellspacing="0">
    	<tr>
			<td align="center"><input type="button" value="Delete" name="del"/></td>
			<td>S.No</td>
			<td>Name</td>
			<td>Email</td>
			<td>Phone-no</td>
			<td>Delete</td>
			<td>Edit</td>
		</tr>
	 <?php
		$sel="select * from users";
    	$exe=mysql_query($sel);
		while($fetch=mysql_fetch_array($exe))
			{
	?>
		<tr>
			<td><input type="checkbox"/></td>
			<td><?php echo $fetch['serial_id'] ?></td>
			<td><?php echo $fetch['name'] ?></td>
			<td><?php echo $fetch['email'] ?></td>
			<td><?php echo $fetch['mobile_no'] ?></td>
			<td><a href="users.php?uid=<?php echo $fetch['serial_id'] ?>">Delete</a></td>
			<td>Edit</td>
		</tr>
	<?php } ?>
	</table>
	</div>
	<div>
	<?php include("footer.php"); ?>
	</div>
</div>
<body>
</body>
</html>
