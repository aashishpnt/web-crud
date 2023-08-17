<?php include('header.php'); ?>
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
		

			$query = "delete from `Employee` where `id` = '$id'";

			$result = mysqli_query($conn,$query);

			if(!$result){
				die("Query Failed".mysqli_error());
			}
			else{
				header('location:employee.php?e_delete_msg=DELETED SUCCESSFULLY!');
			}
		}
	?>


<?php include('footer.php'); ?>