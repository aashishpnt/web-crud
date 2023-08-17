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
          <li>
          	<a class="nav-link" href="employee.php">employee</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>





<?php include('../dbconnection.php') ?>

<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
  header("Location: ../index.php"); // Redirect to login page if not logged in
  exit;
}
?>

	<?php 
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$query = "select * from Employee where `id` = '$id' ";

			$result = mysqli_query($conn, $query);

			if(!$result){
				die("query Failed".mysqli_error());
			}
			else{
				$row = mysqli_fetch_assoc($result);
			}	
		}
	?>


	<?php


		if(isset($_POST['update_employee']))
		{
			if(isset($_GET['id_new']))
			{
				$id_new = $_GET['id_new'];
			}

			$e_name = $_POST['e_name'];
			$e_salary = $_POST['e_salary'];
			$e_dob = $_POST['e_dob'];
			$e_company = $_POST['e_company'];



			$query = "update Employee set `name`='$e_name', `salary` ='$e_salary', `dateOfBirth`= '$e_dob', `company`= '$e_company' where `id`= '$id_new'";

			$result = mysqli_query($conn, $query);

			if(!$result)
			{
				die("query Failed".mysqli_error());
			}
			else
			{
				header('location:employee.php?e_update_msg=UPDATED SUCCESSFULLY!');;
				exit();
			}
		}


	?>



	  	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<form action="e_update_page.php?id_new=<?php echo $id; ?>" method="post">
					<h1 class="text-center">Update Employee</h1>
					<div class="mb-3">
						<label for="e_name" class="form-label">Name</label>
						<input type="text" class="form-control" id="e_name" name="e_name" value="<?php echo $row['name'] ?>">
					</div>
					<div class="mb-3">
						<label for="e_salary" class="form-label">Salary</label>
						<input type="number" class="form-control" id="e_salary" name="e_salary" value="<?php echo $row['salary'] ?>">
					</div>
					<div class="mb-3">
						<label for="e_dob" class="form-label">Date of Birth</label>
						<input type="Date" class="form-control" id="e_dob" name="e_dob" value="<?php echo $row['dateOfBirth'] ?>">
					</div>
					<div class="mb-3">
						<label for="e_company" class="form-label">Company</label>
						<input type="text" class="form-control" id="e_company" name="e_company" value="<?php echo $row['company'] ?>">
					</div>
					<button type="submit" class="btn btn-primary d-grid mx-auto" name="update_employee">UPDATE</button>
				</form>
			</div>
		</div>
	</div>

<?php include('footer.php'); ?>