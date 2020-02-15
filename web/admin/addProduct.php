<?php

include("db_connect.php");

$product_name = $_POST['product_name'];
$product_type = $_POST['product_type'];
$product_date = $_POST['product_date'];
$archive_date = $_POST['archive_date'];
$product_company = $_POST['product_company'];
$sales_department = $_POST['sales_department'];
$price = $_POST['price'];
$desc = $_POST['brief_desc'];
$imageName = $_FILES['product_image']['name'];
$upload_date = date("Y-m-d");

$target_dir = "../images/";
$target_file = $target_dir.basename($_FILES['product_image']['name']);
$upload_reslult = move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file);
$query = "INSERT INTO products (product_name, product_type, product_date, archive_date, product_company, sales_department, brief_desc, price, image_name, upload_date) VALUES ('".$product_name."', '".$product_type."', '".$product_date."', '".$archive_date."', '".$product_company."', '".$sales_department."', '".$desc."', '".$price."', '".$imageName."', '".$upload_date."')";
$result = mysql_query($query);
header("Location: index.php");
?>