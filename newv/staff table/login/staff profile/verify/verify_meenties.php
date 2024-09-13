<?php
// Connect to the meenties database
$conn = mysqli_connect('localhost', 'root', '', 'meenties');

// Check if the form has been submitted
if(isset($_POST['submit'])){
    // Get the Meenties ID entered by the user
    $user_meenties_id = $_POST['meenties_id'];

    // Retrieve the Meenties ID from the database
    $sql = "SELECT id FROM meentor_id WHERE meentor_id='$user_meenties_id'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        // If the Meenties ID is correct, redirect the user to the corresponding page
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];

        switch($id){
            case 1:
                $next_page="meenties/meenties1.php";
                break;
            case 2:    
                $next_page="meenties/meenties2.php";
                break;
            case 3:    
                $next_page="meenties/meenties3.php";
                break;
            case 4:    
                $next_page="meenties/meenties-page-4.php";
                break;
            // Add additional cases for other IDs if needed
            default:
                echo "Invalid ID";
                exit();
        }

        header("Location:$next_page?id=$id");
        exit();
    }
    else{
        // If the Meenties ID is incorrect, display an error message
        echo "Invalid Meenties ID";
    }
}
?>


<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form in HTML CSS</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="verify_meenties style.css" />
  </head>
  <body>
    <section class="container">
      <header>Meenties ID</header>

<!-- HTML form to enter the Meenties ID -->
<form class="form" name="meenties_form" method="POST">
<div class="input-box">
<label for="name"><p>Enter your Meenties ID:</p> </label>

    <input type="text" name="meenties_id" required></div>
    <button type="submit" name="submit" value="submit">Submit</button>
</form></section>
