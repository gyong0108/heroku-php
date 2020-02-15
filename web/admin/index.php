<?php

include("db_connect.php");

require("adminHeader.php");
$query = "SELECT * FROM products";
$result = mysql_query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | HealthyLife</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	
	<style>
		table{
			width:100%;
			margin:auto;
		}
		#tableContainer{
			width:80%;
			margin: auto;
			margin-top: 50px;
		}

		#btn_add{
			z-index: 10;
			position: absolute;
			margin-left: 50%;
			color:white;
		}
		@media only screen and (max-width:600px){
			table{
				width:60%;
				margin:auto;
			}

			#tableContainer{
				width:40%;
				margin: auto;
				margin-top: 50px;
			}
			#btn_add{
				z-index: 10;
				position: absolute;
				color:white;
			}
		} 
	</style>
	<script>
		$(document).ready(function() {
		    $('#example').DataTable();
		} );
	</script>
</head>
<body>

<div id="tableContainer">
	<button id="btn_add" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Add New</button>
	<table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
            	<th>Image Preview</th>
                <th>Product Name</th>
                <th>Product Type</th>
                <th>Production Date</th>
                <th>Archive Date</th>
                <th>Produced Company</th>
                <th>Sales Department</th>
                <th>Price</th>
                <th>Upload Date</th>
                <th>Edit/Delete</th>
            </tr>
        </thead>
        <tbody>
<?php
while($row = mysql_fetch_array($result)){
?>
            <tr>
            	<td><img src="../images/<?php echo $row[9] ?>" style="height:60px;width:60px;"></td>
                <td><?php echo $row[1] ?></td>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $row[3] ?></td>
                <td><?php echo $row[4] ?></td>
                <td><?php echo $row[5] ?></td>
                <td><?php echo $row[6] ?></td>
                <td><?php echo $row[8] ?></td>
                <td><?php echo $row[10] ?></td>
                <td><div class="btn-group">
                    <form action="editView.php" method="post">
                        <input type="hidden" name="edit" value="<?php echo $row[0]; ?>">
                	   <button type="submit" class="btn btn-info" name="btn_edit">Edit</button>
                    </form>
  					<button type="button" name="btn_delete" class="btn btn-danger" id="<?php echo $row['id']; ?>">Delete</button>
                </div></td>
            </tr>
<?php
}
?>           
        </tbody>
        <tfoot>
            <tr>
                <th>Image Preview</th>
                <th>Product Name</th>
                <th>Product Type</th>
                <th>Production Date</th>
                <th>Archive Date</th>
                <th>Produced Company</th>
                <th>Sales Department</th>
                <th>Price</th>
                <th>Upload Date</th>
                <th>Edit/Delete</th>
            </tr>
        </tfoot>
    </table>
</div>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Products</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id="add_product_area" style="width:80%;margin: auto;">
        	<form action="addProduct.php" method="post" enctype="multipart/form-data">
        		<label>Product Name:</label>
        		<input type="text" name="product_name" id="product_name" class="form-control">
        		<label>Product Type:</label>
        		<input type="text" name="product_type" id="product_type" class="form-control">
        		<label>Produced Date:</label>
        		<input type="date" name="product_date" id="product_date" class="form-control">
        		<label>Archive Date:</label>
        		<input type="date" name="archive_date" id="archive_date" class="form-control">
        		<label>Product Company:</label>
        		<input type="text" name="product_company" id="product_company" class="form-control">
        		<label>Sales Department:</label>
        		<input type="text" name="sales_department" id="sales_department" class="form-control">
        		<label>Price:</label>
        		<input type="text" name="price" id="price" class="form-control">
        		<label>Description:</label>
        		<textarea name="brief_desc" id="brief_desc" class="form-control"></textarea>
        		<label>Product Image:</label>
        		<input type="file" name="product_image" id="product_image" class="form-control">
        	
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Add</button>
        </form>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        $("button[name='btn_delete']").click(function(){
            var id = $(this).attr('id');
            if (confirm('The data will be permanently removed. Are you sure?')) {
                $.ajax({
                    url: "deleteProduct.php",
                    method:"POST",
                    data: {
                        id: id,
                    },
                    success: function(){
                        window.location = "index.php";
                    },
                });
            }
        });

    });
</script>
</body>
</html>