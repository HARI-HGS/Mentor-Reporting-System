<?php
  $conn = mysqli_connect("localhost", "root", "", "test");
  $id = $_POST['id'];
  $query = "DELETE FROM placed WHERE id = '$id'";
  mysqli_query($conn, $query);
  header("Location: index.php");
?>