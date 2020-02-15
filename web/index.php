<?php
include("db_connect.php");
$query3 = "SELECT * from products ORDER BY id desc limit 3";
$query2 = "SELECT * from products ORDER BY id desc limit 2";
$result3 = mysql_query($query3);
$result2 = mysql_query($query2);
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8" />
	<title>Home - HealthyLife</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!--[if IE 9]>
		<link rel="stylesheet" type="text/css" href="css/ie9.css" />
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="css/ie7.css" />
	<![endif]-->
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="css/ie6.css" />
	<![endif]-->
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.php"><img src="images/logo.gif" alt="Logo" /></a>
			</div>
			<ul>
				<li class="first current"><a href="index.php">Home</a></li>
				<li><a href="Products.php">Products</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li class="last"><a href="contact.html">Contact Us</a></li>
			</ul>
		</div>
		<div id="content">
			<span class="background"></span>
			<div id="home">
				<ul>
<?php
while($row2 = mysql_fetch_array($result2)){
?>
					<li class="first">
						<a href="index.php"><img src="images/<?php echo $row2[9] ?>" style="width:260px; height: 180px;" alt="Image"/></a>
						<p><?php echo $row2[1] ?></p>
					</li>
<?php
}
?>
				</ul>
				<div>
					<a href="index.php"><img src="images/strawberry-pastry.jpg" alt="Image" /></a>
					<h1><a href="index.php"><span>Secrets of</span> <br />Healthy eating</a></h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem anitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem anitatis per seacula quarta decima et quinta decima... <a class="more" href="index.php">Read more</a></p>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<div>
					<ul>
<?php
while($row3 = mysql_fetch_array($result3)){
?>
						<li>
							<a href="index.php"><img src="images/<?php echo $row3[9] ?>" style="width: 320px;height: 240px;border-radius: 50%;" alt="Image" /></a>
							<h2><a href="index.php"><?php echo $row3[1] ?></a></h2>
							<p><?php echo $row3[7] ?></p>
						</li>
<?php
}
?>
					</ul>
				</div>
				<p class="footnote">&copy; 2011 Healthy Life. All Rights Reserved.</p>
			</div>
		</div>
	</div>	
</body>
</html>