<?php

function upload($db_name, $file_input_name, $table_name, $column_name, $file_name) {
    $conn = mysqli_connect('localhost', 'root', '', $db_name);
    if (isset($_POST['submit'])) {
        $file_name = $_FILES[$file_input_name]['name'];
      ; // Added variable to get the temporary location of the uploaded file

        $num_files = 0;
        if (!empty($file_name)) {
            $num_files++;
            $query = "INSERT INTO $table_name ($column_name) VALUES ('$file_name')";
            mysqli_query($conn, $query);
           
        }
    }
}

function view_count($db_name, $table_name, $column_name) {
    $conn = mysqli_connect('localhost', 'root', '', $db_name);
    $counts = array();
    foreach (array($column_name) as $col) {
        $query = "SELECT COUNT(*) FROM $table_name WHERE $col IS NOT NULL";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $counts[$col] = $row[0];
    }

    // Output results
    echo "<br> <br> count: " . $counts[$column_name] . "<br>";
}

function details($db_name,$table_name,$column_name,$name_input){
  $conn = mysqli_connect("localhost", "root", "",$db_name);
  $result = mysqli_query($conn, "SELECT $column_name FROM $table_name WHERE $column_name=$column_name");
  $col = mysqli_fetch_array($result);
  echo $col[$column_name];}

  function display_image($db_name, $table_name, $image_column_name) {
    $conn = mysqli_connect("localhost", "root", "", $db_name);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the image data from the database
    $sql = "SELECT $image_column_name FROM $table_name LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Fetch the image data
        $row = mysqli_fetch_assoc($result);
        $image_data = $row[$image_column_name];

        // Disable compression


        // Output the image data with HTML img tag
        echo '<img src="data:image/png;base64,'.base64_encode($image_data).'" alt="Image"/>';

    } else {
        echo "Error retrieving image from database.";
    }

    // Close the database connection
    mysqli_close($conn);
}



?>
<script>
  function updateFileName(name1, name2) {
    var fileInput = document.getElementById(name1);
    var fileNameSpan = document.getElementById(name2);
    fileNameSpan.textContent = fileInput.files[0].name;
  }
</script>
<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <form action="meentiesname.php" method="post" enctype="multipart/form-data">
        <link rel="stylesheet" href="profile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>University website Design</title>
    <link rel="stylesheet" href="meenties style.css">
</head>

<body>
<nav>
<div class="logo">
         <img src="db image and doc/images/logo.jpg" alt="logo"></a> <!-----collage logo-->
  </div>
         <div class = "nav-links" id="navLinks">
             
            <ul>
               <!--<li><a href="#"class="active"><span class="icon-arrow">&LeftArrow;</span> Back </a></li>-->
               <li><a href="http://localhost:8080/project/newup/">Home</a></li>
               <li><a href="ranking/internship.php">Ranking</a></li>
               <li><a href="http://localhost:8080/project/newup/staff%20table/staff%20table.php">Staff</a></li>
               <li><a href="add meenties 1.php">Add Student</a></li>
               <li><a href="chart/chart.php">Chart</a></li> <!------------staff-->
               <li><a href="meenties mark1.php">NPTEL</a></li>
            </li>
         </ul>
      </div>
       
   </nav>
    <main class="table">
        <section class="table__header">
            <h1>meenties achivement</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="db image and doc/images/search.png" alt="">
            </div>
           
        </section>
        
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> S.no</th>
                        <th> Image </th>
                        <th> Name </th>
                        <th> CSE </th>
                        <th> Gender </th>
                        <th> Internship </th>
                        <th> Workshop </th>
                        <th> PaperPresentation</th>
                        <th> Sports</th>
                        <th>Upload<span class="icon-arrow">&DownArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td>
                    <?php display_image('meentiesname','ment15','image1');?>    
</td>

 <td><?php details('meentiesname','ment15','name1','name1');?></td>
 <td><?php details('meentiesname','ment15','cse1','cse1');?></td>
 <td><?php details('meentiesname','ment15','gender1','gender1');?></td>
 <td><div class="file-input">
 <input type="file" name="image1" id="image1" onchange="updateFileName('image1', 'file-name')">
 <label for="image1" class="file-input-label">Select file</label>
 <span class="file-input-name" id="file-name">No file selected</span>
</div>

<?php
  upload('data21','image1','filedownload','filename','file_name');
  view_count('data21','filedownload','filename');
?>
</td>
<td><div class="file-input">
  <input type="file" name="image2" id="image2" onchange="updateFileName('image2', 'file_workshop')">
  <label for="image2" class="file-input-label">Select file</label>
  <span class="file-input-name" id="file_workshop">No file selected</span>
</div>


        <?php

        upload('data21','image2','fileworkshop','workshop','file_workshop');
        view_count('data21','fileworkshop','workshop');
?>
        </td>
        <td><div class="file-input">
  <input type="file" name="image3" id="image3" onchange="updateFileName('image3', 'file_paper')">
  <label for="image3" class="file-input-label">Select file</label>
  <span class="file-input-name" id="file_paper">No file selected</span>
</div>
    <?php
    upload('data21','image3','filepaper','paper','file_paper');
    view_count('data21','filepaper','paper');
    ?>
    </td><td>  <div class="file-input">
  <input type="file" name="image4" id="image4" onchange="updateFileName('image4', 'file_sports')">
  <label for="image4" class="file-input-label">Select file</label>
  <span class="file-input-name" id="file_sports">No file selected</span>
</div><?php

   upload('data21','image4','filesports','sports','file_sports');
   view_count('data21','filesports','sports');
?></td>
    <td><button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
    </tr>
    <td>2</td>
    
    <td><?php display_image('meentiesname','ment15','image2');?>
</td>
<td><?php details('meentiesname','ment15','name2','name2');?></td>
 <td><?php details('meentiesname','ment15','cse2','cse2');?></td>
 <td><?php details('meentiesname','ment15','gender2','gender2');?></td>
        <td><div class="file-input">
  <input type="file" name="pic1" id="pic1" onchange="updateFileName('pic1', 'file_intern')">
  <label for="pic1" class="file-input-label">Select file</label>
  <span class="file-input-name" id="file_intern">No file selected</span>
</div>
<?php

upload('data22','pic1','filedownload','filename','file_intern');
view_count('data22','filedownload','filename');
?>
    </td>
  <td><div class="file-input">
  <input type="file" name="pic2" id="pic2" onchange="updateFileName('pic2', 'file_workshop1')">
  <label for="pic2" class="file-input-label">Select file</label>
  <span class="file-input-name" id="file_workshop1">No file selected</span>
</div>
        <?php

upload('data22','pic2','fileworkshop','workshop','file_workshop1');
view_count('data22','fileworkshop','workshop');



 ?></td>
        <td><div class="file-input">
  <input type="file" name="pic3" id="pic3" onchange="updateFileName('pic3', 'file_paper1')">
  <label for="pic3" class="file-input-label">Select file</label>
  <span class="file-input-name" id="file_paper1">No file selected</span>
</div>
<?php

upload('data22','pic3','filepaper','paper','file_paper1');
view_count('data22','filepaper','paper');



 ?></td><td><div class="file-input">
 <input type="file" name="pic4" id="pic4" onchange="updateFileName('pic4', 'file_sports1')">
 <label for="pic4" class="file-input-label">Select file</label>
 <span class="file-input-name" id="file_sports1">No file selected</span>
</div><?php

  upload('data22','pic4','filesports','sports','file_sports1');
  view_count('data22','filesports','sports');
?></td>
 <td> <button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button> </td>

        </tr>

        



      <tr>
      <td>3</td>
  







 







  <td><?php display_image('meentiesname','ment15','image3');?></td>
<td><?php details('meentiesname','ment15','name3','name3');?></td>
<td><?php details('meentiesname','ment15','cse3','cse3');?></td>
<td><?php details('meentiesname','ment15','gender3','gender3');?></td>
  <td><div class="file-input">
<input type="file" name="file1" id="file1" onchange="updateFileName('file1', 'file_name2')">
<label for="file1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_name2">No file selected</span>
</div>

  <?php
  upload('data23', 'file1', 'filedownload', 'filename','file_name2');
  view_count('data23', 'filedownload', 'filename');
  ?>
  
  </td>
  
    
    <td><div class="file-input">
<input type="file" name="file2" id="file2" onchange="updateFileName('file2', 'file_workshop2')">
<label for="file2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop2">No file selected</span>
</div>
  
  
  <?php
  upload('data23','file2','fileworkshop','Workshop','file_workshop2');
  view_count('data23','fileworkshop','Workshop');
  ?>
  
  </td>
  
  
  <td><div class="file-input">
<input type="file" name="file3" id="file3" onchange="updateFileName('file3', 'file_paper2')">
<label for="file3" class="file-input-label" >Select file</label>
<span class="file-input-name" id="file_paper2">No file selected</span>
</div>

  
  
  <?php
  upload('data23','file3','filepaper','paper','file_paper2');
  view_count('data23','filepaper','paper');
  //generate_pie_chart('fileworkshop')
  ?>
  
  
  </td><td><div class="file-input">
<input type="file" name="file4" id="file4" onchange="updateFileName('file4', 'file_sports2')">
<label for="file4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports2">No file selected</span>
</div><?php

upload('data23','file4','filesports','sports','file_sports2');
view_count('data23','filesports','sports');
?></td>
  <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
  
</tr>

<tr>
<td>4</td>
<td><?php display_image('meentiesname','ment15','image4');?>                                                           </td>
<td><?php details('meentiesname','ment15','name4','name4');?></td>
<td><?php details('meentiesname','ment15','cse4','cse4');?></td>
<td><?php details('meentiesname','ment15','gender4','gender4');?></td>
  <td><div class="file-input">
<input type="file" name="use1" id="use1" onchange="updateFileName('use1', 'file_name3')">
<label for="use1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_name3">No file selected</span>
</div>

  <?php
  upload('data24', 'use1', 'filedownload', 'filename','file_name3');
  view_count('data24', 'filedownload', 'filename');
  ?>
  
  </td>
  
    
    <td><div class="file-input">
<input type="file" name="use2" id="use2" onchange="updateFileName('use2', 'file_workshop3')">
<label for="use2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop3">No file selected</span>
</div>
  
  
  <?php
  upload('data24','use2','fileworkshop','Workshop','file_workshop33');
  view_count('data24','fileworkshop','Workshop');
  ?>
  
  </td>
  
  
  <td><div class="file-input">
<input type="file" name="use3" id="use3" onchange="updateFileName('use3', 'file_paper3')">
<label for="use3" class="file-input-label" >Select file</label>
<span class="file-input-name" id="file_paper3">No file selected</span>
</div>

  
  
  <?php
  upload('data24','use3','filepaper','paper','file_paper3');
  view_count('data24','filepaper','paper');
  //generate_pie_chart('fileworkshop')
  ?>
  
  
  </td><td><div class="file-input">
<input type="file" name="use4" id="use4" onchange="updateFileName('use4', 'file_sports3')">
<label for="use4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports3">No file selected</span>
</div><?php

upload('data24','use4','filesports','sports','file_sports3');
view_count('data24','filesports','sports');
?></td>
  <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>
<tr>
<td>5</td>
<td><?php display_image('meentiesname','ment15','image5');?></td>
<td><?php details('meentiesname','ment15','name5','name5');?></td>
<td><?php details('meentiesname','ment15','cse5','cse5');?></td>
<td><?php details('meentiesname','ment15','gender5','gender5');?></td>
<td><div class="file-input">
<input type="file" name="bb1" id="bb1" onchange="updateFileName('bb1', 'file-name4')">
<label for="bb1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file-name4">No file selected</span>
</div>

  <?php
  upload('data25', 'bb1', 'filedownload', 'filename','file_name4');
  view_count('data25', 'filedownload', 'filename');
  ?>
  
  </td>
  
    
  <td><div class="file-input">
<input type="file" name="bb2" id="bb2" onchange="updateFileName('bb2', 'file_workshop4')">
<label for="bb2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop4">No file selected</span>
</div>
  
  
  <?php
  upload('data25','bb2','fileworkshop','Workshop','file_workshop4');
  view_count('data25','fileworkshop','Workshop');
  ?>
</td>
  
  
  <td><div class="file-input">
<input type="file" name="bb3" id="bb3" onchange="updateFileName('bb3', 'file_paper4')">
<label for="bb3" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_paper4">No file selected</span>
</div>

  
  
  <?php
  upload('data25','bb3','filepaper','paper','file_paper4');
  view_count('data25','filepaper','paper');
  ?>
  
  
  </td><td><div class="file-input">
<input type="file" name="bb4" id="bb4" onchange="updateFileName('bb4', 'file_sports4')">
<label for="bb4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports4">No file selected</span>
</div><?php

upload('data25','bb4','filesports','sports','file_sports4');
view_count('data25','filesports','sports');
?></td>
  <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>
<td>6</td>
<td><?php display_image('meentiesname','ment610','image6');?></td>
<td><?php details('meentiesname','ment610','name6','name6');?></td>
<td><?php details('meentiesname','ment610','cse6','cse6');?></td>
<td><?php details('meentiesname','ment610','gender6','gender6');?></td>
  <td><div class="file-input">
<input type="file" name="b1" id="b1" onchange="updateFileName('b1', 'file-name5')">
<label for="b1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file-name5">No file selected</span>
</div>

  <?php
  upload('data26', 'b1', 'filedownload', 'filename','file_name5');
  view_count('data26', 'filedownload', 'filename');
  ?>
  
  </td>
  
    
  <td><div class="file-input">
<input type="file" name="b2" id="b2" onchange="updateFileName('b2', 'file_workshop5')">
<label for="b2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop5">No file selected</span>
</div>
  
  
  <?php
  upload('data26','b2','fileworkshop','Workshop','file_workshop5');
  view_count('data26','fileworkshop','Workshop');
  ?>
</td>
  
  
  <td><div class="file-input">
<input type="file" name="b3" id="b3" onchange="updateFileName('b3', 'file_paper5')">
<label for="b3" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_paper5">No file selected</span>
</div>

  
  
  <?php
  upload('data26','b3','filepaper','paper','file_paper5');
  view_count('data26','filepaper','paper');
  ?>
  
  
  </td><td><div class="file-input">
<input type="file" name="b4" id="b4" onchange="updateFileName('b4', 'file_sports5')">
<label for="b4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports5">No file selected</span>
</div><?php

upload('data26','b4','filesports','sports','file_sports5');
view_count('data26','filesports','sports');
?></td>
  <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr> <tr><td>7</td>
<td><?php display_image('meentiesname','ment610','image7');?></td>
<td><?php details('meentiesname','ment610','name7','name7');?></td>
<td><?php details('meentiesname','ment610','cse7','cse7');?></td>
<td><?php details('meentiesname','ment610','gender7','gender7');?></td>
  <td><div class="file-input">
<input type="file" name="c1" id="c1" onchange="updateFileName('c1', 'file-name6')">
<label for="c1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file-name6">No file selected</span>
</div>

  <?php
  upload('data27', 'c1', 'filedownload', 'filename','file_name6');
  view_count('data27', 'filedownload', 'filename');
  ?>
  
  </td>
  
    
  <td><div class="file-input">
<input type="file" name="c2" id="c2" onchange="updateFileName('c2', 'file_workshop6')">
<label for="c2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop6">No file selected</span>
</div>
  
  
  <?php
  upload('data27','c2','fileworkshop','Workshop','file_workshop6');
  view_count('data27','fileworkshop','Workshop');
  ?>
</td>
  
  
  <td><div class="file-input">
<input type="file" name="c3" id="c3" onchange="updateFileName('c3', 'file_paper6')">
<label for="c3" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_paper6">No file selected</span>
</div>

  
  
  <?php
  upload('data27','c3','filepaper','paper','file_paper6');
  view_count('data27','filepaper','paper');
  ?>
  
  
  </td><td><div class="file-input">
<input type="file" name="c4" id="c4" onchange="updateFileName('c4', 'file_sports6')">
<label for="c4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports6">No file selected</span>
</div><?php

upload('data27','c4','filesports','sports','file_sports5');
view_count('data27','filesports','sports');
?></td>
  <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>
<tr>
<td>8</td>
<td><?php display_image('meentiesname','ment610','image8');?></td>
<td><?php details('meentiesname','ment610','name8','name8');?></td>
<td><?php details('meentiesname','ment610','cse8','cse8');?></td>
<td><?php details('meentiesname','ment610','gender8','gender8');?></td>
  <td><div class="file-input">
<input type="file" name="d1" id="d1" onchange="updateFileName('d1', 'file-name7')">
<label for="d1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file-name7">No file selected</span>
</div>

  <?php
  upload('data28', 'd1', 'filedownload', 'filename','file_name6');
  view_count('data28', 'filedownload', 'filename');
  ?>
  
  </td>
  
    
  <td><div class="file-input">
<input type="file" name="d2" id="d2" onchange="updateFileName('d2', 'file_workshop7')">
<label for="d2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop7">No file selected</span>
</div>
  
  
  <?php
  upload('data28','d2','fileworkshop','Workshop','file_workshop6');
  view_count('data28','fileworkshop','Workshop');
  ?>
</td>
  
  
  <td><div class="file-input">
<input type="file" name="d3" id="d3" onchange="updateFileName('d3', 'file_paper7')">
<label for="d3" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_paper7">No file selected</span>
</div>

  
  
  <?php
  upload('data28','d3','filepaper','paper','file_paper7');
  view_count('data28','filepaper','paper');
  ?>
  
  
  </td><td><div class="file-input">
<input type="file" name="d4" id="d4" onchange="updateFileName('d4', 'file_sports7')">
<label for="d4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports7">No file selected</span>
</div><?php

upload('data28','d4','filesports','sports','file_sports7');
view_count('data28','filesports','sports');
?></td>
  <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr><tr>
<td>9</td>
<td><?php display_image('meentiesname','ment610','image9');?></td>
<td><?php details('meentiesname','ment610','name9','name9');?></td>
<td><?php details('meentiesname','ment610','cse9','cse9');?></td>
<td><?php details('meentiesname','ment610','gender9','gender9');?></td>
  <td><div class="file-input">
<input type="file" name="e1" id="e1" onchange="updateFileName('e1', 'file-name8')">
<label for="e1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file-name8">No file selected</span>
</div>

  <?php
  upload('data29', 'e1', 'filedownload', 'filename','file_name8');
  view_count('data29', 'filedownload', 'filename');
  ?>
  
  </td>
  
    
  <td><div class="file-input">
<input type="file" name="e2" id="e2" onchange="updateFileName('e2', 'file_workshop8')">
<label for="e2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop8">No file selected</span>
</div>
  
  
  <?php
  upload('data29','e2','fileworkshop','Workshop','file_workshop8');
  view_count('data29','fileworkshop','Workshop');
  ?>
</td>
  
  
  <td><div class="file-input">
<input type="file" name="e3" id="e3" onchange="updateFileName('e3', 'file_paper8')">
<label for="e3" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_paper8">No file selected</span>
</div>

  
  
  <?php
  upload('data29','e3','filepaper','paper','file_paper8');
  view_count('data29','filepaper','paper');
  ?>
  
  
  </td><td><div class="file-input">
<input type="file" name="e4" id="e4" onchange="updateFileName('e4', 'file_sports8')">
<label for="e4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports8">No file selected</span>
</div><?php

upload('data29','e4','filesports','sports','file_sports8');
view_count('data29','filesports','sports');
?></td>
  <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr><tr>
<td>10</td>
<td><?php display_image('meentiesname','ment610','image10');?></td>
<td><?php details('meentiesname','ment610','name10','name10');?></td>
<td><?php details('meentiesname','ment610','cse10','cse10');?></td>
<td><?php details('meentiesname','ment610','gender10','gender10');?></td>
  <td><div class="file-input">
<input type="file" name="f1" id="f1" onchange="updateFileName('f1', 'file-name9')">
<label for="f1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file-name9">No file selected</span>
</div>

  <?php
  upload('data30', 'f1', 'filedownload', 'filename','file_name9');
  view_count('data30', 'filedownload', 'filename');
  ?>
  
  </td>
  
    
  <td><div class="file-input">
<input type="file" name="f2" id="f2" onchange="updateFileName('f2', 'file_workshop9')">
<label for="f2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop9">No file selected</span>
</div>
  
  
  <?php
  upload('data30','f2','fileworkshop','Workshop','file_workshop9');
  view_count('data30','fileworkshop','Workshop');
  ?>
</td>
  
  
  <td><div class="file-input">
<input type="file" name="f3" id="f3" onchange="updateFileName('f3', 'file_paper9')">
<label for="f3" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_paper9">No file selected</span>
</div>

  
  
  <?php
  upload('data30','f3','filepaper','paper','file_paper9');
  view_count('data30','filepaper','paper');
  ?>
  
  
  </td><td><div class="file-input">
<input type="file" name="f4" id="f4" onchange="updateFileName('f4', 'file_sports9')">
<label for="f4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports9">No file selected</span>
</div><?php

upload('data30','f4','filesports','sports','file_sports9');
view_count('data30','filesports','sports');
?></td>
  <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>
<tr>

              <td>11</td>
      

  
  </td>
  <td><?php display_image('meentiesname','ment1115','image11');?>        
</td>

<td><?php details('meentiesname','ment1115','name11','name11');?></td>
<td><?php details('meentiesname','ment1115','cse11','cse11');?></td>
<td><?php details('meentiesname','ment1115','gender11','gender11');?></td>
<td><div class="file-input">
<input type="file" name="g1" id="g1" onchange="updateFileName('g1', 'file-name10')">
<label for="g1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file-name10">No file selected</span>
</div>

<?php
upload('data31','g1','filedownload','filename','file_name10');
view_count('data31','filedownload','filename');
?>
</td>
<td><div class="file-input">
<input type="file" name="g2" id="g2" onchange="updateFileName('g2', 'file_workshop10')">
<label for="g2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop10">No file selected</span>
</div>


  <?php

  upload('data31','g2','fileworkshop','workshop','file_workshop10');
  view_count('data31','fileworkshop','workshop');
?>
  </td>
  <td><div class="file-input">
<input type="file" name="g3" id="g3" onchange="updateFileName('g3', 'file_paper10')">
<label for="g3" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_paper10">No file selected</span>
</div>
<?php
upload('data31','g3','filepaper','paper','file_paper10');
view_count('data31','filepaper','paper');
?>
</td><td>  <div class="file-input">
<input type="file" name="g4" id="g4" onchange="updateFileName('g4', 'file_sports10')">
<label for="g4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports10">No file selected</span>
</div><?php

upload('data31','g4','filesports','sports','file_sports10');
view_count('data31','filesports','sports');
?></td>
<td><button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>
<tr>
<td>12</td>
<td><?php display_image('meentiesname','ment1115','image12');?>
</td>
<td><?php details('meentiesname','ment1115','name12','name12');?></td>
<td><?php details('meentiesname','ment1115','cse12','cse12');?></td>
<td><?php details('meentiesname','ment1115','gender12','gender12');?></td>
  <td><div class="file-input">
<input type="file" name="h1" id="h1" onchange="updateFileName('h1', 'file_intern11')">
<label for="h1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_intern11">No file selected</span>
</div>
<?php

upload('data32','h1','filedownload','filename','file_intern11');
view_count('data32','filedownload','filename');
?>
</td>
<td><div class="file-input">
<input type="file" name="h2" id="h2" onchange="updateFileName('h2', 'file_workshop11')">
<label for="h2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop11">No file selected</span>
</div>
  <?php

upload('data32','h2','fileworkshop','workshop','file_workshop11');
view_count('data32','fileworkshop','workshop');



?></td>
  <td><div class="file-input">
<input type="file" name="h3" id="h3" onchange="updateFileName('h3', 'file_paper11')">
<label for="h3" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_paper11">No file selected</span>
</div>
<?php

upload('data32','h3','filepaper','paper','file_paper11');
view_count('data32','filepaper','paper');



?></td><td><div class="file-input">
<input type="file" name="h4" id="h4" onchange="updateFileName('h4', 'file_sports11')">
<label for="h4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports11">No file selected</span>
</div><?php

upload('data32','h4','filesports','sports','file_sports11');
view_count('data32','filesports','sports');
?></td>
<td> <button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button> </td>
</tr>
<td>13</td>
<td><?php display_image('meentiesname','ment1115','image13');?></td>
<td><?php details('meentiesname','ment1115','name13','name13');?></td>
<td><?php details('meentiesname','ment1115','cse13','cse13');?></td>
<td><?php details('meentiesname','ment1115','gender13','gende13');?></td>
  <td><div class="file-input">
<input type="file" name="i1" id="i1" onchange="updateFileName('i1', 'file_name12')">
<label for="i1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_name12">No file selected</span>
</div>

  <?php
  upload('data33', 'i1', 'filedownload', 'filename','file_name12');
  view_count('data33', 'filedownload', 'filename');
  ?>
  
  </td>
  
    
    <td><div class="file-input">
<input type="file" name="i2" id="i2" onchange="updateFileName('i2', 'file_workshop12')">
<label for="i2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop12">No file selected</span>
</div>
  
  
  <?php
  upload('data33','i2','fileworkshop','Workshop','file_workshop12');
  view_count('data33','fileworkshop','Workshop');
  ?>
  
  </td>
  
  
  <td><div class="file-input">
<input type="file" name="i3" id="i3" onchange="updateFileName('i3', 'file_paper12')">
<label for="i3" class="file-input-label" >Select file</label>
<span class="file-input-name" id="file_paper12">No file selected</span>
</div>

  
  
  <?php
  upload('data33','i3','filepaper','paper','file_paper12');
  view_count('data33','filepaper','paper');
  //generate_pie_chart('fileworkshop')
  ?>
  
  
<td><div class="file-input">
<input type="file" name="i4" id="i4" onchange="updateFileName('i4', 'file_sports12')">
<label for="i4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports12">No file selected</span>
</div><?php

upload('data33','i4','filesports','sports','file_sports12');
view_count('data33','filesports','sports');
?></td>
  <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
  
</tr>
<tr>  <td>14</td>
<td><?php display_image('meentiesname','ment1115','image14');?></td>
<td><?php details('meentiesname','ment1115','name14','name14');?></td>
<td><?php details('meentiesname','ment1115','cse14','cse14');?></td>
<td><?php details('meentiesname','ment1115','gender14','gender14');?></td>
  <td><div class="file-input">
<input type="file" name="j1" id="j1" onchange="updateFileName('j1', 'file_name13')">
<label for="j1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_name13">No file selected</span>
</div>

  <?php
  upload('data34', 'j1', 'filedownload', 'filename','file_name13');
  view_count('data34', 'filedownload', 'filename');
  ?>
  
  </td>
  
    
    <td><div class="file-input">
<input type="file" name="j2" id="j2" onchange="updateFileName('j2', 'file_workshop13')">
<label for="j2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop13">No file selected</span>
</div>
  
  
  <?php
  upload('data34','j2','fileworkshop','Workshop','file_workshop13');
  view_count('data34','fileworkshop','Workshop');
  ?>
  
  </td>
  
  
  <td><div class="file-input">
<input type="file" name="j3" id="j3" onchange="updateFileName('j3', 'file_paper13')">
<label for="j3" class="file-input-label" >Select file</label>
<span class="file-input-name" id="file_paper13">No file selected</span>
</div>

  
  
  <?php
  upload('data34','j3','filepaper','paper','file_paper13');
  view_count('data34','filepaper','paper');
  //generate_pie_chart('fileworkshop')
  ?>
  
  
  </td><td><div class="file-input">
<input type="file" name="j4" id="j4" onchange="updateFileName('j4', 'file_sports13')">
<label for="j4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports13">No file selected</span>
</div><?php

upload('data34','j4','filesports','sports','file_sports13');
view_count('data34','filesports','sports');
?></td>
  <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>

<td>15</td>
<td><?php display_image('meentiesname','ment1115','image15');?></td>
<td><?php details('meentiesname','ment1115','name15','name15');?></td>
<td><?php details('meentiesname','ment1115','cse15','cse15');?></td>
<td><?php details('meentiesname','ment1115','gender15','gender15');?></td>

<td><div class="file-input">
<input type="file" name="fileed1" id="fileed1" onchange="updateFileName('fileed1', 'file-name14')">
<label for="fileed1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop14">No file selected</span>
</div>
  
  
  <?php
  upload('data35','fileed1','filedownload','filename','file-name14');
  view_count('data35','filedownload','filename');
  ?>
  
  </td>
  
    
    <td><div class="file-input">
<input type="file" name="fileed2" id="fileed2" onchange="updateFileName('fileed2', 'file_workshop14')">
<label for="fileed2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop14">No file selected</span>
</div>
  
  
  <?php
  upload('data35','fileed2','fileworkshop','Workshop','file_workshop14');
  view_count('data35','fileworkshop','Workshop');
  ?>
  
  </td>
  
  
  <td><div class="file-input">
<input type="file" name="fileed3" id="fileed3" onchange="updateFileName('fileed3', 'file_paper14')">
<label for="fileed3" class="file-input-label" >Select file</label>
<span class="file-input-name" id="file_paper14">No file selected</span>
</div>

  
  
  <?php
  upload('data35','fileed3','filepaper','paper','file_paper14');
  view_count('data35','filepaper','paper');
  //generate_pie_chart('fileworkshop')
  ?>
  
  
  </td><td><div class="file-input">
<input type="file" name="fileed4" id="fileed4" onchange="updateFileName('fileed4', 'file_sports14')">
<label for="fileed4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports14">No file selected</span>
</div>

<?php

upload('data35','fileed4','filesports','sports','file_sports14');
view_count('data35','filesports','sports');
?>
</td>
<td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>

<td>16</td>
<td><?php display_image('meentiesname','ment1620','image16');?></td>
<td><?php details('meentiesname','ment1620','name16','name16');?></td>
<td><?php details('meentiesname','ment1620','cse16','cse16');?></td>
<td><?php details('meentiesname','ment1620','gender16','gender16');?></td>
  <td><div class="file-input">
<input type="file" name="asd1" id="asd1" onchange="updateFileName('asd1', 'file-name15')">
<label for="asd1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file-name15">No file selected</span>
</div>

  <?php
  upload('data36', 'asd1', 'filedownload', 'filename','file_name15');
  view_count('data36', 'filedownload', 'filename');
  ?>
  
  </td>
  
    
  <td><div class="file-input">
<input type="file" name="asd2" id="asd2" onchange="updateFileName('asd2', 'file_workshop15')">
<label for="asd2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop15">No file selected</span>
</div>
  
  
  <?php
  upload('data36','asd2','fileworkshop','Workshop','file_workshop15');
  view_count('data36','fileworkshop','Workshop');
  ?>
</td>
  
  
  <td><div class="file-input">
<input type="file" name="asd3" id="asd3" onchange="updateFileName('asd3', 'file_paper15')">
<label for="asd3" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_paper15">No file selected</span>
</div>

  
  
  <?php
  upload('data36','asd3','filepaper','paper','file_paper15');
  view_count('data36','filepaper','paper');
  ?>
  
  
  </td><td><div class="file-input">
<input type="file" name="asd4" id="asd4" onchange="updateFileName('asd4', 'file_sports15')">
<label for="asd4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports15">No file selected</span>
</div><?php

upload('data36','asd4','filesports','sports','file_sports15');
view_count('data36','filesports','sports');
?></td>
  <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td></tr>
  <tr>
  <td>17</td>
  <td><?php display_image('meentiesname','ment1620','image17');?></td>
<td><?php details('meentiesname','ment1620','name17','name17');?></td>
<td><?php details('meentiesname','ment1620','cse17','cse17');?></td>
<td><?php details('meentiesname','ment1620','gender17','gender17');?></td>
  <td><div class="file-input">
<input type="file" name="k1" id="k1" onchange="updateFileName('k1', 'file-name16')">
<label for="k1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file-name16">No file selected</span>
</div>

  <?php
  upload('data37', 'k1', 'filedownload', 'filename','file_name16');
  view_count('data37', 'filedownload', 'filename');
  ?>
  
  </td>
  
    
  <td><div class="file-input">
<input type="file" name="k2" id="k2" onchange="updateFileName('k2', 'file_workshop16')">
<label for="k2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop16">No file selected</span>
</div>
  
  
  <?php
  upload('data37','k2','fileworkshop','Workshop','file_workshop16');
  view_count('data37','fileworkshop','Workshop');
  ?>
</td>
  
  
  <td><div class="file-input">
<input type="file" name="k3" id="k3" onchange="updateFileName('k3', 'file_paper16')">
<label for="k3" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_paper16">No file selected</span>
</div>

  
  
  <?php
  upload('data37','k3','filepaper','paper','file_paper16');
  view_count('data37','filepaper','paper');
  ?>
  
  
  </td><td><div class="file-input">
<input type="file" name="k4" id="k4" onchange="updateFileName('k4', 'file_sports16')">
<label for="k4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports16">No file selected</span>
</div><?php

upload('data37','k4','filesports','sports','file_sports16');
view_count('data37','filesports','sports');
?></td>
  <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>

<td>18</td>
<td><?php display_image('meentiesname','ment1620','image18');?></td>
<td><?php details('meentiesname','ment1620','name18','name18');?></td>
<td><?php details('meentiesname','ment1620','cse18','cse18');?></td>
<td><?php details('meentiesname','ment1620','gender18','gender18');?></td>
  <td><div class="file-input">
<input type="file" name="l1" id="l1" onchange="updateFileName('l1', 'file-name17')">
<label for="l1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file-name17">No file selected</span>
</div>

  <?php
  upload('data38', 'l1', 'filedownload', 'filename','file_name17');
  view_count('data38', 'filedownload', 'filename');
  ?>
  
  </td>
  
    
  <td><div class="file-input">
<input type="file" name="l2" id="l2" onchange="updateFileName('l2', 'file_workshop17')">
<label for="l2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop17">No file selected</span>
</div>
  
  
  <?php
  upload('data38','l2','fileworkshop','Workshop','file_workshop17');
  view_count('data38','fileworkshop','Workshop');
  ?>
</td>
  
  
  <td><div class="file-input">
<input type="file" name="l3" id="l3" onchange="updateFileName('l3', 'file_paper17')">
<label for="l3" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_paper17">No file selected</span>
</div>

  
  
  <?php
  upload('data38','l3','filepaper','paper','file_paper17');
  view_count('data38','filepaper','paper');
  ?>
  
  
  </td><td><div class="file-input">
<input type="file" name="l4" id="l4" onchange="updateFileName('l4', 'file_sports17')">
<label for="l4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports17">No file selected</span>
</div><?php

upload('data38','l4','filesports','sports','file_sports17');
view_count('data38','filesports','sports');
?></td>
  <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>

<td>19</td>
<td><?php display_image('meentiesname','ment1620','image19');?></td>
<td><?php details('meentiesname','ment1620','name19','name19');?></td>
<td><?php details('meentiesname','ment1620','cse19','cse19');?></td>
<td><?php details('meentiesname','ment1620','gender19','gender19');?></td>
  <td><div class="file-input">
<input type="file" name="m1" id="m1" onchange="updateFileName('m1', 'file-name18')">
<label for="m1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file-name18">No file selected</span>
</div>

  <?php
  upload('data39', 'm1', 'filedownload', 'filename','file_name18');
  view_count('data39', 'filedownload', 'filename');
  ?>
  
  </td>
  
    
  <td><div class="file-input">
<input type="file" name="m2" id="m2" onchange="updateFileName('m2', 'file_workshop18')">
<label for="m2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop18">No file selected</span>
</div>
  
  
  <?php
  upload('data39','m2','fileworkshop','Workshop','file_workshop18');
  view_count('data39','fileworkshop','Workshop');
  ?>
</td>
  
  
  <td><div class="file-input">
<input type="file" name="m3" id="m3" onchange="updateFileName('m3', 'file_paper18')">
<label for="m3" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_paper18">No file selected</span>
</div>

  
  
  <?php
  upload('data39','m3','filepaper','paper','file_paper18');
  view_count('data39','filepaper','paper');
  ?>
  
  
  </td><td><div class="file-input">
<input type="file" name="m4" id="m4" onchange="updateFileName('m4', 'file_sports18')">
<label for="m4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports18">No file selected</span>
</div><?php

upload('data39','m4','filesports','sports','file_sports18');
view_count('data39','filesports','sports');
?></td>
  <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>

<td>20</td>

<td><?php display_image('meentiesname','ment1620','image20');?>
</td>
<td><?php details('meentiesname','ment1620','name20','name20');?></td>
<td><?php details('meentiesname','ment1620','cse20','cse20');?></td>
<td><?php details('meentiesname','ment1620','gender20','gender20');?></td>
  <td><div class="file-input">
<input type="file" name="n1" id="n1" onchange="updateFileName('n1', 'file-name19')">
<label for="n1" class="file-input-label">Select file</label>
<span class="file-input-name" id="file-name19">No file selected</span>
</div>

  <?php
  upload('data40', 'n1', 'filedownload', 'filename','file_name19');
  view_count('data40', 'filedownload', 'filename');
  ?>
  
  </td>
  
    
  <td><div class="file-input">
<input type="file" name="n2" id="n2" onchange="updateFileName('n2', 'file_workshop19')">
<label for="n2" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_workshop19">No file selected</span>
</div>
  
  
  <?php
  upload('data40','n2','fileworkshop','Workshop','file_workshop19');
  view_count('data40','fileworkshop','Workshop');
  ?>
</td>
  
  
  <td><div class="file-input">
<input type="file" name="n3" id="n3" onchange="updateFileName('n3', 'file_paper19')">
<label for="n3" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_paper19">No file selected</span>
</div>

  
  
  <?php
  upload('data40','n3','filepaper','paper','file_paper19');
  view_count('data40','filepaper','paper');
  ?>
  
  
  </td><td><div class="file-input">
<input type="file" name="n4" id="n4" onchange="updateFileName('n4', 'file_sports19')">
<label for="n4" class="file-input-label">Select file</label>
<span class="file-input-name" id="file_sports19">No file selected</span>
</div><?php

upload('data40','n4','filesports','sports','file_sports19');
view_count('data40','filesports','sports');
?></td>
  <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>
</tbody>
      </table>
  </section>
</main>
</body>

</html>