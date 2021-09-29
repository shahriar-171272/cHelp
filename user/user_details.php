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
	<html>
<head>
	<title>CVER | User</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

	<?php require 'navigation_bar.php' ?>
	
	<div class="container">
	
		<h3 class="text-center mt-5">Cylinder Information</h3>
		<div class="registration_form mt-5">
			
			<form action="payment.php" method="POST">
				<input type="hidden" name="id" value="<?= $id ?>">
				<input type="hidden" name="os_id" value="<?= $data['os_id'] ?>">
				<input type="hidden" name="cylinder_name" value="<?= $data['cylinder_name'] ?>">
				<input type="hidden" name="type" value="<?= $data['type'] ?>">
				<input type="hidden" name="price" value="<?= $data['price'] ?>">

			  <div class="row">

			  	<div class="col">
			      <label>Cylinder name:</label>
			      <input type="text" class="form-control" value="<?= $data['cylinder_name'] ?>" disabled>
			    </div>

			    <div class="col">
			      <label>Cylinder Type:(litre)</label>
			   
			      	  <input type="text" class="form-control"  value="<?= $data['type'] ?>" disabled>
			    </div>

			    <div class="col">
			      <label>Quantity:</label>
			      <input type="number" class="form-control" value="<?= $data['quantity'] ?>" disabled>
			    </div>

			    <div class="col">
			      <label>Price:</label>
			      <input type="number" class="form-control" value="<?= $data['price'] ?>" disabled>
			    </div>

			    
			  	
			  </div>
			
				<div class="row mt-2">
					

				    <div class="col">
				      <label>Address:</label>
				      <input type="text" class="form-control" name="address" required >
				    </div>

				    <div class="col">
				      <label>Quantity:</label>
				      <input type="number" class="form-control" name="quantity" min="1" max="<?= $data['quantity']; ?>" required >
				    </div>


				</div>



			    
			  <button class="btn btn-outline-success mt-3" type="submit" name="btn-proceed_payment">Order</button>
			  <a href="order_cylinder.php" class="btn btn-outline-dark mt-3">Back</a>


			</form>
			
		</div>
	</div>


	
	<?php require 'footer.php' ?>
	