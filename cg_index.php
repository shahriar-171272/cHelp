<!DOCTYPE html>
<html>
<head>
	<title>CVER | Homepage</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

	<?php require 'navigation_bar.php' ?>

	<div class="container">
		<div class="requirements">
			<h3 class="text-center">Requirements for Applying in Care Giver</h3>
			
			<div style="margin-left: 27%;">
				<ol>
					<li>
						<p style="font-weight: 700;color: red;">This candidate must complete his/her SSC examination</p>
					</li>

					<li>
						<p style="font-weight: 700;color: red;">Must be of age 18+</p>
						
					</li>

					
				</ol>
			</div>
		</div>
               <div class="registration_form">
			<h3 class="text-center">Registration Form</h3>
			<form action="registration_backend.php" method="POST" enctype="multipart/form-data">
				
			  <div class="row">
			    <div class="col">
			      <label>Name:</label>
			      <input type="text" class="form-control" placeholder="Enter name" name="name">
			    </div>

			    <div class="col">
			      <label>Email:</label>
			      <input type="email" class="form-control" placeholder="Enter email" name="email">
			    </div>

			    <div class="col">
			      <label>Date of Birth:</label>
			      <input type="date" class="form-control" placeholder="Enter Birth date" name="dob">
			    </div>
			  </div>
            <div class="row mt-4">
			    <div class="col">
			      <label>Phone Number:</label>
			      <input type="text" class="form-control" placeholder="Enter phone number" name="phone">
			    </div>

			    <div class="col">
			      <label>NID:</label>
			      <input type="text" class="form-control" placeholder="Enter NID no." name="nid">
			    </div>

			    <div class="col">
			      <label>Address:</label>
			      <input type="text" class="form-control" placeholder="Enter Address" name="address">
			    </div>
			  </div>
			 <div class="row mt-4">
			    <div class="col">
			      <label>Blood Group:</label>
			      <select class="form-control" name="blood_group">
			      	  <option >--Select Group--</option>
			      	  <option value="AB+">AB+</option>
					  <option value="AB-">AB-</option>
					  <option value="A+">A+</option>
					  <option value="A-">A-</option>
					  <option value="B+">B+</option>
					  <option value="B-">B-</option>
					  <option value="O+">O+</option>
					  <option value="O-">O-</option>
					</select>
			    </div>
				<div class="col">
			      <label>Years of Experience in Nursing:(if any)</label>
			      <input type="number" class="form-control" placeholder="Enter your experience" name="experience">
			    </div>

			    
			  </div>

			  <div class="row mt-4">

			  	<div class="col">
			      <label>Resume or CV:</label>
			      <input type="file" class="form-control" name="fileToUpload">

			      <?php 
				if(isset($_GET['msg']))
			      	{
			      ?>	

			      <span style="color: red;font-weight: 700;">Please insert PDF file only</span>

			      <?php 
			      	}

			      ?>
			    </div>

			  	<div class="col">
			      <label>Profile Picture:</label>
			      <input type="file" class="form-control" name="fileToUploadpicture">

			      <?php 
					if(isset($_GET['msg']))
			      	{
			      ?>	

			      <span style="color: red;font-weight: 700;">Please insert PICTURE file only</span>

			      <?php 
			      	}

			      ?>
			    </div>
			  </div>
			
			</div>


