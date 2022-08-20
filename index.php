<!DOCTYPE HTML>
<?php
	require 'connect.php';
?>

<html lang = "en">
	<head>
		<title>PHP - How To Upload CSV Data Into MySQLi</title>
		<meta charset = "UTF-8" name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css"/>
        <link rel="stylesheet"  type="text/css" href="css/dataTables.bootstrap.css">
	</head>
	
<body>
	<nav class = "navbar navbar-default">
		<div class = "container-fluid">
			<a class = "navbar-brand" href = "https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class = "col-md-3"></div>
	<div class = "col-md-6 well">
		<h3 class = "text-primary">PHP - How To Upload CSV Data Into MySQLi</h3>
		<hr style = "border-top:1px dotted #000;"/>
		<form action = "upload.php" class = "form-inline" method = "POST" enctype = "multipart/form-data">
			<div class = "form-group">
				<label>CSV File: <input type = "file" name = "file" class = "form-control"/></label>
				<button type = "submit" name = "save" class = "btn btn-primary form-control"><span
                            class = "glyphicon glyphicon-upload"></span> UPLOAD</button>
			</div>
		</form>
		<br />
		<table id = "table" class = "table table-bordered">
			<thead>
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Address</th>
                    <th>mohmmed</th>
                    <th>hussien</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = $conn->query("SELECT * FROM `member`");
					while($fetch = $query->fetch_array()){
				?>
				<tr>
					<td><?php echo $fetch['firstname']?></td>
					<td><?php echo $fetch['lastname']?></td>
					<td><?php echo $fetch['address']?></td>
                    <td><?php echo $fetch['mohmmed']?></td>
                    <td><?php echo $fetch ['hussien']?></td>
				</tr>
				<?php	
					}
				?>
			</tbody>
		</table>
	</div>
</body>
<script src = "js/jquery-3.2.1.js"></script>
<script src = "js/jquery.dataTables.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	});
</script>
</html>