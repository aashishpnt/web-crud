
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
  header("Location: index.php"); // Redirect to login page if not logged in
  exit;
}
?>

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
            <a class="nav-link" href="logout.php">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>




  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center mb-4">Select the Option to Perform CRUD Operation</h2>
        <div class="d-grid gap-3">
          <a href="company/company.php" class="btn btn-primary btn-lg">CRUD on Company Detail</a>
          <a href="employee/employee.php" class="btn btn-success btn-lg">CRUD on Employee Detail</a>
        </div>
      </div>
    </div>
  </div>

<!-- <a href="logout.php" class="btn btn-danger">Logout</a>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2>Select the Option to Perform CRUD Operation</h2>
      <div class="d-grid gap-2">
        <a href="company/company.php" class="btn btn-primary btn-lg mb-3">CRUD on Company Detail</a>
        
        <a href="employee/employee.php" class="btn btn-success btn-lg">CRUD on Employee Detail</a>
      </div>
    </div>
  </div>
</div> -->

<?php include('footer.php'); ?>