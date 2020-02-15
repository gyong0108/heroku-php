<?php

include("db_connect.php");
$id = $_POST['id'];
$product_name = $_POST['product_name'];
$product_type = $_POST['product_type'];
$product_date = $_POST['product_date'];
$archive_date = $_POST['archive_date'];
$product_company = $_POST['product_company'];
$sales_department = $_POST['sales_department'];
$price = $_POST['price'];
$desc = $_POST['brief_desc'];

if(isset($_FILES['update_image']['name']) && $_FILES['update_image']['name'] != ""){
	$imageName = $_FILES['update_image']['name'];
	$target_dir = "../images/";
	$target_file = $target_dir.basename($_FILES['update_image']['name']);
	$upload_reslult = move_uploaded_file($_FILES['update_image']['tmp_name'], $target_file);
	$query = "UPDATE products SET product_name = '".$product_name."', product_type='".$product_type."', product_date='".$product_date."', archive_date='".$archive_date."', product_company='".$product_company."', sales_department='".$sales_department."', brief_desc='".$desc."', price='".$price."', image_name='".$imageName."' where id='".$id."'";
}
else{
	$query = "UPDATE products SET product_name = '".$product_name."', product_type='".$product_type."', product_date='".$product_date."', archive_date='".$archive_date."', product_company='".$product_company."', sales_department='".$sales_department."', brief_desc='".$desc."', price='".$price."' where id='".$id."'";
}

$result = mysql_query($query);
header("Location: index.php");

?>