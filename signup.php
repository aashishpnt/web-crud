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
            <a class="nav-link" href="index.php">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- below is form-->

<div class="container">
  <div class="row justify-content-center"> <!-- This class will center its children horizontally -->
    <form id="signup_form" action="signup_push.php" method="post" class="col-lg-4 col-md-6 col-sm-8">
      <h1 id="login_form_title">Sign Up Here</h1>
      <!-- 
        The classes 'col-lg-4 col-md-6 col-sm-8' will set the form width to a reasonable size
        on different screen sizes (large, medium, and small).
      -->
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="s_username" name="s_username">
        <div id="u_signup_error" style="color: red;"></div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="s_password" name="s_password">
        <div id="p_signup_error" style="color: red;"></div>
      </div>
      <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
    </form>

  </div>
  
</div>


<?php include('footer.php'); ?>

