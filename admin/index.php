<?php require 'db_config.php';
    $query="SELECT * FROM care_giver_users";
    $returnvalue=$pdo->query($query);
    $table=$returnvalue->fetchAll();
	$rc = $returnvalue->rowcount();


	$query1="SELECT * FROM os_users";
    $returnvalue1=$pdo->query($query1);
    $table1=$returnvalue1->fetchAll();
	$rc1 = $returnvalue1->rowcount();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>CVER | Admin Panel</title>
</head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css">
    <title>Admin Panel</title>
<body>
<div class="side-menu">
        <div class="brand-name">
            <h1>cHelp</h1>
        </div>
        <ul>
			<a href="index.php"><li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li></a>
            <a href="request_approval_caregiver.php"><li><img src="reading-book (1).png" alt="">&nbsp; <span>Care Giver Request Approval</span> </li></a>
            <a href="cg_hiring_list.php"><li><img src="teacher2.png" alt="">&nbsp; <span>Care Giver Hire List</span> </li></a>
            <a href="request_approval_os.php"><li><img src="school.png" alt="">&nbsp; <span>Oxygen Request Approval</span> </li></a>
            <a href="../index.php"><li><img src="settings.png" alt="">&nbsp; <span>Logout</span> </li></a>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1><?php echo $rc ?></h1>
                        <h3>Care Giver</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1><?php echo $rc1; ?></h1>
                        <h3>Oxygen Service</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Organization</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Balance</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Care Giver List</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Experience</th>
                            <th>Address</th>
                            <th>Option</th>
                        </tr>
						<?php foreach($table as $row){ ?>
                        <tr>
                            <td><?php echo $row['cg_username'] ?></td>
                            <td><?php echo $row['cg_phone'] ?></td>
                            <td><?php echo $row['cg_experience'] ?> Years</td>
                            <td><?php echo $row['cg_address'] ?></td>
                            <td><a href="request_approval_caregiver.php" class="btn">Details</a></td>
                        </tr>
						<?php } ?>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>Oxygen Supplier</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Info</th>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>Name. Demo</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>Name. Demo</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>JName. Demo</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>Name. Demo</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>  
	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

