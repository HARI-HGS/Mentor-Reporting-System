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
    <form action="meenties3.php" method="post" enctype="multipart/form-data">
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
                        
</td>

 <td><?php details('meentiesname','meenties3','name1','name1');?></td>
 <td><?php details('meentiesname','meenties3','cse1','cse1');?></td>
 <td><?php details('meentiesname','meenties3','gender1','gender1');?></td>
 


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel41" id = "nptel" placeholder="Enter mark">
 <?php submit('data41', 'filenptel', 'nptel', 'nptel41'); view_data('data41', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project41" id = "nptel" placeholder="Enter mark">
 <?php submit('data41', 'fileproject', 'project', 'project41'); view_data('data41', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend41" id = "attend" placeholder="Enter mark">
 <?php submit('data41', 'fileattend', 'attend', 'attend41'); view_data('data41', 'fileattend', 'attend');?></div></div>
</td>



    <td><button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
    </tr>
    <td contenteditable="true">2</td>
    <td>

</td>
<td><?php details('meentiesname','meenties3','name2','name2');?></td>
 <td><?php details('meentiesname','meenties3','cse2','cse2');?></td>
 <td><?php details('meentiesname','meenties3','gender2','gender2');?></td>
        

<td>
  <div class="form1">
    <div class="input-box">
    <input type="text" name="nptel42" id = "nptel" placeholder="Enter mark">
 <?php submit('data42', 'filenptel', 'nptel', 'nptel42');  view_data('data42', 'filenptel', 'nptel');?>
    </div>
  </div>


</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project42" id = "project" placeholder="Enter mark">
 <?php submit('data42', 'fileproject', 'project', 'project42'); view_data('data42', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend42" id = "attend" placeholder="Enter mark">
 <?php submit('data42', 'fileattend', 'attend', 'attend42'); view_data('data42', 'fileattend', 'attend');?></div></div>
</td>
 <td> <button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button> </td>

        </tr>
      <tr>

        <td>3</td>
        <td></td>
 <td><?php details('meentiesname','meenties3','name3','name3');?></td>
 <td><?php details('meentiesname','meenties3','cse3','cse3');?></td>
 <td><?php details('meentiesname','meenties3','gender3','gender3');?></td>
        

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel43" id = "nptel" placeholder="Enter mark">
 <?php submit('data43', 'filenptel', 'nptel', 'npte43'); view_data('data43', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project43" id = "project" placeholder="Enter mark">
 <?php submit('data43', 'fileproject', 'project', 'project43'); view_data('data43', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend43" id = "attend" placeholder="Enter mark">
 <?php submit('data43', 'fileattend', 'attend', 'attend43'); view_data('data43', 'fileattend', 'attend');?></div></div>
</td>
        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
        
      </tr>
   
      <tr>  <td>4</td>
      <td></td>
 <td><?php details('meentiesname','meenties3','name4','name4');?></td>
 <td><?php details('meentiesname','meenties3','cse4','cse4');?></td>
 <td><?php details('meentiesname','meenties3','gender4','gender4');?></td>
        


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel44" id = "nptel" placeholder="Enter mark">
 <?php submit('data44', 'filenptel', 'nptel', 'npte44'); view_data('data44', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project44" id = "project" placeholder="Enter mark">
 <?php submit('data44', 'fileproject', 'project', 'project44'); view_data('data44', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend44" id = "attend" placeholder="Enter mark">
 <?php submit('data44', 'fileattend', 'attend', 'attend44'); view_data('data44', 'fileattend', 'attend');?></div></div>
</td>
        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>
<tr>

<td>5</td>
    <td></td>
 <td><?php details('meentiesname','meenties3','name5','name5');?></td>
 <td><?php details('meentiesname','meenties3','cse5','cse5');?></td>
 <td><?php details('meentiesname','meenties3','gender5','gender5');?></td>
 
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel45" id = "nptel" placeholder="Enter mark">
 <?php submit('data45', 'filenptel', 'nptel', 'npte45'); view_data('data45', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project45" id = "project" placeholder="Enter mark">
 <?php submit('data45', 'fileproject', 'project', 'project45'); view_data('data45', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend45" id = "attend" placeholder="Enter mark">
 <?php submit('data45', 'fileattend', 'attend', 'attend45'); view_data('data45', 'fileattend', 'attend');?></div></div>
</td>



<td><button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
    </tr>
    <tr>
    <td>6</td>
    <td></td>
 <td><?php details('meentiesname','meenties3','name6','name6');?></td>
 <td><?php details('meentiesname','meenties3','cse6','cse6');?></td>
 <td><?php details('meentiesname','meenties3','gender6','gender6');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel46" id = "nptel" placeholder="Enter mark">
 <?php submit('data46', 'filenptel', 'nptel', 'npte46'); view_data('data46', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project46" id = "project" placeholder="Enter mark">
 <?php submit('data46', 'fileproject', 'project', 'project46'); view_data('data46', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend46" id = "attend" placeholder="Enter mark">
 <?php submit('data46', 'fileattend', 'attend', 'attend46'); view_data('data46', 'fileattend', 'attend');?></div></div>
</td>




        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>



      </tr> <tr><td>7</td>
    <td></td>
 <td><?php details('meentiesname','meenties3','name7','name7');?></td>
 <td><?php details('meentiesname','meenties3','cse7','cse7');?></td>
 <td><?php details('meentiesname','meenties3','gender7','gender7');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel47" id = "nptel" placeholder="Enter mark">
 <?php submit('data47', 'filenptel', 'nptel', 'npte47'); view_data('data47', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project47" id = "project" placeholder="Enter mark">
 <?php submit('data47', 'fileproject', 'project', 'project47'); view_data('data47', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend47" id = "attend" placeholder="Enter mark">
 <?php submit('data47', 'fileattend', 'attend', 'attend47'); view_data('data47', 'fileattend', 'attend');?></div></div>
</td>
        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr>
      <tr>
      <td>8</td>
    <td></td>
 <td><?php details('meentiesname','meenties3','name8','name8');?></td>
 <td><?php details('meentiesname','meenties3','cse8','cse8');?></td>
 <td><?php details('meentiesname','meenties3','gender8','gender8');?></td>
        



<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel48" id = "nptel" placeholder="Enter mark">
 <?php submit('data48', 'filenptel', 'nptel', 'npte48'); view_data('data48', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project48" id = "project" placeholder="Enter mark">
 <?php submit('data48', 'fileproject', 'project', 'project48'); view_data('data48', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend48" id = "attend" placeholder="Enter mark">
 <?php submit('data48', 'fileattend', 'attend', 'attend48'); view_data('data48', 'fileattend', 'attend');?></div></div>
</td>


        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr><tr>
      <td>9</td>
    <td></td>
 <td><?php details('meentiesname','meenties3','name9','name9');?></td>
 <td><?php details('meentiesname','meenties3','cse9','cse9');?></td>
 <td><?php details('meentiesname','meenties3','gender9','gender9');?></td>
        


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel49" id = "nptel" placeholder="Enter mark">
 <?php submit('data49', 'filenptel', 'nptel', 'npte49'); view_data('data49', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project49" id = "project" placeholder="Enter mark">
 <?php submit('data49', 'fileproject', 'project', 'project49'); view_data('data49', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend49" id = "attend" placeholder="Enter mark">
 <?php submit('data49', 'fileattend', 'attend', 'attend49'); view_data('data49', 'fileattend', 'attend');?></div></div>
</td>



        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr><tr>
      <td>10</td>
    <td></td>
 <td><?php details('meentiesname','meenties3','name10','name10');?></td>
 <td><?php details('meentiesname','meenties3','cse10','cse10');?></td>
 <td><?php details('meentiesname','meenties3','gender10','gender10');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel50" id = "nptel" placeholder="Enter mark">
 <?php submit('data50', 'filenptel', 'nptel', 'npte50'); view_data('data50', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project50" id = "project" placeholder="Enter mark">
 <?php submit('data50', 'fileproject', 'project', 'project50'); view_data('data50', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend50" id = "attend" placeholder="Enter mark">
 <?php submit('data50', 'fileattend', 'attend', 'attend50'); view_data('data50', 'fileattend', 'attend');?></div></div>
</td>

        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr>
      <tr>

                    <td>11</td>
                    <td>
                       
</td>

 <td><?php details('meentiesname','meenties3','name11','name11');?></td>
 <td><?php details('meentiesname','meenties3','cse11','cse11');?></td>
 <td><?php details('meentiesname','meenties3','gender11','gender11');?></td>
 
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel51" id = "nptel" placeholder="Enter mark">
 <?php submit('data51', 'filenptel', 'nptel', 'npte51'); view_data('data51', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project51" id = "project" placeholder="Enter mark">
 <?php submit('data51', 'fileproject', 'project', 'project51'); view_data('data11', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend11" id = "attend" placeholder="Enter mark">
 <?php submit('data51', 'fileattend', 'attend', 'attend51'); view_data('data51', 'fileattend', 'attend');?></div></div>
</td>




    <td><button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
    </tr>
    <tr>
      <td>12</td>
    <td>

</td>
<td><?php details('meentiesname','meenties3','name12','name12');?></td>
 <td><?php details('meentiesname','meenties3','cse12','cse12');?></td>
 <td><?php details('meentiesname','meenties3','gender12','gender12');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel52" id = "nptel" placeholder="Enter mark">
 <?php submit('data52', 'filenptel', 'nptel', 'npte52'); view_data('data52', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project52" id = "project" placeholder="Enter mark">
 <?php submit('data52', 'fileproject', 'project', 'project52'); view_data('data52', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend12" id = "attend" placeholder="Enter mark">
 <?php submit('data52', 'fileattend', 'attend', 'attend12'); view_data('data52', 'fileattend', 'attend');?></div></div>
</td>



 <td> <button type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button> </td>
    </tr>
    <td>13</td>
        <td></td>
 <td><?php details('meentiesname','meenties3','name13','name13');?></td>
 <td><?php details('meentiesname','meenties3','cse13','cse13');?></td>
 <td><?php details('meentiesname','meenties3','gender13','gende13');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel53" id = "nptel" placeholder="Enter mark">
 <?php submit('data53', 'filenptel', 'nptel', 'npte53'); view_data('data53', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project53" id = "project" placeholder="Enter mark">
 <?php submit('data53', 'fileproject', 'project', 'project53'); view_data('data53', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend53" id = "attend" placeholder="Enter mark">
 <?php submit('data53', 'fileattend', 'attend', 'attend53'); view_data('data53', 'fileattend', 'attend');?></div></div>
</td>




        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
        
      </tr>
      <tr>  <td>14</td>
      <td></td>
 <td><?php details('meentiesname','meenties3','name14','name14');?></td>
 <td><?php details('meentiesname','meenties3','cse14','cse14');?></td>
 <td><?php details('meentiesname','meenties3','gender14','gender14');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel54" id = "nptel" placeholder="Enter mark">
 <?php submit('data54', 'filenptel', 'nptel', 'npte54'); view_data('data54', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project54" id = "project" placeholder="Enter mark">
 <?php submit('data54', 'fileproject', 'project', 'project54'); view_data('data54', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend54" id = "attend" placeholder="Enter mark">
 <?php submit('data54', 'fileattend', 'attend', 'attend54'); view_data('data54', 'fileattend', 'attend');?></div></div>
</td>




        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
</tr>

<td>15</td>
    <td></td>
 <td><?php details('meentiesname','meenties3','name15','name15');?></td>
 <td><?php details('meentiesname','meenties3','cse15','cse15');?></td>
 <td><?php details('meentiesname','meenties3','gender15','gender15');?></td>
 


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel55" id = "nptel" placeholder="Enter mark">
 <?php submit('data55', 'filenptel', 'nptel', 'npte55'); view_data('data55', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project55" id = "project" placeholder="Enter mark">
 <?php submit('data55', 'fileproject', 'project', 'project55'); view_data('data55', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend55" id = "attend" placeholder="Enter mark">
 <?php submit('data55', 'fileattend', 'attend', 'attend55'); view_data('data55', 'fileattend', 'attend');?></div></div>
</td>



    <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
    </tr>

    <td>16</td>
    <td></td>
 <td><?php details('meentiesname','meenties3','name16','name16');?></td>
 <td><?php details('meentiesname','meenties3','cse16','cse16');?></td>
 <td><?php details('meentiesname','meenties3','gender16','gender16');?></td>
        

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel56" id = "nptel" placeholder="Enter mark">
 <?php submit('data56', 'filenptel', 'nptel', 'npte56'); view_data('data56', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project56" id = "project" placeholder="Enter mark">
 <?php submit('data56', 'fileproject', 'project', 'project56'); view_data('data56', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend56" id = "attend" placeholder="Enter mark">
 <?php submit('data56', 'fileattend', 'attend', 'attend56'); view_data('data56', 'fileattend', 'attend');?></div></div>
</td>



        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td></tr>
        <tr>
        <td>17</td>
    <td></td>
 <td><?php details('meentiesname','meenties3','name17','name17');?></td>
 <td><?php details('meentiesname','meenties3','cse17','cse17');?></td>
 <td><?php details('meentiesname','meenties3','gender17','gender17');?></td>
        


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel57" id = "nptel" placeholder="Enter mark">
 <?php submit('data57', 'filenptel', 'nptel', 'npte57'); view_data('data57', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project57" id = "project" placeholder="Enter mark">
 <?php submit('data57', 'fileproject', 'project', 'project57'); view_data('data57', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend57" id = "attend" placeholder="Enter mark">
 <?php submit('data57', 'fileattend', 'attend', 'attend57'); view_data('data57', 'fileattend', 'attend');?></div></div>
</td>




        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr>

      <td>18</td>
    <td></td>
 <td><?php details('meentiesname','meenties3','name18','name18');?></td>
 <td><?php details('meentiesname','meenties3','cse18','cse18');?></td>
 <td><?php details('meentiesname','meenties3','gender18','gender18');?></td>
        


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel58" id = "nptel" placeholder="Enter mark">
 <?php submit('data58', 'filenptel', 'nptel', 'npte58'); view_data('data58', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project58" id = "project" placeholder="Enter mark">
 <?php submit('data58', 'fileproject', 'project', 'project18'); view_data('data58', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend58" id = "attend" placeholder="Enter mark">
 <?php submit('data58', 'fileattend', 'attend', 'attend58'); view_data('data58', 'fileattend', 'attend');?></div></div>
</td>



        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr>

      <td>19</td>
    <td></td>
 <td><?php details('meentiesname','meenties3','name19','name19');?></td>
 <td><?php details('meentiesname','meenties3','cse19','cse19');?></td>
 <td><?php details('meentiesname','meenties3','gender19','gender19');?></td>
        
<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel59" id = "nptel" placeholder="Enter mark">
 <?php submit('data59', 'filenptel', 'nptel', 'npte59'); view_data('data59', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project59" id = "project" placeholder="Enter mark">
 <?php submit('data59', 'fileproject', 'project', 'project59'); view_data('data59', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend59" id = "attend" placeholder="Enter mark">
 <?php submit('data59', 'fileattend', 'attend', 'attend59'); view_data('data59', 'fileattend', 'attend');?></div></div>
</td>

        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr>
    
      <td>20</td>
    <td></td>
 <td><?php details('meentiesname','meenties3','name20','name20');?></td>
 <td><?php details('meentiesname','meenties3','cse20','cse20');?></td>
 <td><?php details('meentiesname','meenties3','gender20','gender20');?></td>
        


<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="nptel60" id = "nptel" placeholder="Enter mark">
 <?php submit('data60', 'filenptel', 'nptel', 'npte60'); view_data('data60', 'filenptel', 'nptel');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="project60" id = "project" placeholder="Enter mark">
 <?php submit('data60', 'fileproject', 'project', 'project60'); view_data('data60', 'fileproject', 'project');?></div></div>
</td>

<td>
<div class="form1">
    <div class="input-box">

<input type="text" name="attend60" id = "attend" placeholder="Enter mark">
 <?php submit('data60', 'fileattend', 'attend', 'attend60'); view_data('data60', 'fileattend', 'attend');?></div></div>
</td>



        <td> <button  type="submit" name="submit" class="btn btn-primary"> <strong> Upload </strong> </button></td>
      </tr>
    </tbody>
            </table>
        </section>
    </main>
</body>

</html>