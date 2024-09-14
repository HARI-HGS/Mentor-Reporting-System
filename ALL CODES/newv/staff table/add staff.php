<?php
$conn = mysqli_connect("localhost", "root", "", "test");
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $department = $_POST["department"];
  $education = $_POST["education"];
  $phone = $_POST["phone"];
  $staffid = $_POST["staffid"];
  $pass = $_POST["pass"];

  // Upload timetable PDF file
  $timetableName = $_FILES["timetable"]["name"];
  $timetableSize = $_FILES["timetable"]["size"];
  $timetableTmpName = $_FILES["timetable"]["tmp_name"];
  $timetableExtension = pathinfo($timetableName, PATHINFO_EXTENSION);
  $timetableNewName = uniqid() . '.' . $timetableExtension;
  move_uploaded_file($timetableTmpName, 'login/staff profile/verify/meenties/db image and doc/time table/' . $timetableNewName);

  // Upload readmore PDF file
  $readmoreName = $_FILES["readmore"]["name"];
  $readmoreSize = $_FILES["readmore"]["size"];
  $readmoreTmpName = $_FILES["readmore"]["tmp_name"];
  $readmoreExtension = pathinfo($readmoreName, PATHINFO_EXTENSION);
  $readmoreNewName = uniqid() . '.' . $readmoreExtension;
  move_uploaded_file($readmoreTmpName, 'login/staff profile/verify/meenties/db image and doc/read more/' . $readmoreNewName);
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'login/staff profile/verify/meenties/db image and doc/staff image/' . $newImageName);
      $query = "INSERT INTO stafftable VALUES('', '$name','$email','$department', '$newImageName','$timetableNewName','$readmoreNewName','$education','$phone','$staffid','$pass' )";
      mysqli_query($conn, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'admin data.php';
      </script>
      ";
    }
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
    <link rel="stylesheet" href="add staff style.css" />
  </head>
  <body>
    <section class="container">
      <header>Add new staff</header>
      <form class="form" action="" method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="input-box">
        <label for="name"><p>Name :</p> </label>
        <input type="text" name="name" id = "name" placeholder="Enter the Staff name" required value=""> <br></div>

        <div class="input-box">
          <label for="name"><p>Mail : </p></label>
          <input type="email" name="email" id = "email" placeholder="Enter your email" required value=""> <br></div>
        
          <div class="column">
            <div class="input-box">
              <label for="phone"><p>Phone NO : </p></label>
              <input type="number" name="phone" id ="phone" placeholder="Enter your phone no" required value=""> 
            </div>
            <div class="input-box">
              <label for="name"><p>Department : </p></label>
              <input type="text" name="department" id = "department" placeholder="Enter the Department" required value="">
            </div>
            <div class="input-box">
              <label for="name"><p>Education : </p></label>
              <input type="text" name="education" id = "education" placeholder="Enter the education" required value=""> 
            </div>
          </div>

          <div class="column">
            <div class="input-box">
              <label for="name"><p>Staff ID : </p></label>
              <input type="text" name="staffid" id = "staffid" placeholder="Enter your ID" required value=""> 
            </div>

          <div class="input-box">
            <label for="name"><p>Password : </p></label>
            <input type="text" name="pass" id = "pass" placeholder="Enter the password" required value=""> </div></div><br>

            
            <div class="file-input">
            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" onchange="updateFileName('image','file-name')">
            <label for="image">Image : </label>
            <label for="image" class="file-input-label">Select file</label><br>
            <span class="file-input-name" id="file-name">No file selected</span>
            </div>
            <div class="file-input">
            <input type="file" name="timetable" id="timetable" accept=".pdf" onchange="updateFileName('timetable','file-name1')">
            <label for="timetable">Time table :  </label>
            <label for="timetable" class="file-input-label">Select file</label><br>
            <span class="file-input-name" id="file-name1">No file selected</span>
            </div>

            <div class="file-input">
              <input type="file" name="readmore" id="readmore" accept=".pdf" onchange="updateFileName('readmore','file-name2')">
              <label for="readmore">Read More :  </label>
              <label for="readmore" class="file-input-label">Select file</label><br>
              <span class="file-input-name" id="file-name2">No file selected</span>
              </div>
           

        <button type="submit" name="submit" value="submit">submit</button>
        
      </form>
    </section>

    <script>
      function updateFileName(name1, name2) {
        var fileInput = document.getElementById(name1);
        var fileNameSpan = document.getElementById(name2);
        fileNameSpan.textContent = fileInput.files[0].name;
      }
    </script>
  </body>
</html>
