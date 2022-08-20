<?php
	require 'connect.php';
	
	if(ISSET($_POST['save'])){
		if($_FILES['file']['name']){
			$filename = explode(".", $_FILES['file']['name']);
			if($filename[1] == 'csv'){
				$handler = fopen($_FILES['file']['tmp_name'], "r");
				while($data = fgetcsv($handler)){
					$conn->query("INSERT INTO `member` (firstname, lastname, address, mohmmed, hussien) 
VALUES('$data[0]', '$data[1]', '$data[2]','$data[3]', '$data[4]')");
				}
				
				fclose($handler);
			}
		}
		
		header('location:index.php');
		
	}
?>