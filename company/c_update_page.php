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
          	<a class="nav-link" href="company.php">company</a>
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

		$query = "select * from company where `id` = '$id' ";

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


	if(isset($_POST['update_company']))
	{
		if(isset($_GET['id_new']))
		{
			$id_new = $_GET['id_new'];
		}

		$c_name = $_POST['c_name'];
		$c_address = $_POST['c_address'];


		$query = "update company set `companyName`='$c_name', `address` ='$c_address' where `id`= '$id_new'";

		$result = mysqli_query($conn, $query);

		if(!$result)
		{
			die("query Failed".mysqli_error());
		}
		else
		{
			header('location:company.php?update_msg=UPDATED SUCCESSFULLY!');;
			exit();
		}
	}


?>

		<div class="container">
	<form action="c_update_page.php?id_new=<?php echo $id; ?>" method="post">
	  <div class="mb-3">
	    <label for="c_name" class="form-label" >Company Name</label>
	    <input type="text" class="form-control" name="c_name" value="<?php echo $row['companyName'] ?>">
	  </div>
	  <div class="mb-3">
	    <label for="c_address" class="form-label">Address</label>
	    <input type="text" class="form-control" name="c_address" value="<?php echo $row['address'] ?>">
	  </div>
	  <button type="submit" class="btn btn-primary" name="update_company">UPDATE</button>
	</form>
	</div>





<?php include('footer.php'); ?>