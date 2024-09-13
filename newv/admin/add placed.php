<?php
$conn = mysqli_connect("localhost", "root", "", "test");
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $company = $_POST["company"];
  $lpa = $_POST["lpa"];
 
      $query = "INSERT INTO placed VALUES('', '$name','$company','$lpa')";
      mysqli_query($conn, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'index.php';
      </script>
      ";
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
    <link rel="stylesheet" href="add item style.css" />
  </head>
  <body>
    <section class="container">
      <header>Add Placed</header>
      <form class="form" action="" method="post" autocomplete="off" enctype="multipart/form-data">
      <div class="column">
        <div class="input-box">
        <label for="name"><p>Name :</p> </label>
        <input type="text" name="name" id = "name" placeholder="Enter the news" required value=""></div>
        <div class="input-box">
        <label for="company"><p>Company :</p> </label>
        <input type="text" name="company" id = "company" placeholder="Enter the news" required value=""></div>
        <div class="input-box">
        <label for="lpa"><p>lpa :</p> </label>
        <input type="number" name="lpa" id = "lpa" placeholder="Enter the news" required value=""></div></div>

        

        <button type="submit" name="submit" value="submit">submit</button>
        
      </form>
    </section>

    
  </body>
</html>
