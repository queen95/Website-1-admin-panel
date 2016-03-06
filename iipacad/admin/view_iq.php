<?php  
	mysql_connect("localhost","root","") or die('connectivity issue');
	mysql_select_db("iipacad") or die('db issue');
?>

<html>
<head>
<title>View Interview Ques</title>
<link href="css/style.css" rel="stylesheet"/>
</head>

<body>
<div class="main">
	<div>
	<?php include("header.php"); ?>
	</div>
	<div class="bg">
	<div class="heading">View Interview Questions</div>
	<table class="gridx" border="2" cellspacing="0">
    	<tr>
			<td></td>
			<td>S.No</td>
			<td>Ques</td>
			<td>Ans</td>
			<td>Delete</td>
			<td>Edit</td>
		</tr>
	 <?php
		$sel="select * from add_iq";
    	$exe=mysql_query($sel);
		while($fetch=mysql_fetch_array($exe))
			{
	?>
		<tr>
			<td><input type="checkbox"/></td>
			<td><?php echo $fetch['serial_id'] ?></td>
			<td><?php echo $fetch['ques'] ?></td>
			<td><?php echo $fetch['ans'] ?></td>
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
