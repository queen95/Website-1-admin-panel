<?php  
	mysql_connect("localhost","root","") or die('connectivity issue');
	mysql_select_db("iipacad") or die('db issue');
	$del="delete from add_news where serial_id='".$_GET['nid']."'";
	mysql_query($del);
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
	<div class="heading">View News</div>
	<table class="gridx" border="2" cellspacing="0">
    	<tr>
			<td align="center"><input type="button" value="Delete" name="del"/></td>
			<td>S.No</td>
			<td>News_title</td>
			<td>News_descrip</td>
			<td>Delete</td>
			<td>Edit</td>
		</tr>
	 <?php
		$sel="select * from add_news";
    	$exe=mysql_query($sel);
		while($fetch=mysql_fetch_array($exe))
			{
	?>
		<tr>
			<td><input type="checkbox"/></td>
			<td><?php echo $fetch['serial_id'] ?></td>
			<td><?php echo $fetch['news_title'] ?></td>
			<td><?php echo $fetch['news_descrip'] ?></td>
			<td><a href="view_news.php?nid=<?php echo $fetch['serial_id'] ?>">Delete</a></td>
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
