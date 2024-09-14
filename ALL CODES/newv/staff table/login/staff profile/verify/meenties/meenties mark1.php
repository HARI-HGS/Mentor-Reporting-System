<?php




function mark($db_name, $table_name, $column_name, $value) {
  $conn = mysqli_connect("localhost", "root", "", $db_name);
  $stmt = mysqli_prepare($conn, "INSERT INTO $table_name ($column_name) VALUES (?)");
  mysqli_stmt_bind_param($stmt, 's', $value);
  $result = mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
  return $result;
}

function get($db_name, $table_name, $column_name) {
  $conn = mysqli_connect("localhost", "root", "", $db_name);
  $result = mysqli_query($conn, "SELECT $column_name FROM $table_name");
  $col = array();
  while ($row = mysqli_fetch_array($result)) {
    $col[] = $row[$column_name];
  }
  mysqli_close($conn);
  return $col;
}

function submit($db_name, $table_name, $column_name, $value) {
  if (isset($_POST[$value])) {
    $staff_name = $_POST[$value];
    mark($db_name, $table_name, $column_name, $staff_name);
    $uploaded_values = get($db_name, $table_name, $column_name);
    $updated_value = array_sum($uploaded_values);
    return $updated_value;
  }
}

function view_data($db_name, $table_name, $column_name) {
  $uploaded_values = get($db_name, $table_name, $column_name);
  $updated_value = array_sum($uploaded_values);
  echo "<br> <br> Result : " . $updated_value;
}



function details($db_name,$table_name,$column_name,$name_input){
  $conn = mysqli_connect("localhost", "root", "",$db_name);
  $result = mysqli_query($conn, "SELECT $column_name FROM $table_name WHERE $column_name=$column_name");
  $col = mysqli_fetch_array($result);
  echo $col[$column_name];}
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
    <form action="meenties mark1.php" method="post" enctype="multipart/form-data">
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
               <li><a href="chart/chart.php">Chart</a></li>
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
                        <th> NPTEL </th>
                        <th> Project </th>
                        <th> Attend </th>
                        <th> Upload <span class="icon-arrow">&DownArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td>
                        <div class="student">
                            <div class="image-container">
                                <img id="image-preview-1" alt="Uploaded image" />
                                <input type="file" name="image" id="image-upload-1" accept="image/*" />
                                <label for="image-upload-1">
                                    <i class="fas fa-camera-retro"></i>
                                </label>
                            </div>
                        </div>
<script>
const imageUpload = document.getElementById('image-upload-1');
const imagePreview = document.getElementById('image-preview-1');

// Load image data from local storage and display it
if (localStorage.getItem('imageData')) {
  imagePreview.src = localStorage.getItem('imageData');
}

// Handle file input change event
imageUpload.addEventListener('change', function() {
  const file = this.files[0];
  const reader = new FileReader();

  reader.addEventListener('load', function() {
    imagePreview.src = this.result;
    localStorage.setItem('imageData', this.result);
  });

  reader.readAsDataURL(file);
});

</script>
</td>

 <td><?php details('meentiesname','meenties1201','name1','name1');?></td>
 <td><?php details('meentiesname','meenties1201','cse1','cse1');?></td>
 <td><?php details('meentiesname','meenties1201','gender1','gender1');?></td>
 


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel" id = "nptel" placeholder="Enter mark">
 <?php submit('jairam', 'filenptel', 'nptel', 'nptel'); view_data('jairam', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project" id = "nptel" placeholder="Enter mark">
 <?php submit('jairam', 'fileproject', 'project', 'project'); view_data('jairam', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend" id = "attend" placeholder="Enter mark">
 <?php submit('jairam', 'fileattend', 'attend', 'attend'); view_data('jairam', 'fileattend', 'attend');?></div></div>
</td>



    <td><button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
    </tr>
    <td contenteditable="true">2</td>
    <td>

</td>
<td><?php details('meentiesname','meenties1','name2','name2');?></td>
 <td><?php details('meentiesname','meenties1','cse2','cse2');?></td>
 <td><?php details('meentiesname','meenties1','gender2','gender2');?></td>
        

<td>
  <div class="form1">
    <div class="input-box">
    <input type="text" name="nptel1" id = "nptel" placeholder="Enter mark">
 <?php submit('hari', 'filenptel', 'nptel', 'nptel1');  view_data('hari', 'filenptel', 'nptel');?>
    </div>
  </div>


</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project1" id = "project" placeholder="Enter mark">
 <?php submit('hari', 'fileproject', 'project', 'project1'); view_data('hari', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend1" id = "attend" placeholder="Enter mark">
 <?php submit('hari', 'fileattend', 'attend', 'attend1'); view_data('hari', 'fileattend', 'attend');?></div></div>
</td>
 <td> <button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button> </td>

        </tr>
      <tr>

        <td>3</td>
        <td></td>
 <td><?php details('meentiesname','meenties1','name3','name3');?></td>
 <td><?php details('meentiesname','meenties1','cse3','cse3');?></td>
 <td><?php details('meentiesname','meenties1','gender3','gender3');?></td>
        

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel2" id = "nptel" placeholder="Enter mark">
 <?php submit('example', 'filenptel', 'nptel', 'nptel2'); view_data('example', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project2" id = "project" placeholder="Enter mark">
 <?php submit('example', 'fileproject', 'project', 'project2'); view_data('example', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend2" id = "attend" placeholder="Enter mark">
 <?php submit('example', 'fileattend', 'attend', 'attend2'); view_data('example', 'fileattend', 'attend');?></div></div>
</td>
        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
        
      </tr>
   
      <tr>  <td>4</td>
      <td></td>
 <td><?php details('meentiesname','meenties1','name4','name4');?></td>
 <td><?php details('meentiesname','meenties1','cse4','cse4');?></td>
 <td><?php details('meentiesname','meenties1','gender4','gender4');?></td>
        


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel3" id = "nptel" placeholder="Enter mark">
 <?php submit('data4', 'filenptel', 'nptel', 'npte3'); view_data('data4', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project3" id = "project" placeholder="Enter mark">
 <?php submit('data4', 'fileproject', 'project', 'project3'); view_data('data4', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend3" id = "attend" placeholder="Enter mark">
 <?php submit('data4', 'fileattend', 'attend', 'attend3'); view_data('data4', 'fileattend', 'attend');?></div></div>
</td>
        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>
<tr>

<td>5</td>
    <td></td>
 <td><?php details('meentiesname','meenties1','name5','name5');?></td>
 <td><?php details('meentiesname','meenties1','cse5','cse5');?></td>
 <td><?php details('meentiesname','meenties1','gender5','gender5');?></td>
 
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel4" id = "nptel" placeholder="Enter mark">
 <?php submit('data5', 'filenptel', 'nptel', 'npte4'); view_data('data5', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project4" id = "project" placeholder="Enter mark">
 <?php submit('data5', 'fileproject', 'project', 'project4'); view_data('data5', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend4" id = "attend" placeholder="Enter mark">
 <?php submit('data5', 'fileattend', 'attend', 'attend4'); view_data('data5', 'fileattend', 'attend');?></div></div>
</td>



<td><button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
    </tr>
    <tr>
    <td>6</td>
    <td></td>
 <td><?php details('meentiesname','meenties1','name6','name6');?></td>
 <td><?php details('meentiesname','meenties1','cse6','cse6');?></td>
 <td><?php details('meentiesname','meenties1','gender6','gender6');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel5" id = "nptel" placeholder="Enter mark">
 <?php submit('data6', 'filenptel', 'nptel', 'npte5'); view_data('data6', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project5" id = "project" placeholder="Enter mark">
 <?php submit('data6', 'fileproject', 'project', 'project5'); view_data('data6', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend5" id = "attend" placeholder="Enter mark">
 <?php submit('data6', 'fileattend', 'attend', 'attend5'); view_data('data6', 'fileattend', 'attend');?></div></div>
</td>




        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>



      </tr> <tr><td>7</td>
    <td></td>
 <td><?php details('meentiesname','meenties1','name7','name7');?></td>
 <td><?php details('meentiesname','meenties1','cse7','cse7');?></td>
 <td><?php details('meentiesname','meenties1','gender7','gender7');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel6" id = "nptel" placeholder="Enter mark">
 <?php submit('data7', 'filenptel', 'nptel', 'npte6'); view_data('data7', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project6" id = "project" placeholder="Enter mark">
 <?php submit('data7', 'fileproject', 'project', 'project6'); view_data('data7', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend6" id = "attend" placeholder="Enter mark">
 <?php submit('data7', 'fileattend', 'attend', 'attend6'); view_data('data7', 'fileattend', 'attend');?></div></div>
</td>
        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr>
      <tr>
      <td>8</td>
    <td></td>
 <td><?php details('meentiesname','meenties1','name8','name8');?></td>
 <td><?php details('meentiesname','meenties1','cse8','cse8');?></td>
 <td><?php details('meentiesname','meenties1','gender8','gender8');?></td>
        



<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel8" id = "nptel" placeholder="Enter mark">
 <?php submit('data8', 'filenptel', 'nptel', 'npte8'); view_data('data8', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project8" id = "project" placeholder="Enter mark">
 <?php submit('data8', 'fileproject', 'project', 'project8'); view_data('data8', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend8" id = "attend" placeholder="Enter mark">
 <?php submit('data8', 'fileattend', 'attend', 'attend8'); view_data('data8', 'fileattend', 'attend');?></div></div>
</td>


        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr><tr>
      <td>9</td>
    <td></td>
 <td><?php details('meentiesname','meenties1','name9','name9');?></td>
 <td><?php details('meentiesname','meenties1','cse9','cse9');?></td>
 <td><?php details('meentiesname','meenties1','gender9','gender9');?></td>
        


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel9" id = "nptel" placeholder="Enter mark">
 <?php submit('data9', 'filenptel', 'nptel', 'npte9'); view_data('data9', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project9" id = "project" placeholder="Enter mark">
 <?php submit('data9', 'fileproject', 'project', 'project9'); view_data('data9', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend9" id = "attend" placeholder="Enter mark">
 <?php submit('data9', 'fileattend', 'attend', 'attend9'); view_data('data9', 'fileattend', 'attend');?></div></div>
</td>



        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr><tr>

    </tbody>
            </table>
        </section>
    </main>
</body>

</html>