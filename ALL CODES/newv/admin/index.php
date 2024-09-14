<?php
$conn = mysqli_connect("localhost", "root", "", "test");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta name = "viewport" content="with=device-width , initial-scale=1.0">
<title>University website Design</title> 
    <link rel="stylesheet" type="text/css" href="box style.css">
    <link rel="stylesheet" href="box.html">
    <link rel="stylesheet" href="staff profile style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
</head>

<body>
    <section class="header">
        <nav>
        <div class="logo">
         <img src="logo.jpg" alt="logo"></a> <!-----collage logo-->
        </div>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="http://localhost:8080/project/newup/" class="active">Home</a></li>
                    
                    <li><a href="#">Course</a></li>
                    <li><a href="http://localhost:8080/project/1/website1/staff%20table/login/staff%20profile/verify/meenties/ranking/index.php">Ranking</a></li>
                    <li><a href="add news.php">News</a></li>
                    <li><a href="add placed.php">placed</a></li>
                    <li><a href="add links.php">link</a></li>
                    
                </ul>
            </div>
        </nav>
		<marquee direction="left" scrollamount="5">
			<h3>Welcome to my website!</h3></marquee><br>
		<div class="container">
    <div class="left"><div class="box1"><p style="text-align: center;">News</p><br><br>
    <?php $i = 1; $rows = mysqli_query($conn, "SELECT * FROM filenews ORDER BY id DESC"); foreach ($rows as $row) : echo $i++."."; echo $row["news"]; ?>
    <form action='news delete.php' method='POST'style="display: inline;margin-left: 10px;">
          <input type='hidden' name='id' value='<?php echo $row["id"]; ?>'>
          <button type='submit' name='delete' class="btn btn-danger btn-sm">delete</button></form><br>
  <?php endforeach; ?></div></div>
    
            
    
  

			  <!--<div>
                <main class="table"> http://localhost:8080/project/1/website1/staff%20table/login/staff%20profile/verify/meenties/ranking/internship.php
                    <section class="table__header">
                        <h1>Customer's Orders</h1>
                        
                    </section>
                <section class="table__body">
                    <table>
                        <thead>
                            <tr>
                                <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Customer <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Order Date <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Amount <span class="icon-arrow">&UpArrow;</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1 </td>
                                <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>
                                <td> Seoul </td>
                                <td> 17 Dec, 2022 </td>
                                <td>
                                    <p class="status delivered">Delivered</p>
                                </td>
                                <td> <strong> $128.90 </strong></td>
                            </tr>
                            <tr>
                                <td> 2 </td>
                                <td><img src="images/Jeet Saru.jpg" alt=""> Jeet Saru </td>
                                <td> Kathmandu </td>
                                <td> 27 Aug, 2023 </td>
                                <td>
                                    <p class="status cancelled">Cancelled</p>
                                </td>
                                <td> <strong>$5350.50</strong> </td>
                            </tr>
                            <tr>
                                <td> 3</td>
                                <td><img src="images/Sonal Gharti.jpg" alt=""> Sonal Gharti </td>
                                <td> Tokyo </td>
                                <td> 14 Mar, 2023 </td>
                                <td>
                                    <p class="status shipped">Shipped</p>
                                </td>
                                <td> <strong>$210.40</strong> </td>
                            </tr></tbody></table></section>
              </div>
      </div>-->
			<div class="center">
			  <div class="box2"><p style="text-align: center;">YouTube</p><br><br>
        <?php
// check if there are any saved videos
$conn = new mysqli("localhost", "root", "", "test");
if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM youtube";
$result = $conn->query($sql);
$i = 1;
if($result->num_rows > 0) { ?>

  <?php while($row = $result->fetch_assoc()) { ?>
    
     <div style="display: inline-block;">
        <p><?php echo $i++."."; echo $row['name']; ?><a href="<?php echo $row['link']; ?>" target="_blank" class="btn btn-info btn-sm" style="margin-left: 10px; text-decoration: none;">click here</a></p></div>
        <div style="display: inline-block;">
      <form action='youtube delete .php' method='POST'>
          <input type='hidden' name='id' value='<?php echo $row["id"]; ?>'>
          <button type='submit' name='delete' class="btn btn-danger btn-sm">delete</button></form></div><br>
    
  <?php } ?>

<?php } 

?>


      </div>
      </div>
      <div class="right"><div class="box3"><p style="text-align: center;">Placed</p><br><br><?php $i = 1; $rows = mysqli_query($conn, "SELECT * FROM placed ORDER BY id DESC"); 
        foreach ($rows as $row) : echo $i++."."; 
        echo $row["name"]."-";
        echo $row["company"]."-";
        echo $row["lpa"]."lpa"; ?>
        
        <form action='placed delete.php' method='POST'style="display: inline;margin-left: 10px;">
          <input type='hidden' name='id' value='<?php echo $row["id"]; ?>'>
          <button type='submit' name='delete' class="btn btn-danger btn-sm">delete</button></form><br>
              <?php endforeach; ?></div></div>
      
			
			
		  </section>
	</body></html>

  
