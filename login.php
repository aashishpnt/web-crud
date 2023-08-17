<?php include('dbconnection.php') ?>


<?php
// Check if the form is submitted
if(isset($_POST['login'])) 
{
  // Get the user input from the form
  $username = $_POST["username"];
  $password = $_POST["password"];




  $sql = "SELECT * FROM users WHERE username = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) 
  {
    // If the user is found in the database, verify the password
    $row = $result->fetch_assoc();
    if ($password == $row["password"]) {
      // Authentication successful, set session variables, etc.
      // For example, you can use $_SESSION["username"] to store the username for future use.
      session_start();
      $_SESSION["username"] = $username;
      header("Location: dashboard.php"); // Redirect to the dashboard or protected area
      exit;
    } else {
      // Password is incorrect
      header('location:index.php?invalid_password_msg=INVALID PASSWORD!');
    }
  } else {
    // User not found
    header('location:index.php?no_user_msg=USER NOT FOUND!');
  }

}
?>
