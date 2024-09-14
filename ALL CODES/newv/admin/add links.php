<?php
$conn = mysqli_connect("localhost", "root", "", "test");
if(isset($_POST["submit"])){
  $link = $_POST["link"];
  $name = $_POST["name"];
 
      $query = "INSERT INTO youtube VALUES('', '$link','$name')";
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
      <header>Add Youtube</header>
      <form class="form" action="" method="post" autocomplete="off" enctype="multipart/form-data">
      <div class="column">
        <div class="input-box">
        <label for="link"><p>Link :</p> </label>
        <input type="text" name="link" id = "link" placeholder="Enter the link" required value=""> </div>
        <div class="input-box">
        <label for="name"><p>Name :</p> </label>
        <input type="text" name="name" id = "name" placeholder="Enter the name" required value=""> </div></div>

        

        <button type="submit" name="submit" value="submit">submit</button>
        
      </form>
    </section>

    
  </body>
</html>
