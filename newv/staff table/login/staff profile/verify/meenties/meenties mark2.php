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

function view_data2($db_name, $table_name, $column_name) {
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
    <form action="meenties2.php" method="post" enctype="multipart/form-data2">
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
                <input type="search" placeholder="Search data2...">
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
                        
</td>

 <td><?php details('meentiesname','meenties2','name1','name1');?></td>
 <td><?php details('meentiesname','meenties2','cse1','cse1');?></td>
 <td><?php details('meentiesname','meenties2','gender1','gender1');?></td>
 


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel21" id = "nptel" placeholder="Enter mark">
 <?php submit('data21', 'filenptel', 'nptel', 'nptel21'); view_data2('data21', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project21" id = "nptel" placeholder="Enter mark">
 <?php submit('data21', 'fileproject', 'project', 'project21'); view_data2('data21', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend21" id = "attend" placeholder="Enter mark">
 <?php submit('data21', 'fileattend', 'attend', 'attend21'); view_data2('data21', 'fileattend', 'attend');?></div></div>
</td>



    <td><button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
    </tr>
    <td contenteditable="true">2</td>
    <td>

</td>
<td><?php details('meentiesname','meenties2','name2','name2');?></td>
 <td><?php details('meentiesname','meenties2','cse2','cse2');?></td>
 <td><?php details('meentiesname','meenties2','gender2','gender2');?></td>
        

<td>
  <div class="form1">
    <div class="input-box">
    <input type="text" name="nptel22" id = "nptel" placeholder="Enter mark">
 <?php submit('data22', 'filenptel', 'nptel', 'nptel22');  view_data2('data22', 'filenptel', 'nptel');?>
    </div>
  </div>


</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project22" id = "project" placeholder="Enter mark">
 <?php submit('data22', 'fileproject', 'project', 'project22'); view_data2('data22', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend22" id = "attend" placeholder="Enter mark">
 <?php submit('data22', 'fileattend', 'attend', 'attend22'); view_data2('data22', 'fileattend', 'attend');?></div></div>
</td>
 <td> <button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button> </td>

        </tr>
      <tr>

        <td>3</td>
        <td></td>
 <td><?php details('meentiesname','meenties2','name3','name3');?></td>
 <td><?php details('meentiesname','meenties2','cse3','cse3');?></td>
 <td><?php details('meentiesname','meenties2','gender3','gender3');?></td>
        

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel23" id = "nptel" placeholder="Enter mark">
 <?php submit('data23', 'filenptel', 'nptel', 'npte23'); view_data2('data23', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project23" id = "project" placeholder="Enter mark">
 <?php submit('data23', 'fileproject', 'project', 'project23'); view_data2('data23', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend23" id = "attend" placeholder="Enter mark">
 <?php submit('data23', 'fileattend', 'attend', 'attend23'); view_data2('data23', 'fileattend', 'attend');?></div></div>
</td>
        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
        
      </tr>
   
      <tr>  <td>4</td>
      <td></td>
 <td><?php details('meentiesname','meenties2','name4','name4');?></td>
 <td><?php details('meentiesname','meenties2','cse4','cse4');?></td>
 <td><?php details('meentiesname','meenties2','gender4','gender4');?></td>
        


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel24" id = "nptel" placeholder="Enter mark">
 <?php submit('data24', 'filenptel', 'nptel', 'npte24'); view_data2('data24', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project24" id = "project" placeholder="Enter mark">
 <?php submit('data24', 'fileproject', 'project', 'project24'); view_data2('data24', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend24" id = "attend" placeholder="Enter mark">
 <?php submit('data24', 'fileattend', 'attend', 'attend24'); view_data2('data24', 'fileattend', 'attend');?></div></div>
</td>
        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>
<tr>

<td>5</td>
    <td></td>
 <td><?php details('meentiesname','meenties2','name5','name5');?></td>
 <td><?php details('meentiesname','meenties2','cse5','cse5');?></td>
 <td><?php details('meentiesname','meenties2','gender5','gender5');?></td>
 
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel25" id = "nptel" placeholder="Enter mark">
 <?php submit('data25', 'filenptel', 'nptel', 'npte25'); view_data2('data25', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project25" id = "project" placeholder="Enter mark">
 <?php submit('data25', 'fileproject', 'project', 'project25'); view_data2('data25', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend25" id = "attend" placeholder="Enter mark">
 <?php submit('data25', 'fileattend', 'attend', 'attend25'); view_data2('data25', 'fileattend', 'attend');?></div></div>
</td>



<td><button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
    </tr>
    <tr>
    <td>6</td>
    <td></td>
 <td><?php details('meentiesname','meenties2','name6','name6');?></td>
 <td><?php details('meentiesname','meenties2','cse6','cse6');?></td>
 <td><?php details('meentiesname','meenties2','gender6','gender6');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel26" id = "nptel" placeholder="Enter mark">
 <?php submit('data26', 'filenptel', 'nptel', 'npte26'); view_data2('data26', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project26" id = "project" placeholder="Enter mark">
 <?php submit('data26', 'fileproject', 'project', 'project26'); view_data2('data26', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend26" id = "attend" placeholder="Enter mark">
 <?php submit('data26', 'fileattend', 'attend', 'attend26'); view_data2('data26', 'fileattend', 'attend');?></div></div>
</td>




        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>



      </tr> <tr><td>7</td>
    <td></td>
 <td><?php details('meentiesname','meenties2','name7','name7');?></td>
 <td><?php details('meentiesname','meenties2','cse7','cse7');?></td>
 <td><?php details('meentiesname','meenties2','gender7','gender7');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel27" id = "nptel" placeholder="Enter mark">
 <?php submit('data27', 'filenptel', 'nptel', 'npte27'); view_data2('data27', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project27" id = "project" placeholder="Enter mark">
 <?php submit('data27', 'fileproject', 'project', 'project27'); view_data2('data27', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend27" id = "attend" placeholder="Enter mark">
 <?php submit('data27', 'fileattend', 'attend', 'attend27'); view_data2('data27', 'fileattend', 'attend');?></div></div>
</td>
        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr>
      <tr>
      <td>8</td>
    <td></td>
 <td><?php details('meentiesname','meenties2','name8','name8');?></td>
 <td><?php details('meentiesname','meenties2','cse8','cse8');?></td>
 <td><?php details('meentiesname','meenties2','gender8','gender8');?></td>
        



<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel28" id = "nptel" placeholder="Enter mark">
 <?php submit('data28', 'filenptel', 'nptel', 'npte28'); view_data2('data28', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project28" id = "project" placeholder="Enter mark">
 <?php submit('data28', 'fileproject', 'project', 'project28'); view_data2('data28', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend28" id = "attend" placeholder="Enter mark">
 <?php submit('data28', 'fileattend', 'attend', 'attend28'); view_data2('data28', 'fileattend', 'attend');?></div></div>
</td>


        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr><tr>
      <td>9</td>
    <td></td>
 <td><?php details('meentiesname','meenties2','name9','name9');?></td>
 <td><?php details('meentiesname','meenties2','cse9','cse9');?></td>
 <td><?php details('meentiesname','meenties2','gender9','gender9');?></td>
        


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel29" id = "nptel" placeholder="Enter mark">
 <?php submit('data29', 'filenptel', 'nptel', 'npte29'); view_data2('data29', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project29" id = "project" placeholder="Enter mark">
 <?php submit('data29', 'fileproject', 'project', 'project29'); view_data2('data29', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend29" id = "attend" placeholder="Enter mark">
 <?php submit('data29', 'fileattend', 'attend', 'attend29'); view_data2('data29', 'fileattend', 'attend');?></div></div>
</td>



        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr><tr>
      <td>10</td>
    <td></td>
 <td><?php details('meentiesname','meenties2','name10','name10');?></td>
 <td><?php details('meentiesname','meenties2','cse10','cse10');?></td>
 <td><?php details('meentiesname','meenties2','gender10','gender10');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel30" id = "nptel" placeholder="Enter mark">
 <?php submit('data30', 'filenptel', 'nptel', 'npte30'); view_data2('data30', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project30" id = "project" placeholder="Enter mark">
 <?php submit('data30', 'fileproject', 'project', 'project30'); view_data2('data30', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend30" id = "attend" placeholder="Enter mark">
 <?php submit('data30', 'fileattend', 'attend', 'attend30'); view_data2('data30', 'fileattend', 'attend');?></div></div>
</td>

        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr>
      <tr>

                    <td>11</td>
                    <td>
                        
</td>

 <td><?php details('meentiesname','meenties2','name11','name11');?></td>
 <td><?php details('meentiesname','meenties2','cse11','cse11');?></td>
 <td><?php details('meentiesname','meenties2','gender11','gender11');?></td>
 
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel31" id = "nptel" placeholder="Enter mark">
 <?php submit('data31', 'filenptel', 'nptel', 'npte31'); view_data2('data31', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project31" id = "project" placeholder="Enter mark">
 <?php submit('data31', 'fileproject', 'project', 'project31'); view_data2('data31', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend31" id = "attend" placeholder="Enter mark">
 <?php submit('data31', 'fileattend', 'attend', 'attend31'); view_data2('data31', 'fileattend', 'attend');?></div></div>
</td>




    <td><button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
    </tr>
    <tr>
      <td>12</td>
    <td>

</td>
<td><?php details('meentiesname','meenties2','name12','name12');?></td>
 <td><?php details('meentiesname','meenties2','cse12','cse12');?></td>
 <td><?php details('meentiesname','meenties2','gender12','gender12');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel32" id = "nptel" placeholder="Enter mark">
 <?php submit('data32', 'filenptel', 'nptel', 'npte32'); view_data2('data32', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project32" id = "project" placeholder="Enter mark">
 <?php submit('data32', 'fileproject', 'project', 'project32'); view_data2('data32', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend32" id = "attend" placeholder="Enter mark">
 <?php submit('data32', 'fileattend', 'attend', 'attend32'); view_data2('data32', 'fileattend', 'attend');?></div></div>
</td>



 <td> <button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button> </td>
    </tr>
    <td>13</td>
        <td></td>
 <td><?php details('meentiesname','meenties2','name13','name13');?></td>
 <td><?php details('meentiesname','meenties2','cse13','cse13');?></td>
 <td><?php details('meentiesname','meenties2','gender13','gende13');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel33" id = "nptel" placeholder="Enter mark">
 <?php submit('data33', 'filenptel', 'nptel', 'npte33'); view_data2('data33', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project33" id = "project" placeholder="Enter mark">
 <?php submit('data33', 'fileproject', 'project', 'project33'); view_data2('data33', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend33" id = "attend" placeholder="Enter mark">
 <?php submit('data33', 'fileattend', 'attend', 'attend33'); view_data2('data33', 'fileattend', 'attend');?></div></div>
</td>




        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
        
      </tr>
      <tr>  <td>14</td>
      <td></td>
 <td><?php details('meentiesname','meenties2','name14','name14');?></td>
 <td><?php details('meentiesname','meenties2','cse14','cse14');?></td>
 <td><?php details('meentiesname','meenties2','gender14','gender14');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel34" id = "nptel" placeholder="Enter mark">
 <?php submit('data34', 'filenptel', 'nptel', 'npte34'); view_data2('data34', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project34" id = "project" placeholder="Enter mark">
 <?php submit('data34', 'fileproject', 'project', 'project34'); view_data2('data34', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend34" id = "attend" placeholder="Enter mark">
 <?php submit('data34', 'fileattend', 'attend', 'attend34'); view_data2('data34', 'fileattend', 'attend');?></div></div>
</td>




        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>

<td>15</td>
    <td></td>
 <td><?php details('meentiesname','meenties2','name15','name15');?></td>
 <td><?php details('meentiesname','meenties2','cse15','cse15');?></td>
 <td><?php details('meentiesname','meenties2','gender15','gender15');?></td>
 


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel35" id = "nptel" placeholder="Enter mark">
 <?php submit('data35', 'filenptel', 'nptel', 'npte35'); view_data2('data35', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project35" id = "project" placeholder="Enter mark">
 <?php submit('data35', 'fileproject', 'project', 'project35'); view_data2('data35', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend35" id = "attend" placeholder="Enter mark">
 <?php submit('data35', 'fileattend', 'attend', 'attend35'); view_data2('data35', 'fileattend', 'attend');?></div></div>
</td>



    <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
    </tr>

    <td>16</td>
    <td></td>
 <td><?php details('meentiesname','meenties2','name16','name16');?></td>
 <td><?php details('meentiesname','meenties2','cse16','cse16');?></td>
 <td><?php details('meentiesname','meenties2','gender16','gender16');?></td>
        

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel36" id = "nptel" placeholder="Enter mark">
 <?php submit('data36', 'filenptel', 'nptel', 'npte36'); view_data2('data36', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project36" id = "project" placeholder="Enter mark">
 <?php submit('data36', 'fileproject', 'project', 'project36'); view_data2('data36', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend36" id = "attend" placeholder="Enter mark">
 <?php submit('data36', 'fileattend', 'attend', 'attend36'); view_data2('data36', 'fileattend', 'attend');?></div></div>
</td>



        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td></tr>
        <tr>
        <td>17</td>
    <td></td>
 <td><?php details('meentiesname','meenties2','name17','name17');?></td>
 <td><?php details('meentiesname','meenties2','cse17','cse17');?></td>
 <td><?php details('meentiesname','meenties2','gender17','gender17');?></td>
        


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel37" id = "nptel" placeholder="Enter mark">
 <?php submit('data37', 'filenptel', 'nptel', 'npte37'); view_data2('data37', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project37" id = "project" placeholder="Enter mark">
 <?php submit('data37', 'fileproject', 'project', 'project37'); view_data2('data37', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend37" id = "attend" placeholder="Enter mark">
 <?php submit('data37', 'fileattend', 'attend', 'attend37'); view_data2('data37', 'fileattend', 'attend');?></div></div>
</td>




        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr>

      <td>18</td>
    <td></td>
 <td><?php details('meentiesname','meenties2','name18','name18');?></td>
 <td><?php details('meentiesname','meenties2','cse18','cse18');?></td>
 <td><?php details('meentiesname','meenties2','gender18','gender18');?></td>
        


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel38" id = "nptel" placeholder="Enter mark">
 <?php submit('data38', 'filenptel', 'nptel', 'npte38'); view_data2('data38', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project38" id = "project" placeholder="Enter mark">
 <?php submit('data38', 'fileproject', 'project', 'project38'); view_data2('data38', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend38" id = "attend" placeholder="Enter mark">
 <?php submit('data38', 'fileattend', 'attend', 'attend38'); view_data2('data38', 'fileattend', 'attend');?></div></div>
</td>



        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr>

      <td>19</td>
    <td></td>
 <td><?php details('meentiesname','meenties2','name19','name19');?></td>
 <td><?php details('meentiesname','meenties2','cse19','cse19');?></td>
 <td><?php details('meentiesname','meenties2','gender19','gender19');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel39" id = "nptel" placeholder="Enter mark">
 <?php submit('data39', 'filenptel', 'nptel', 'npte39'); view_data2('data39', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project39" id = "project" placeholder="Enter mark">
 <?php submit('data39', 'fileproject', 'project', 'project39'); view_data2('data39', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend39" id = "attend" placeholder="Enter mark">
 <?php submit('data39', 'fileattend', 'attend', 'attend39'); view_data2('data39', 'fileattend', 'attend');?></div></div>
</td>

        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr>
    
      <td>20</td>
    <td></td>
 <td><?php details('meentiesname','meenties2','name20','name20');?></td>
 <td><?php details('meentiesname','meenties2','cse20','cse20');?></td>
 <td><?php details('meentiesname','meenties2','gender20','gender20');?></td>
        


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel40" id = "nptel" placeholder="Enter mark">
 <?php submit('data40', 'filenptel', 'nptel', 'npte40'); view_data2('data40', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project40" id = "project" placeholder="Enter mark">
 <?php submit('data40', 'fileproject', 'project', 'project40'); view_data2('data40', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend40" id = "attend" placeholder="Enter mark">
 <?php submit('data40', 'fileattend', 'attend', 'attend40'); view_data2('data40', 'fileattend', 'attend');?></div></div>
</td>



        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr>
    </tbody>
            </table>
        </section>
    </main>
</body>

</html>