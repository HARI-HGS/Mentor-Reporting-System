<?php
$conn = mysqli_connect("localhost", "root", "", "meentiesname");
if(isset($_POST["submit"])){

  $image1 = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
  $name1 = mysqli_real_escape_string($conn, $_POST["name1"]);
  $cse1 = mysqli_real_escape_string($conn, $_POST["cse1"]);
  $gender1= mysqli_real_escape_string($conn, $_POST["gender1"]);
  
  $image2 = addslashes(file_get_contents($_FILES['image2']['tmp_name']));
  $name2 = mysqli_real_escape_string($conn, $_POST["name2"]);
  $cse2 = mysqli_real_escape_string($conn, $_POST["cse2"]);
  $gender2= mysqli_real_escape_string($conn, $_POST["gender2"]);
  
  // Additional data for 18 more individuals
  $image3 = addslashes(file_get_contents($_FILES['image3']['tmp_name']));
  $name3 = mysqli_real_escape_string($conn, $_POST["name3"]);
  $cse3 = mysqli_real_escape_string($conn, $_POST["cse3"]);
  $gender3= mysqli_real_escape_string($conn, $_POST["gender3"]);
  
  $image4 = addslashes(file_get_contents($_FILES['image4']['tmp_name']));
  $name4 = mysqli_real_escape_string($conn, $_POST["name4"]);
  $cse4 = mysqli_real_escape_string($conn, $_POST["cse4"]);
  $gender4= mysqli_real_escape_string($conn, $_POST["gender4"]);
  
  $image5 = addslashes(file_get_contents($_FILES['image5']['tmp_name']));
  $name5 = mysqli_real_escape_string($conn, $_POST["name5"]);
  $cse5 = mysqli_real_escape_string($conn, $_POST["cse5"]);
  $gender5= mysqli_real_escape_string($conn, $_POST["gender5"]);
  
  $image6 = addslashes(file_get_contents($_FILES['image6']['tmp_name']));
  $name6 = mysqli_real_escape_string($conn, $_POST["name6"]);
  $cse6 = mysqli_real_escape_string($conn, $_POST["cse6"]);
  $gender6= mysqli_real_escape_string($conn, $_POST["gender6"]);
  
  $image7 = addslashes(file_get_contents($_FILES['image7']['tmp_name']));
  $name7 = mysqli_real_escape_string($conn, $_POST["name7"]);
  $cse7 = mysqli_real_escape_string($conn, $_POST["cse7"]);
  $gender7= mysqli_real_escape_string($conn, $_POST["gender7"]);
  
  $image8 = addslashes(file_get_contents($_FILES['image8']['tmp_name']));
  $name8 = mysqli_real_escape_string($conn, $_POST["name8"]);
  $cse8 = mysqli_real_escape_string($conn, $_POST["cse8"]);
  $gender8= mysqli_real_escape_string($conn, $_POST["gender8"]);
  
  $image9 = addslashes(file_get_contents($_FILES['image9']['tmp_name']));
  $name9 = mysqli_real_escape_string($conn, $_POST["name9"]);
  $cse9 = mysqli_real_escape_string($conn, $_POST["cse9"]);
  $gender9= mysqli_real_escape_string($conn, $_POST["gender9"]);
  
  $image10 = addslashes(file_get_contents($_FILES['image10']['tmp_name']));
  $name10 = mysqli_real_escape_string($conn, $_POST["name10"]);
  $cse10 = mysqli_real_escape_string($conn, $_POST["cse10"]);
  $gender10= mysqli_real_escape_string($conn, $_POST["gender10"]);
  
  $image11 = addslashes(file_get_contents($_FILES['image11']['tmp_name']));
  $name11 = mysqli_real_escape_string($conn, $_POST["name11"]);
  $cse11 = mysqli_real_escape_string($conn, $_POST["cse11"]);
  $gender11= mysqli_real_escape_string($conn, $_POST["gender11"]);

$image12 = addslashes(file_get_contents($_FILES['image12']['tmp_name']));
$name12 = mysqli_real_escape_string($conn, $_POST["name12"]);
$cse12 = mysqli_real_escape_string($conn, $_POST["cse12"]);
$gender12 = mysqli_real_escape_string($conn, $_POST["gender12"]);

$image13 = addslashes(file_get_contents($_FILES['image13']['tmp_name']));
$name13 = mysqli_real_escape_string($conn, $_POST["name13"]);
$cse13 = mysqli_real_escape_string($conn, $_POST["cse13"]);
$gender13 = mysqli_real_escape_string($conn, $_POST["gender13"]);

$image14 = addslashes(file_get_contents($_FILES['image14']['tmp_name']));
$name14 = mysqli_real_escape_string($conn, $_POST["name14"]);
$cse14 = mysqli_real_escape_string($conn, $_POST["cse14"]);
$gender14 = mysqli_real_escape_string($conn, $_POST["gender14"]);

$image15 = addslashes(file_get_contents($_FILES['image15']['tmp_name']));
$name15 = mysqli_real_escape_string($conn, $_POST["name15"]);
$cse15 = mysqli_real_escape_string($conn, $_POST["cse15"]);
$gender15 = mysqli_real_escape_string($conn, $_POST["gender15"]);

$image16 = addslashes(file_get_contents($_FILES['image16']['tmp_name']));
$name16 = mysqli_real_escape_string($conn, $_POST["name16"]);
$cse16 = mysqli_real_escape_string($conn, $_POST["cse16"]);
$gender16 = mysqli_real_escape_string($conn, $_POST["gender16"]);

$image17 = addslashes(file_get_contents($_FILES['image17']['tmp_name']));
$name17 = mysqli_real_escape_string($conn, $_POST["name17"]);
$cse17 = mysqli_real_escape_string($conn, $_POST["cse17"]);
$gender17 = mysqli_real_escape_string($conn, $_POST["gender17"]);

$image18 = addslashes(file_get_contents($_FILES['image18']['tmp_name']));
$name18 = mysqli_real_escape_string($conn, $_POST["name18"]);
$cse18 = mysqli_real_escape_string($conn, $_POST["cse18"]);
$gender18 = mysqli_real_escape_string($conn, $_POST["gender18"]);

$image19 = addslashes(file_get_contents($_FILES['image19']['tmp_name']));
$name19 = mysqli_real_escape_string($conn, $_POST["name19"]);
$cse19 = mysqli_real_escape_string($conn, $_POST["cse19"]);
$gender19 = mysqli_real_escape_string($conn, $_POST["gender19"]);

$image20 = addslashes(file_get_contents($_FILES['image20']['tmp_name']));
$name20 = mysqli_real_escape_string($conn, $_POST["name20"]);
$cse20 = mysqli_real_escape_string($conn, $_POST["cse20"]);
$gender20 = mysqli_real_escape_string($conn, $_POST["gender20"]);

  $query = "INSERT INTO meenties2 (image1, name1, cse1, gender1, image2, name2, cse2, gender2, image3, name3, cse3, gender3, image4, name4, cse4, gender4, image5, name5, cse5, gender5, image6, name6, cse6, gender6, image7, name7, cse7, gender7, image8, name8, cse8, gender8, image9, name9, cse9, gender9, image10, name10, cse10, gender10, image11, name11, cse11, gender11, image12, name12, cse12, gender12, image13, name13, cse13, gender13, image14, name14, cse14, gender14, image15, name15, cse15, gender15, image16, name16, cse16, gender16, image17, name17, cse17, gender17, image18, name18, cse18, gender18, image19, name19, cse19, gender19, image20, name20, cse20, gender20) VALUES ($image1, $name1, $cse1, $gender1, $image2, $name2, $cse2, $gender2, $image3, $name3, $cse3, $gender3, $image4, $name4, $cse4, $gender4, $image5, $name5, $cse5, $gender5, $image6, $name6, $cse6, $gender6, $image7, $name7, $cse7, $gender7, $image8, $name8, $cse8, $gender8, $image9, $name9, $cse9, $gender9, $image10, $name10, $cse10, $gender10, $image11, $name11, $cse11, $gender11, $image12, $name12, $cse12, $gender12, $image13, $name13, $cse13, $gender13, $image14, $name14, $cse14, $gender14, $image15, $name15, $cse15, $gender15, $image16, $name16, $cse16, $gender16, $image17, $name17, $cse17, $gender17, $image18, $name18, $cse18, $gender18, $image19, $name19, $cse19, $gender19, $image20, $name20, $cse20, $gender20)";
  if(mysqli_query($conn, $query)){
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'meenties2.php';
      </script>
      ";
  }
  else{
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
}

?>
<!<script>
  function updateFileName(name1, name2) {
    var fileInput = document.getElementById(name1);
    var fileNameSpan = document.getElementById(name2);
    fileNameSpan.textContent = fileInput.files[0].name;
  }
</script>
<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com-->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form in HTML CSS</title>
   
    <link rel="stylesheet" href="add meenties style.css" />
  </head>
  <body>
    <section class="container">
      <header>Add new meenties</header>
      <form class="form" action="add meenties 2.php" method="post" autocomplete="off" enctype="multipart/form-data">
      <div class="file-input">
            <input type="file" name="image1" id="image1" accept=".jpg, .jpeg, .png" onchange="updateFileName('image1','file-name1')">
            <label for="image1">Image 1 : </label>
            <label for="image1" class="file-input-label">Select file</label>
            <span class="file-input-name" id="file-name1">No file selected</span>
            </div>
        <div class="column">
          <div class="input-box">
            <label for="name1">Name 1: </label>
            <input type="text" name="name1" id = "name1" placeholder="Enter the Staff name" required value=""> </div>
            <div class="input-box">
            <label for="cse1">class 1: </label>
            <input type="text" name="cse1" id = "cse1" placeholder="Enter your class" required value=""> </div>
            <div class="input-box">
            <label for="gender1">gender 1: </label>
            <input type="text" name="gender1" id = "gender1" placeholder="Enter the gender" required value="">
          
        </div></div>
        <div class="file-input">
            <input type="file" name="image2" id="image2" accept=".jpg, .jpeg, .png" onchange="updateFileName('image2','file-name2')">
            <label for="image2">Image : </label>
            <label for="image2" class="file-input-label">Select file</label>
            <span class="file-input-name" id="file-name2">No file selected</span>
            </div>
        <div class="column">
          <div class="input-box">
            <label for="name2">Name 2 : </label>
            <input type="text" name="name2" id = "name2" placeholder="Enter the Staff name" required value=""> </div>
            <div class="input-box">
            <label for="cse2">class 2: </label>
            <input type="text" name="cse2" id = "cse2" placeholder="Enter your class" required value=""> </div>
            <div class="input-box">
            <label for="gender2">gender 2: </label>
            <input type="text" name="gender2" id = "gender2" placeholder="Enter the gender" required value="">
          
        </div></div>
        <div class="file-input">
    <input type="file" name="image3" id="image3" accept=".jpg, .jpeg, .png" onchange="updateFileName('image3','file-name3')">
    <label for="image3">Image 3 : </label>
    <label for="image3" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name3">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name3">Name 3: </label>
    <input type="text" name="name3" id = "name3" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse3">class 3: </label>
    <input type="text" name="cse3" id = "cse3" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender3">gender 3: </label>
    <input type="text" name="gender3" id = "gender3" placeholder="Enter the gender" required value="">
  
</div></div>
<div class="file-input">
    <input type="file" name="image3" id="image3" accept=".jpg, .jpeg, .png" onchange="updateFileName('image3','file-name3')">
    <label for="image3">Image 3 : </label>
    <label for="image3" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name3">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name3">Name 3: </label>
    <input type="text" name="name3" id = "name3" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse3">class 3: </label>
    <input type="text" name="cse3" id = "cse3" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender3">gender 3: </label>
    <input type="text" name="gender3" id = "gender3" placeholder="Enter the gender" required value="">
  
</div></div>
<div class="file-input">
    <input type="file" name="image4" id="image4" accept=".jpg, .jpeg, .png" onchange="updateFileName('image4','file-name4')">
    <label for="image4">Image 4 : </label>
    <label for="image4" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name4">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name4">Name 4: </label>
    <input type="text" name="name4" id = "name4" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse4">class 4: </label>
    <input type="text" name="cse4" id = "cse4" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender4">gender 4: </label>
    <input type="text" name="gender4" id = "gender4" placeholder="Enter the gender" required value="">
  
        </div></div>
        <div class="file-input">
    <input type="file" name="image5" id="image5" accept=".jpg, .jpeg, .png" onchange="updateFileName('image5','file-name5')">
    <label for="image5">Image 5 : </label>
    <label for="image5" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name5">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name5">Name 5: </label>
    <input type="text" name="name5" id = "name5" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse5">class 5: </label>
    <input type="text" name="cse5" id = "cse5" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender5">gender 5: </label>
    <input type="text" name="gender5" id = "gender5" placeholder="Enter the gender" required value="">
  
        </div></div>
        <div class="file-input">
    <input type="file" name="image6" id="image6" accept=".jpg, .jpeg, .png" onchange="updateFileName('image6','file-name6')">
    <label for="image6">Image 6 : </label>
    <label for="image6" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name6">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name6">Name 6: </label>
    <input type="text" name="name6" id = "name6" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse6">class 6: </label>
    <input type="text" name="cse6" id = "cse6" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender6">gender 6: </label>
    <input type="text" name="gender6" id = "gender6" placeholder="Enter the gender" required value="">
  
        </div></div>
        <div class="file-input">
    <input type="file" name="image7" id="image7" accept=".jpg, .jpeg, .png" onchange="updateFileName('image7','file-name7')">
    <label for="image7">Image 7 : </label>
    <label for="image7" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name7">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name7">Name 7: </label>
    <input type="text" name="name7" id = "name7" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse7">class 7: </label>
    <input type="text" name="cse7" id = "cse7" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender7">gender 7: </label>
    <input type="text" name="gender7" id = "gender7" placeholder="Enter the gender" required value="">
  
          
        </div></div>
        <div class="file-input">
    <input type="file" name="image8" id="image8" accept=".jpg, .jpeg, .png" onchange="updateFileName('image8','file-name8')">
    <label for="image8">Image 8 : </label>
    <label for="image8" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name8">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name8">Name 8: </label>
    <input type="text" name="name8" id = "name8" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse8">class 8: </label>
    <input type="text" name="cse8" id = "cse8" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender8">gender 8: </label>
    <input type="text" name="gender8" id = "gender8" placeholder="Enter the gender" required value="">
  
        </div></div>
        <div class="file-input">
    <input type="file" name="image9" id="image9" accept=".jpg, .jpeg, .png" onchange="updateFileName('image9','file-name9')">
    <label for="image9">Image 9 : </label>
    <label for="image9" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name9">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name9">Name 9: </label>
    <input type="text" name="name9" id = "name9" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse9">class 9: </label>
    <input type="text" name="cse9" id = "cse9" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender9">gender 9: </label>
    <input type="text" name="gender9" id = "gender9" placeholder="Enter the gender" required value="">
  
        </div></div>
        <div class="file-input">
    <input type="file" name="image10" id="image10" accept=".jpg, .jpeg, .png" onchange="updateFileName('image10','file-name10')">
    <label for="image10">Image 10 : </label>
    <label for="image10" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name10">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name10">Name 10: </label>
    <input type="text" name="name10" id = "name10" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse10">class 10: </label>
    <input type="text" name="cse10" id = "cse10" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender10">gender 10: </label>
    <input type="text" name="gender10" id = "gender10" placeholder="Enter the gender" required value="">
  
        </div></div>
        <div class="file-input">
    <input type="file" name="image11" id="image11" accept=".jpg, .jpeg, .png" onchange="updateFileName('image11','file-name11')">
    <label for="image11">Image 11 : </label>
    <label for="image11" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name11">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name11">Name 11: </label>
    <input type="text" name="name11" id = "name11" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse11">class 11: </label>
    <input type="text" name="cse11" id = "cse11" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender11">gender 11: </label>
    <input type="text" name="gender11" id = "gender11" placeholder="Enter the gender" required value="">
  
        </div></div>
        <div class="file-input">
    <input type="file" name="image12" id="image12" accept=".jpg, .jpeg, .png" onchange="updateFileName('image12','file-name12')">
    <label for="image12">Image 12 : </label>
    <label for="image12" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name12">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name12">Name 12: </label>
    <input type="text" name="name12" id = "name12" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse12">class 12: </label>
    <input type="text" name="cse12" id = "cse12" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender12">gender 12: </label>
    <input type="text" name="gender12" id = "gender12" placeholder="Enter the gender" required value="">
  
        </div></div>
        <div class="file-input">
    <input type="file" name="image13" id="image13" accept=".jpg, .jpeg, .png" onchange="updateFileName('image13','file-name13')">
    <label for="image13">Image 13 : </label>
    <label for="image13" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name13">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name13">Name 13: </label>
    <input type="text" name="name13" id = "name13" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse13">class 13: </label>
    <input type="text" name="cse13" id = "cse13" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender13">gender 13: </label>
    <input type="text" name="gender13" id = "gender13" placeholder="Enter the gender" required value="">
  
        </div></div>
        <div class="file-input">
    <input type="file" name="image14" id="image14" accept=".jpg, .jpeg, .png" onchange="updateFileName('image14','file-name14')">
    <label for="image14">Image 14 : </label>
    <label for="image14" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name14">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name14">Name 14: </label>
    <input type="text" name="name14" id = "name14" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse14">class 14: </label>
    <input type="text" name="cse14" id = "cse14" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender14">gender 14: </label>
    <input type="text" name="gender14" id = "gender14" placeholder="Enter the gender" required value="">
  
        </div></div>
        <div class="file-input">
    <input type="file" name="image15" id="image15" accept=".jpg, .jpeg, .png" onchange="updateFileName('image15','file-name15')">
    <label for="image15">Image 15 : </label>
    <label for="image15" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name15">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name15">Name 15: </label>
    <input type="text" name="name15" id = "name15" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse15">class 15: </label>
    <input type="text" name="cse15" id = "cse15" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender15">gender 15: </label>
    <input type="text" name="gender15" id = "gender15" placeholder="Enter the gender" required value="">
  
        </div></div>
        <div class="file-input">
    <input type="file" name="image16" id="image16" accept=".jpg, .jpeg, .png" onchange="updateFileName('image16','file-name16')">
    <label for="image16">Image 16 : </label>
    <label for="image16" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name16">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name16">Name 16: </label>
    <input type="text" name="name16" id = "name16" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse16">class 16: </label>
    <input type="text" name="cse16" id = "cse16" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender16">gender 16: </label>
    <input type="text" name="gender16" id = "gender16" placeholder="Enter the gender" required value="">
  
        </div></div>
        <div class="file-input">
    <input type="file" name="image17" id="image17" accept=".jpg, .jpeg, .png" onchange="updateFileName('image17','file-name17')">
    <label for="image17">Image 17 : </label>
    <label for="image17" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name17">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name17">Name 17: </label>
    <input type="text" name="name17" id = "name17" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse17">class 17: </label>
    <input type="text" name="cse17" id = "cse17" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender17">gender 17: </label>
    <input type="text" name="gender17" id = "gender17" placeholder="Enter the gender" required value="">
  
        </div></div>
        <div class="file-input">
    <input type="file" name="image18" id="image18" accept=".jpg, .jpeg, .png" onchange="updateFileName('image18','file-name18')">
    <label for="image18">Image 18 : </label>
    <label for="image18" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name18">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name18">Name 18: </label>
    <input type="text" name="name18" id = "name18" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse18">class 18: </label>
    <input type="text" name="cse18" id = "cse18" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender18">gender 18: </label>
    <input type="text" name="gender18" id = "gender18" placeholder="Enter the gender" required value="">
  
        </div></div>
        <div class="file-input">
    <input type="file" name="image19" id="image19" accept=".jpg, .jpeg, .png" onchange="updateFileName('image19','file-name19')">
    <label for="image19">Image 19 : </label>
    <label for="image19" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name19">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name19">Name 19: </label>
    <input type="text" name="name19" id = "name19" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse19">class 19: </label>
    <input type="text" name="cse19" id = "cse19" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender19">gender 19: </label>
    <input type="text" name="gender19" id = "gender19" placeholder="Enter the gender" required value="">
  
        </div></div>
        <div class="file-input">
    <input type="file" name="image111" id="image111" accept=".jpg, .jpeg, .png" onchange="updateFileName('image111','file-name111')">
    <label for="image111">Image 111 : </label>
    <label for="image111" class="file-input-label">Select file</label>
    <span class="file-input-name" id="file-name111">No file selected</span>
    </div>
<div class="column">
  <div class="input-box">
    <label for="name111">Name 111: </label>
    <input type="text" name="name111" id = "name111" placeholder="Enter the Staff name" required value=""> </div>
    <div class="input-box">
    <label for="cse111">class 111: </label>
    <input type="text" name="cse111" id = "cse111" placeholder="Enter your class" required value=""> </div>
    <div class="input-box">
    <label for="gender111">gender 111: </label>
    <input type="text" name="gender111" id = "gender111" placeholder="Enter the gender" required value="">
  
    </div></div>
        <button type="submit" name="submit" value="submit">Submit</button>


        </form></section></body></html>


        