<?php
include("db_connect.php");
if(!isset($_POST['data'])){
	$query = "SELECT * from products ORDER BY id desc limit 3";
	$result = mysql_query($query);
}
else{
	$query = "SELECT * from products ORDER BY id desc";
	$result = mysql_query($query);
}
?>

<link rel="stylesheet" type="text/css" href="css/style.css">
<div>
	<div class="aside" style="width:900px;">
		<div class="row">
<?php
while($row = mysql_fetch_array($result)){
?>
			<div class="col-sm-4">
				<div id="img_cont">
					<a href="#"><img class="product_image" src="images/<?php echo $row[9] ?>" alt="Image" style="" /></a>
					<div class="img_caption">
						<br/>
						<label>Name:</label>
						<h6 class="product_links" name="product_links"style="width:170px;display: inline-flex;"><?php echo $row[1] ?>
							&nbsp;&nbsp;&nbsp;&nbsp;$<?php echo $row[8] ?>
						</h6><br/>
						<label>Product Date:</label>
						<h6 style="width:100px;display: inline-flex;">
							<?php echo $row[3] ?>
						</h6><br/>
						<label>Archive Date:</label>
						<h6 style="width:100px;display: inline-flex;">
							<?php echo $row[4] ?>
						</h6><br/>
						<label>Produced Company:</label>
						<h6 style="width:130px;display: inline-flex;">
							<?php echo $row[5] ?>
						</h6><br/>
						<label>Sales Department:</label>
						<h6 style="width:130px;display: inline-flex;">
							<?php echo $row[6] ?>
						</h6><br/>
						<label>Description:</label>
						<h6 style="width:230px;display: inline-flex;">
							<?php echo $row[7] ?>
						</h6><br/>
					</div>
				</div>
			</div>
<?php
}
?>					
		</div>
	</div>
</div>