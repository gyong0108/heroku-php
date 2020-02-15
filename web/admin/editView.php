<?php
include("db_connect.php");

$id = $_POST['edit'];
$query = "SELECT * from products where id='".$id."'";
$result = mysql_query($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit | Products</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body{
			background-image: url("../images/Editbg.png");
		}

		#container{
			width:50%;
			margin: auto;
			margin-top: 5%;
			box-shadow: 5px 5px 3px 1px grey;
			background-color: rgba(255,255,255,0.6);
			border-radius: 5%;
		}
		#editBtn{
			width: 100%;
			padding: 1%;
			margin-top: 3%;
			margin-bottom: 3%;
			font-size: 20px;
		}

		#closeBtn{
			border-radius: 50%;
			position: absolute;
			z-index: 10;
			margin-left: 46%;
			margin-top: 1%;
		}
		#originalImage{
			width: 100px;
			height: 100px;
		}
		#imageShow{
			position: absolute;
			z-index: 10;
			margin-left: 35%;
			margin-top: -37%;
		}
		#changeImage{
			position: absolute;
			z-index: 10;
			margin-left: 35%;
			margin-top: -23%;
			width:10%;
		}
	</style>
</head>
<body>
<div id="container">
<?php
while($row = mysql_fetch_array($result)){
?>
		<fieldset>
			<a class="btn btn-info" id="closeBtn" href="index.php"><i class="fa fa-close"></i></a>
			<form action="editProduct.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $row[0]; ?>">
				<div style="width:50%;height:70%;margin-left:10%;">
					<legend>Edit Product <?php echo $row[1]; ?></legend>
					<label>Product Name:</label>
		    		<input type="text" name="product_name" id="product_name" class="form-control" value="<?php echo $row[1]; ?>">
		    		<label>Product Type:</label>
		    		<input type="text" name="product_type" id="product_type" class="form-control" value="<?php echo $row[2]; ?>">
		    		<label>Produced Date:</label>
		    		<input type="date" name="product_date" id="product_date" class="form-control" value="<?php echo $row[3]; ?>">
		    		<label>Archive Date:</label>
		    		<input type="date" name="archive_date" id="archive_date" class="form-control" value="<?php echo $row[4]; ?>">
		    		<label>Product Company:</label>
		    		<input type="text" name="product_company" id="product_company" class="form-control" value="<?php echo $row[5]; ?>">
		    		<label>Sales Department:</label>
		    		<input type="text" name="sales_department" id="sales_department" class="form-control" value="<?php echo $row[6]; ?>">
		    		<label>Price:</label>
		    		<input type="text" name="price" id="price" class="form-control" value="<?php echo $row[8]; ?>">
		    		<label>Description:</label>
		    		<textarea name="brief_desc" id="brief_desc" class="form-control"><?php echo $row[7]; ?></textarea>
		    		<button class="btn btn-danger" id="editBtn" type="submit">Edit</button>
		    	</div>
		    	<div id="imageShow">
		    		<label>Original:</label><br/>
		    		<img src="../images/<?php echo $row[9]; ?>" id="originalImage">
		    	</div>
		    	<div id="changeImage">
		    		<label>Change Image:</label><br/>
		    		<input type="file" name="update_image" id="update_image" class="form-control">
		    	</div>
		    </form>
		</fieldset>
<?php
}
?>
	</div>
</body>
</html>