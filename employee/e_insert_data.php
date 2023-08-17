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

include '../dbconnection.php';

if (isset($_POST['add_employee'])) 
{
	$e_name = $_POST['e_name'];
	$e_salary = $_POST['e_salary'];
	$e_dob = $_POST['e_dob'];
	$e_company = $_POST['e_company'];
	echo($e_name);
	echo($e_salary);
	echo($e_dob);
	echo($e_company);
	echo "aaxa ata ta2";
	$query = "insert into `Employee`(`name`,`salary`,`dateOfBirth`,`company`)values('$e_name','$e_salary','$e_dob','$e_company')";
	echo "aaxa ata ta3";

	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	$result =mysqli_query($conn,$query);
	echo "aaxa ata ta4";
	if(!$result)
	{
		die("Query Failed".mysqli_error());
	}
	else
	{
		header('location:employee.php?e_insert_msg=YOUR DATA HAS BEEN ADDED SUCCESSFULLY!');
	}
}

?>

<div class="container">
	<div class="row justify-content-center">
		<form id="e_form" action="e_insert_data.php" method="post" class="col-lg-4 col-md-6 col-sm-8 mx-auto">
			<h1>Create New Employee</h1>
			<div class="mb-3">
				<label for="e_name" class="form-label">Name</label>
				<input type="text" class="form-control" id="e_name" name="e_name">
			</div>
			<div class="mb-3">
				<label for="e_salary" class="form-label">Salary</label>
				<input type="number" class="form-control" id="e_salary" name="e_salary">
			</div>
						<div class="mb-3">
				<label for="e_dob" class="form-label">Date of Birth</label>
				<input type="Date" class="form-control" id="e_dob" name="e_dob">
			</div>
						<div class="mb-3">
				<label for="e_company" class="form-label">Company</label>
				<input type="text" class="form-control" id="e_company" name="e_company">
			</div>
			<div id="e_error" style="color: red;"></div>
			<button type="submit" class="btn btn-primary" name="add_employee">ADD EMPLOYEE</button>
		</form>
	</div>
</div>


<?php include('footer.php'); ?>