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