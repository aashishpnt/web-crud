<?php include('dbconnection.php') ?>

<?php
// Check if the form is submitted
if(isset($_POST['signup'])) 
{
  // Get the user input from the form
  $s_username = $_POST["s_username"];
  $s_password = $_POST["s_password"];
  $stmt = $conn->prepare("insert into `users`(username, password) values(?, ?)");
  $stmt->bind_param("ss", $s_username, $s_password);
  $execval = $stmt->execute();
  $stmt->close();
  header("Location: index.php");

// $s_username = $_POST["s_username"];
// $s_password = $_POST["s_password"];

// $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
// $stmt->bind_param("ss", $s_username, $s_password); // "ss" represents two string parameters

// if ($stmt->execute()) {
//     echo "Record inserted successfully.";
// } else {
//     echo "Error: " . $stmt->error;
// }

// $stmt->close();



}
?>