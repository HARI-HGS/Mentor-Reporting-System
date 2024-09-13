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
    function view_count($db_name, $table_name, $column_name) {
        $conn = mysqli_connect('localhost', 'root', '', $db_name);
        $count = 0;
        $query = "SELECT COUNT(*) FROM $table_name WHERE $column_name IS NOT NULL";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $count = $row[0];
        return $count;
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
    $counts_workshop = array(
        details('meentiesname','meenties1','name1','name1') => view_count('jairam', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties1','name2','name2') => view_count('hari', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties1','name3','name3') => view_count('example', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties1','name4','name4') => view_count('data4', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties1','name5','name5') => view_count('data5', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties1','name6','name6') => view_count('data6', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties1','name7','name7') => view_count('data7', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties1','name8','name8') => view_count('data8', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties1','name9','name9') => view_count('data9', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties1','name10','name10') => view_count('data10', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties1','name11','name11') => view_count('data11', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties1','name12','name12') => view_count('data12', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties1','name13','name13') => view_count('data13', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties1','name14','name14') => view_count('data14', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties1','name15','name15') => view_count('data15', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties1','name16','name16') => view_count('data16', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties1','name17','name17') => view_count('data17', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties1','name18','name18') => view_count('data18', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties1','name19','name19') => view_count('data19', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties1','name20','name20') => view_count('data20', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties2','name1','name1') => view_count('data21', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties2','name2','name2') => view_count('data22', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties2','name3','name3') => view_count('data23', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties2','name4','name4') => view_count('data24', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties2','name5','name5') => view_count('data25', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties2','name6','name6') => view_count('data26', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties2','name7','name7') => view_count('data27', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties2','name8','name8') => view_count('data28', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties2','name9','name9') => view_count('data29', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties2','name10','name10') => view_count('data30', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties2','name11','name11') => view_count('data31', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties2','name12','name12') => view_count('data32', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties2','name13','name13') => view_count('data33', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties2','name14','name14') => view_count('data34', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties2','name15','name15') => view_count('data35', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties2','name16','name16') => view_count('data36', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties2','name17','name17') => view_count('data37', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties2','name18','name18') => view_count('data38', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties2','name19','name19') => view_count('data39', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties2','name20','name20') => view_count('data40', 'fileworkshop', 'workshop'),
 
   
        details('meentiesname','meenties3','name1','name1') => view_count('data41', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties3','name2','name2') => view_count('data42', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties3','name3','name3') => view_count('data43', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties3','name4','name4') => view_count('data44', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties3','name5','name5') => view_count('data45', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties3','name6','name6') => view_count('data46', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties3','name7','name7') => view_count('data47', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties3','name8','name8') => view_count('data48', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties3','name9','name9') => view_count('data49', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties3','name10','name10') => view_count('data50', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties3','name11','name11') => view_count('data51', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties3','name12','name12') => view_count('data52', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties3','name13','name13') => view_count('data53', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties3','name14','name14') => view_count('data54', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties3','name15','name15') => view_count('data55', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties3','name16','name16') => view_count('data56', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties3','name17','name17') => view_count('data57', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties3','name18','name18') => view_count('data58', 'fileworkshop', 'workshop'),
 
        details('meentiesname','meenties3','name19','name19') => view_count('data59', 'fileworkshop', 'workshop'),
        details('meentiesname','meenties3','name20','name20') => view_count('data60', 'fileworkshop', 'workshop')
    );
    
    arsort($counts_workshop);
    ?>
<nav>
         <img src="logo.png"></a> <!-----collage logo-->
         <div class = "nav-links" id="navLinks">
             
            <ul>
            <li><a href="http://localhost:8080/project/newup/"class="active">Home</a></li>
               <li><a href="internship.php">Internship</a></li>
               <li><a href="workshop.php">Workshop</a></li>
               <li><a href="paper presentation.php">Paper Prensentation</a></li>
               <li><a href="sports.php">Sport</a></li>
               <li><a href="http://localhost:8080/project/newup/staff%20table/staff%20table.php">Staff</a></li>
               
            </li>
         </ul>
      </div>
       
   </nav>
    <main class="table">
        <section class="table__header">
            <h1>Rankings for Internship</h1>
            



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
      

          <?php foreach ($counts_workshop as $student => $count) : ?>
                





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