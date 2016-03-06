<?php
	mysql_connect("localhost","root","") or die('connectivity issue');
	mysql_select_db("iipacad") or die('db issue');
	
	//if($_POST['utitle']!="")
		{
			 
			 $ins="insert into enquiry set gender='".$_POST['utitle']."',name='".$_POST['uname']."',contact='".$_POST['uphone']."',country='".$_POST['ucountry']."' , 			                   state='".$_POST['ustate']."',city='".$_POST['ucity']."',address='".$_POST['uaddress']."',email='".$_POST['umail']."',enquiry='".$_POST['uenquiry']."' ";
			mysql_query($ins);
		}
?>
<html>

<head>
	<title>Enquiry</title>
	<link href="css/style.css" rel="stylesheet"/>
</head>

<body>
	<div class="main">
	
		<div class="first">
			<div class="first1">
				<img src="images/logo.png" width="210" height="160" alt="logo"/>
			</div>
			<div class="first2">
				LOOKING FOR THE BEST PLACE FOR<br/>PROGRAMMING
			</div>
			<div>
			<div>
			<div class="reg"><a href="register.php">Register |</a> </div>
			<div class="regx"><a href="login.php">&nbsp;Login</a></div>
			</div>
			<div class="first3">
				<div class="websitetop">www.iipacademy.com</div>
				<div class="mailtop">Info@iipacademy.com</div>
				<div class="phntop">+91-9269698122</div>
			</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="second">
			<div class="hometop"><a href="index.php">Home</a></div>
			<div class="aboutustop"><a href="aboutus.php">About Us</a></div>
			<div class="coursestop"><a href="courses.php">Courses</a></div>
			<div class="gallerytop"><a href="gallery.php">Gallery</a></div>
			<div class="enquirytop"><a href="enquiry.php">Enquiry</a></div>
			<div class="contactustop"><a href="contactus.php">Contact Us</a></div>
			<div class="clear"></div>
		</div>
		<div class="thirdenquiry">
			<div class="third1">
			 	<div class="homelist"><a href="index.php">Home</a></div>
				<div class="aboutuslist"><a href="aboutus.php">About Us</a></div>
				<div class="courseslist"><a href="courses.php">Courses</a></div>
				<div class="gallerylist"><a href="gallery.php">Gallery</a></div>
				<div class="enquirylist"><a href="enquiry.php">Enquiry</a></div>
				<div class="contactlist"><a href="contactus.php">Contact Us</a></div>
			</div>
			<form action="" method="post">
				<div class="aboutuspage">
					<h1>Enquiry</h1>
					<div class="row">
						<div class="q">Gender:</div>
						<div class="a">
						<input type="radio" name="utitle" value="M"/>Male
						<input type="radio" name="utitle" value="F"/>female
						</div>
						<div class="clear"></div>
					</div>
					<div class="row">
						<div class="q">Name:</div>
						<div class="a">
							<input type="text" name="uname" value=""/>
						</div>
						<div class="clear"></div>
					</div>
					<div class="row">
						<div class="q">Contact No.</div>
						<div class="a">
							<input type="text" name="uphone" value=""/>
						</div>
						<div class="clear"></div>
					</div>
					<div class="row">
						<div class="q">Country:</div>
						<div class="a">
							<select name="ucountry">
								<option value="default">--Select--</option>
								<option value="1">India</option>
								<option value="2">Pakistan</option>
								<option value="3">China</option>
							</select>
						</div>
						<div class="clear"></div>
					</div>
					<div class="row">
						<div class="q">State:</div>
						<div class="a">
							<select name="ustate">
								<option value="default">--Select--</option>
								<option value="1">Rajasthan</option>
								<option value="2">Karachi</option>
								<option value="3">Beijing</option>	
							</select>
						</div>
						<div class="clear"></div>
					</div>
					<div class="row">
						<div class="q">City:</div>
						<div class="a">
							<select name="ucity">
								<option value="default">--Select--</option>
								<option value="1">Jodhpur</option>
								<option value="2">Tulaq Bhag</option>
								<option value="3">Mocha</option>	
							</select>
						</div>
						<div class="clear"></div>
					</div>
					<div class="row">
						<div class="q">Address:</div>
						<div class="a">
							<textarea name="uaddress"></textarea>
						</div>
						<div class="clear"></div>
					</div>
					<div class="row">
						<div class="q">Email:</div>
						<div class="a">
							<input type="text" name="umail" value=""/>
						</div>
						<div class="clear"></div>
					</div>
					<div class="row">
						<div class="q">Enquiry</div>
						<div class="a">
							<textarea name="uenquiry"></textarea>
						</div>
						<div class="clear"></div>
					</div>
					<div class="row">
						<div class="q">
							<input type="submit" name="submit" value="Send"/>
						</div>
					</div>
			</div>
		</form>
		<div class="clear"></div>
		<div class="foot">
			<div class="foot_left"></div>
			<div class="foot_middle"><div class="foot_content">Home | About Us | Courses | Gallery | Enquiry</div></div>
			<div class="foot_right"></div>
			<div class="clear"></div>
		</div>
	</div>

</body>

</html>