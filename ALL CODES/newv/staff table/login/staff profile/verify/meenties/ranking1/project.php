<?php
$conn = mysqli_connect("localhost", "root", "", "test");
?>

<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <form action="staff table.php" method="get" enctype="multipart/form-data">
        <link rel="stylesheet" href="ranking style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>University website Design</title>
    <link rel="stylesheet" href="ranking style.css">
</head>

<body>


<?php
    


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


      function view_count($db_name, $table_name, $column_name) {
        $uploaded_values = get($db_name, $table_name, $column_name);
        $updated_value = array_sum($uploaded_values);
        return $updated_value;
      }

    function grades($student,$count){
        
        
        
        if ($count > 50) {
            return $grade = "O";
        } elseif ($count > 40) {
            return $grade = "A+";
        } elseif ($count > 30) {
            return $grade = "A";
        } elseif ($count > 20) {
            return $grade = "B+";
        } elseif ($count > 10) {
            return $grade = "B";
        } elseif ($count > 0) {
            return $grade = "F";
        } elseif ($count == 0) {
            return "null";
        }
    
    
}

    
    
    function details($db_name,$table_name,$column_name,$name_input){
        $conn = mysqli_connect("localhost", "root", "",$db_name);
        $result = mysqli_query($conn, "SELECT $column_name FROM $table_name WHERE $column_name=$column_name");
        $col = mysqli_fetch_array($result);
        return $col[$column_name];}
      
    // Calculate counts for each student for each category
    $counts_project = array(
        details('meentiesname','meenties1','name1','name1') => view_count('jairam', 'fileproject', 'project'),
        details('meentiesname','meenties1','name2','name2') => view_count('hari', 'fileproject', 'project'),
        details('meentiesname','meenties1','name3','name3') => view_count('example', 'fileproject', 'project'),
 
        details('meentiesname','meenties1','name4','name4') => view_count('data4', 'fileproject', 'project'),
        details('meentiesname','meenties1','name5','name5') => view_count('data5', 'fileproject', 'project'),
        details('meentiesname','meenties1','name6','name6') => view_count('data6', 'fileproject', 'project'),
 
        details('meentiesname','meenties1','name7','name7') => view_count('data7', 'fileproject', 'project'),
        details('meentiesname','meenties1','name8','name8') => view_count('data8', 'fileproject', 'project'),
        details('meentiesname','meenties1','name9','name9') => view_count('data9', 'fileproject', 'project'),
/* 
        details('meentiesname','meenties1','name10','name10') => view_count('data10', 'fileproject', 'project'),
        details('meentiesname','meenties1','name11','name11') => view_count('data11', 'fileproject', 'project'),
        details('meentiesname','meenties1','name12','name12') => view_count('data12', 'fileproject', 'project'),
 
        details('meentiesname','meenties1','name13','name13') => view_count('data13', 'fileproject', 'project'),
        details('meentiesname','meenties1','name14','name14') => view_count('data14', 'fileproject', 'project'),
        details('meentiesname','meenties1','name15','name15') => view_count('data15', 'fileproject', 'project'),
 
        details('meentiesname','meenties1','name16','name16') => view_count('data16', 'fileproject', 'project'),
        details('meentiesname','meenties1','name17','name17') => view_count('data17', 'fileproject', 'project'),
        details('meentiesname','meenties1','name18','name18') => view_count('data18', 'fileproject', 'project'),
 
        details('meentiesname','meenties1','name19','name19') => view_count('data19', 'fileproject', 'project'),
        details('meentiesname','meenties1','name20','name20') => view_count('data20', 'fileproject', 'project'),
 
        details('meentiesname','meenties2','name1','name1') => view_count('data21', 'fileproject', 'project'),
        details('meentiesname','meenties2','name2','name2') => view_count('data22', 'fileproject', 'project'),
        details('meentiesname','meenties2','name3','name3') => view_count('data23', 'fileproject', 'project'),
 
        details('meentiesname','meenties2','name4','name4') => view_count('data24', 'fileproject', 'project'),
        details('meentiesname','meenties2','name5','name5') => view_count('data25', 'fileproject', 'project'),
        details('meentiesname','meenties2','name6','name6') => view_count('data26', 'fileproject', 'project'),
 
        details('meentiesname','meenties2','name7','name7') => view_count('data27', 'fileproject', 'project'),
        details('meentiesname','meenties2','name8','name8') => view_count('data28', 'fileproject', 'project'),
        details('meentiesname','meenties2','name9','name9') => view_count('data29', 'fileproject', 'project'),
 
        details('meentiesname','meenties2','name10','name10') => view_count('data30', 'fileproject', 'project'),
        details('meentiesname','meenties2','name11','name11') => view_count('data31', 'fileproject', 'project'),
        details('meentiesname','meenties2','name12','name12') => view_count('data32', 'fileproject', 'project'),
 
        details('meentiesname','meenties2','name13','name13') => view_count('data33', 'fileproject', 'project'),
        details('meentiesname','meenties2','name14','name14') => view_count('data34', 'fileproject', 'project'),
        details('meentiesname','meenties2','name15','name15') => view_count('data35', 'fileproject', 'project'),
 
        details('meentiesname','meenties2','name16','name16') => view_count('data36', 'fileproject', 'project'),
        details('meentiesname','meenties2','name17','name17') => view_count('data37', 'fileproject', 'project'),
        details('meentiesname','meenties2','name18','name18') => view_count('data38', 'fileproject', 'project'),
 
        details('meentiesname','meenties2','name19','name19') => view_count('data39', 'fileproject', 'project'),
        details('meentiesname','meenties2','name20','name20') => view_count('data40', 'fileproject', 'project'),
 
   
        details('meentiesname','meenties3','name1','name1') => view_count('data41', 'fileproject', 'project'),
        details('meentiesname','meenties3','name2','name2') => view_count('data42', 'fileproject', 'project'),
        details('meentiesname','meenties3','name3','name3') => view_count('data43', 'fileproject', 'project'),
 
        details('meentiesname','meenties3','name4','name4') => view_count('data44', 'fileproject', 'project'),
        details('meentiesname','meenties3','name5','name5') => view_count('data45', 'fileproject', 'project'),
        details('meentiesname','meenties3','name6','name6') => view_count('data46', 'fileproject', 'project'),
 
        details('meentiesname','meenties3','name7','name7') => view_count('data47', 'fileproject', 'project'),
        details('meentiesname','meenties3','name8','name8') => view_count('data48', 'fileproject', 'project'),
        details('meentiesname','meenties3','name9','name9') => view_count('data49', 'fileproject', 'project'),
 
        details('meentiesname','meenties3','name10','name10') => view_count('data50', 'fileproject', 'project'),
        details('meentiesname','meenties3','name11','name11') => view_count('data51', 'fileproject', 'project'),
        details('meentiesname','meenties3','name12','name12') => view_count('data52', 'fileproject', 'project'),
 
        details('meentiesname','meenties3','name13','name13') => view_count('data53', 'fileproject', 'project'),
        details('meentiesname','meenties3','name14','name14') => view_count('data54', 'fileproject', 'project'),
        details('meentiesname','meenties3','name15','name15') => view_count('data55', 'fileproject', 'project'),
 
        details('meentiesname','meenties3','name16','name16') => view_count('data56', 'fileproject', 'project'),
        details('meentiesname','meenties3','name17','name17') => view_count('data57', 'fileproject', 'project'),
        details('meentiesname','meenties3','name18','name18') => view_count('data58', 'fileproject', 'project'),
 
        details('meentiesname','meenties3','name19','name19') => view_count('data59', 'fileproject', 'project'),
        details('meentiesname','meenties3','name20','name20') => view_count('data60', 'fileproject', 'project')*/
    );
    
    arsort($counts_project);
    ?>
<nav>
         <img src="logo.png"></a> <!-----collage logo-->
         <div class = "nav-links" id="navLinks">
             

      </div>
       
   </nav>
    <main class="table">
        <section class="table__header">
            <h1>Rankings for Project</h1>
            



        </section>


     <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> S.no <span class="icon-arrow">&DownArrow;</span></th>
                        <th> Name </th>
                        <th> Mark <span class="icon-arrow">&DownArrow;</span> </th>
                        <th> Grade </th>
                        
                    </tr>
                </thead>
                <tbody>
        <?php
      $i = 1;
      
       
        // Your query code here
    
    
        

    
      ?>
      </thead>
      

          <?php foreach ($counts_project as $student => $count) : ?>
                





      <tr>
      <td><?php echo $i++; ?></td>
        <td><?= $student ?></td>


        <td> <?= $count ?></td>
        <td><?= grades($student, $count)  ?>
      </tr>
      <?php endforeach; ?>
    </table>
    </section>
</body>
</html>