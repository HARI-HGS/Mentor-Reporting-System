<?php
  $conn = mysqli_connect("localhost", "root", "", "test");
  $id = $_POST['id'];
  $query = "DELETE FROM stafftable WHERE id = '$id'";
  mysqli_query($conn, $query);
  header("Location: admin data.php");
?>
