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
    <meta name="markport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>University website Design</title>
    <link rel="stylesheet" href="ranking style.css">
</head>

<body>


<?php
    function mark($db_name, $table_name, $column_name) {
        $conn = mysqli_connect('localhost', 'root', '', $db_name);
        $count = 0;
        $query = "SELECT COUNT(*) FROM $table_name WHERE $column_name IS NOT NULL";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $count = $row[0];
        return $count;
    }
    /*

    function mark($db_name, $table_name, $column_name) {
        $conn = mysqli_connect('localhost', 'root', '', $db_name);
        $count1 = 0;
        $count2 = 0;
        $count3 = 0;
        $count4 = 0;
        
        $query1 = "SELECT COUNT(*) FROM filedownload WHERE filename IS NOT NULL";
        $query2 = "SELECT COUNT(*) FROM filepaper WHERE paper IS NOT NULL";
        $query3 = "SELECT COUNT(*) FROM filesports WHERE sports IS NOT NULL";
        $query4 = "SELECT COUNT(*) FROM fileworkshop WHERE workshop IS NOT NULL";
        
        $result1 = mysqli_query($conn, $query1);
        $result2 = mysqli_query($conn, $query2);
        $result3 = mysqli_query($conn, $query3);
        $result4 = mysqli_query($conn, $query4);
        
        $row1 = mysqli_fetch_array($result1);
        $row2 = mysqli_fetch_array($result2);
        $row3 = mysqli_fetch_array($result3);
        $row4 = mysqli_fetch_array($result4);
        
        $count1 = $row1[0];
        $count2 = $row2[0];
        $count3 = $row3[0];
        $count4 = $row4[0];
        
        $count = $count1 + $count2*1.5 + $count4*1.5 + $count3*1.5;
        
        return $count;
    }*/
    

    function grades($count){
        
        
        
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
        return $col[$column_name];

       

    }
      
    // Calculate counts for each student for each category
    $counts_internship = array(
        details('meentiesname','meenties1','name1','name1') => mark('jairam', 'filedownload', 'filename'),
        details('meentiesname','meenties1','name2','name2') => mark('hari', 'filedownload', 'intern'),
        details('meentiesname','meenties1','name3','name3') => mark('example', 'filedownload', 'filename'),
 
        details('meentiesname','meenties1','name4','name4') => mark('data4', 'filedownload', 'filename'),
        details('meentiesname','meenties1','name5','name5') => mark('data5', 'filedownload', 'filename'),
        details('meentiesname','meenties1','name6','name6') => mark('data6', 'filedownload', 'filename'),
 
        details('meentiesname','meenties1','name7','name7') => mark('data7', 'filedownload', 'filename'),
        details('meentiesname','meenties1','name8','name8') => mark('data8', 'filedownload', 'filename'),
        details('meentiesname','meenties1','name9','name9') => mark('data9', 'filedownload', 'filename'),
 
        details('meentiesname','meenties1','name10','name10') => mark('data10', 'filedownload', 'filename'),
        details('meentiesname','meenties1','name11','name11') => mark('data11', 'filedownload', 'filename'),
        details('meentiesname','meenties1','name12','name12') => mark('data12', 'filedownload', 'filename'),
 
        details('meentiesname','meenties1','name13','name13') => mark('data13', 'filedownload', 'filename'),
        details('meentiesname','meenties1','name14','name14') => mark('data14', 'filedownload', 'filename'),
        details('meentiesname','meenties1','name15','name15') => mark('data15', 'filedownload', 'filename'),
 
        details('meentiesname','meenties1','name16','name16') => mark('data16', 'filedownload', 'filename'),
        details('meentiesname','meenties1','name17','name17') => mark('data17', 'filedownload', 'filename'),
        details('meentiesname','meenties1','name18','name18') => mark('data18', 'filedownload', 'filename'),
 
        details('meentiesname','meenties1','name19','name19') => mark('data19', 'filedownload', 'filename'),
        details('meentiesname','meenties1','name20','name20') => mark('data20', 'filedownload', 'filename'),
/*
       details('meentiesname','meenties2','name1','name1')=> mark('data21', 'filedownload', 'filename'),
       details('meentiesname','meenties2','name2','name2') => mark('data22', 'filedownload', 'filename'),
       details('meentiesname','meenties2','name3','name3') => mark('data23', 'filedownload', 'filename'),

       details('meentiesname','meenties2','name4','name4') => mark('data24', 'filedownload', 'filename'),
       details('meentiesname','meenties2','name5','name5') => mark('data25', 'filedownload', 'filename'),
       details('meentiesname','meenties2','name6','name6') => mark('data26', 'filedownload', 'filename'),

       details('meentiesname','meenties2','name7','name7') => mark('data27', 'filedownload', 'filename'),
       details('meentiesname','meenties2','name8','name8') => mark('data28', 'filedownload', 'filename'),
       details('meentiesname','meenties2','name9','name9') => mark('data29', 'filedownload', 'filename'),

       details('meentiesname','meenties2','name10','name10') => mark('data30', 'filedownload', 'filename'),
       details('meentiesname','meenties2','name11','name11') => mark('data31', 'filedownload', 'filename'),
       details('meentiesname','meenties2','name12','name12') => mark('data32', 'filedownload', 'filename'),

       details('meentiesname','meenties2','name13','name13') => mark('data33', 'filedownload', 'filename'),
       details('meentiesname','meenties2','name14','name14') => mark('data34', 'filedownload', 'filename'),
       details('meentiesname','meenties2','name15','name15') => mark('data35', 'filedownload', 'filename'),

       details('meentiesname','meenties2','name16','name16') => mark('data36', 'filedownload', 'filename'),
       details('meentiesname','meenties2','name17','name17') => mark('data37', 'filedownload', 'filename'),
       details('meentiesname','meenties2','name18','name18') => mark('data38', 'filedownload', 'filename'),

       details('meentiesname','meenties2','name19','name19') => mark('data39', 'filedownload', 'filename'),
       details('meentiesname','meenties2','name20','name20') => mark('data40', 'filedownload', 'filename'),

       details('meentiesname','meenties3','name1','name1') => mark('data41', 'filedownload', 'filename'),
       details('meentiesname','meenties3','name2','name2') => mark('data42', 'filedownload', 'filename'),
       details('meentiesname','meenties3','name3','name3') => mark('data43', 'filedownload', 'filename'),

       details('meentiesname','meenties3','name4','name4') => mark('data44', 'filedownload', 'filename'),
       details('meentiesname','meenties3','name5','name5') => mark('data45', 'filedownload', 'filename'),
       details('meentiesname','meenties3','name6','name6') => mark('data46', 'filedownload', 'filename'),

       details('meentiesname','meenties3','name7','name7') => mark('data47', 'filedownload', 'filename'),
       details('meentiesname','meenties3','name8','name8') => mark('data48', 'filedownload', 'filename'),
       details('meentiesname','meenties3','name9','name9') => mark('data49', 'filedownload', 'filename'),

       details('meentiesname','meenties3','name10','name10') => mark('data50', 'filedownload', 'filename'),
       details('meentiesname','meenties3','name11','name11') => mark('data51', 'filedownload', 'filename'),
       details('meentiesname','meenties3','name12','name12') => mark('data52', 'filedownload', 'filename'),

       details('meentiesname','meenties3','name13','name13') => mark('data53', 'filedownload', 'filename'),
       details('meentiesname','meenties3','name14','name14') => mark('data54', 'filedownload', 'filename'),
       details('meentiesname','meenties3','name15','name15') => mark('data55', 'filedownload', 'filename'),

       details('meentiesname','meenties3','name16','name16') => mark('data56', 'filedownload', 'filename'),
       details('meentiesname','meenties3','name17','name17') => mark('data57', 'filedownload', 'filename'),
       details('meentiesname','meenties3','name18','name18') => mark('data58', 'filedownload', 'filename'),

       details('meentiesname','meenties3','name19','name19') => mark('data59', 'filedownload', 'filename'),
       details('meentiesname','meenties3','name20','name20') => mark('data60', 'filedownload', 'filename') */
    );
    
    arsort($counts_internship);
    ?>
<nav>
         <img src="logo.png"></a> <!-----collage logo-->
         <div class = "nav-links" id="navLinks">
             
            <ul>
               <li><a href="http://localhost:8080/project/newup/"class="active">Home</a></li>
               
               <li><a href="workshop.php">Workshop</a></li>
               <li><a href="paper presentation.php">Paper Prensentation</a></li>
               <li><a href="sports.php">Sport</a></li>
               <li><a href="http://localhost:8080/project/newup/staff%20table/staff%20table.php">Staff</a></li>
               <li><a href="attend.php">attend</a></li>
               <li><a href="nptel.php">nptel</a></li>
               <li><a href="project.php">project</a></li>
             

               
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
      

          <?php foreach ($counts_internship as $student => $count) : ?>
                





      <tr>
        <td><?php echo $i++; ?></td>
        <td><?= $student ?></td>


        <td> <?= $count ?></td>
        <td><?= grades($count)  ?>
        
          
        
      </tr>
      <?php endforeach; ?>
    </table>
    </section>
</body>
</html>