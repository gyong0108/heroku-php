<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8" />
	<title>Products - HealthyLife</title>
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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.php"><img src="images/logo.gif" alt="Logo" /></a>
			</div>
			<ul>
				<li class="first"><a href="index.php">Home</a></li>
				<li class="selected"><a href="Products.php">Products</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li class="last"><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
		<div id="content">
			
		</div>
		<p id="read_more" style="margin-left: 70%;color:blue;">Read More</p>
		<p id="read_less" style="margin-left: 70%;color:blue;">Read Less</p>
		<div id="footer">
			<div>
				<div>
					<div>
						<div class="first">
							<h3>Newsletter</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea. <a class="more" href="index.php">Read more</a></p>
						</div>
						<div>
							<h3>Address</h3>
							<p>18th Floor, Lorem ipsum dolor Adipiscing Bldg., Quisque Vestibulum Avenue Samar Loop St., Business Park Quisque vestibulum, 6029</p>
						</div>
						<div>
							<h3>Follow us</h3>
							<ul>
								<li><a href="http://facebook.com/freewebsitetemplates" target="_blank" class="facebook">Facebook</a></li>
								<li><a href="#" class="support">Support</a></li>
								<li><a href="http://twitter.com/fwtemplates" target="_blank" class="twitter">Twitter</a></li>
								<li><a href="http://www.flickr.com/freewebsitetemplates/" target="_blank" class="flicker">Flicker</a></li>
							</ul>
							<span>+32-819-4560</span>
						</div>
					</div>
				</div>
				<p class="footnote">&copy; 2011 Healthy Life. All Rights Reserved.</p>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$.ajax({
				url:"ProductContent.php",
				method: "GET",
				success: function(response){
					$("#content").html(response);
				},
			});
			$("#read_less").hide();
			$("#read_more").click(function(){
				$("#read_less").show();
				$(this).hide();
				$.ajax({
					url:"ProductContent.php",
					method: "POST",
					data:{
						data:"more",
					},
					success: function(response){
						$("#content").html(response);
					},
				});
			});

			$("#read_less").click(function(){
				$("#read_more").show();
				$(this).hide();
				$.ajax({
					url:"ProductContent.php",
					method: "GET",
					success: function(response){
						$("#content").html(response);
					},
				});
			});
		});
	</script>
</body>
</html>