<?php
$conn = mysqli_connect("localhost", "root", "", "test");
?>

<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <form action="staff table.php" method="get" enctype="multipart/form-data">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>University website Design</title>
    <link rel="stylesheet" href="staff table style.css">
</head>

<body>
<nav>
  <div class="logo">
         <img src="login/staff profile/verify/meenties/db image and doc/images/logo.jpg" alt="logo"></a> <!-----collage logo-->
  </div>
         <div class = "nav-links" id="navLinks">
             
            <ul>
               <li><a href="http://localhost:8080/project/newup/"class="active">Home</a></li>
               <li><a href="#">About</a></li>
               <li><a href="#">Course</a></li>
               <li><a href="http://localhost:8080/project/newup/staff%20table/staff%20table.php">Staff</a></li>
               
            </li>
         </ul>
      </div>
       
   </nav>
    <main class="table">
        <section class="table__header">
            <h1>Staff Table</h1>
            
<form method="get">
  <div class="input-group">
       <input type="text" name="search_term" placeholder="Search by name or department">
       <input type="submit" name="search_button" value="Search">
       <img src="login/staff profile/verify/meenties/db image and doc/images/search.png" alt="">
      </div>
     </form>


        </section>


     <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> S.no <span class="icon-arrow">&DownArrow;</span></th>
                        <th> Image </th>
                        <th> Name </th>
                        <th> Department </th> 
                        <th> Profile <span class="icon-arrow">&DownArrow;</span></th>
                        
                    </tr>
                </thead>
                <tbody>
        <?php
      $i = 1;
      
       
        // Your query code here
    
    
        $search_term = isset($_GET['search_term']) ? $_GET['search_term'] : '';
        if (!empty($search_term)) {
          $rows = mysqli_query($conn, "SELECT * FROM stafftable WHERE name LIKE '%{$search_term}%' OR department LIKE '%{$search_term}%' ORDER BY id DESC");
        } else {
          $rows = mysqli_query($conn, "SELECT * FROM stafftable ORDER BY id DESC");
        }

    
      ?>
      </thead>
      
        
        <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><div class="student">
          <div class="image-container">
          <img src="login/staff profile/verify/meenties/db image and doc/staff image/<?php echo $row["image"]; ?>" width = "100" height="100" title="<?php echo $row['image']; ?>">
          </div></div>
      </td>


        <td> <?php echo $row["name"]; ?></td>
        <td><?php echo $row["department"];?></td> 
        <td>
        <form action='delete.php' method='POST'>
          <input type='hidden' name='id' value='<?php echo $row["id"]; ?>'>
          
        </form>
        <a href="login/index.html" class="btn btn-info btn-sm"><i class = "fas fa-eye"></i></a>
        </td> 
      </tr>
      <?php endforeach; ?>
    </table>
    </section>
</body>
</html>