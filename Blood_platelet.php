<?php require 'db_config.php';
    $query="SELECT * FROM blood_platelet_donor";
    $returnvalue=$pdo->query($query);
    $table=$returnvalue->fetchAll();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Platelet Donor List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php require 'navigation_bar.php' ?>
    <div class="container">
    <h2 style="text-align: center; Margin-top: 20px; Margin-bottom: 30px;">Blood Platelet Donor List</h2>
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Blood Group</th>
        <th scope="col">Status</th>
        </tr>
    </thead>
<?php foreach($table as $row){ ?>
    <tbody>
        <tr>
        <th scope="row"><?php echo $row['name'] ?></th>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['blood group'] ?></td>
        <?php if($row['STATUS']=='1'){ ?>
        <td>Active</td>
        <?php } 
        else
        { ?>
        <td>Inactive</td>
        <?php     
        }
        ?>
        </tr>
    </tbody>
    <?php
       }
    ?>
    </table>
   </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>