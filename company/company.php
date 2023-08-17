<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
	<!-- <h1 id="main_title">CRUD app in PHP</h1> -->
	<!-- <div class="container"> -->
		  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">CRUD Operations</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="../dashboard.php">DashBoard</a>
          </li>
          <li>
          	<a class="nav-link" href="../logout.php">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


 	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">
				<div class="box1">
					<h2>Company Detail</h2>
				</div>
			</div>
			<div class="col-md-6 text-md-end mt-md-0 mt-3">
				<a href="insert_data.php" class="btn btn-primary">CREATE NEW COMPANY</a>
			</div>
		</div>
	</div>


		<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
					<?php

					if(isset($_GET['insert_msg'])){
						echo "<h6 >".htmlspecialchars($_GET['insert_msg'])."</h6>";
					}
					?>

					<?php
						if(isset($_GET['update_msg'])){
							echo "<h6>".htmlspecialchars($_GET['update_msg'])."</h6>";
						}
					?>

					<?php

						if(isset($_GET['delete_msg'])){
							echo "<h6>".htmlspecialchars($_GET['delete_msg'])."</h6>";
						}

					?>
			</div>
		</div>
	</div>



<?php include('../dbconnection.php') ?>


<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
  header("Location: ../index.php"); // Redirect to login page if not logged in
  exit;
}
?>

<table class="table table-hover table-">
	<thead>
		<tr>
			<th>Company</th>
			<th>Address</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$query = "select * from company";

			$result = mysqli_query($conn, $query);

			if(!$result){
				die("query Failed".mysqli_error());
			}
			else{
				while($row = mysqli_fetch_assoc($result)){
					?>
						<tr>
							<td> <?php echo $row['companyName']; ?> </td>
							<td> <?php echo $row['address']; ?> </td>
							<td><a href="c_update_page.php?id=<?php echo $row['id']; ?> " class="btn btn-success">Update</a></td>
							<td><a href="c_delete_page.php?id=<?php echo $row['id']; ?> " class="btn btn-danger">Delete</a></td>
						</tr>

					<?php
				}
			}

		 ?>
	</tbody>
</table>



<?php include('footer.php'); ?>