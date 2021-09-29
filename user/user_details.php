<html>
<head>
	<title>CVER | User Panel</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

	<?php require 'navigation_bar.php' ?>

	<?php require 'data_collection.php' ?>

	<?php
		session_start();

		$user=$_SESSION['user'];



		if(isset($_GET['id']))
		{
			$cg_id=$_GET['id'];


			$sql="Select * FROM care_giver_users where id = '$cg_id';";
		    $result = mysqli_query($db,$sql);
		    $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
		}

	?>
	

<?php
	
	session_start();
	$user=$_SESSION['user'];
	

	if(isset($_POST['btn-proceed_payment']))
	{

		$cylinder_table_id = $_POST['id'];
		$user_id = $user['id'];
		$os_id = $_POST['os_id'];
		$cylinder_name = $_POST['cylinder_name'];
		$type = $_POST['type'];
		$price = $_POST['price'];
		$address = $_POST['address'];
		$quantity = $_POST['quantity'];

		$total_price =(int)$quantity * (int)$price;
	}
?>



<?php 
	require '../db_config.php';

	if (isset($_GET['id'])) {

		$id = $_GET['id'];
		$sql="select * from cylinder where id = '$id'";

		$result = mysqli_query($db,$sql);
		$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
		    
	}


?>
	