<?php
include("db_connect.php");
$id = $_POST['id'];

$query = "DELETE from products where id='".$id."'";
$result = mysql_query($query);

?>