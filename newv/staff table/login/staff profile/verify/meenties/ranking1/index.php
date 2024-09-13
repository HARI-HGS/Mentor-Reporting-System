
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
                    <li><a href="#">About</a></li>
                    <li><a href="#">Course</a></li>
                    <li><a href="http://localhost:8080/project/newup/staff%20table/staff%20table.php">Staff</a></li>
                    <li><a href="#">Students</a></li>
                    
                </ul>
            </div>
        </nav>
		<marquee direction="left" scrollamount="5">
			<h3>Welcome to my website!</h3></marquee><br>
		<div class="container">
			<div class="left">
            <div class="box1"><p style="text-align: center;">News</p><br>
  <?php $i = 1; $rows = mysqli_query($conn, "SELECT * FROM filenews ORDER BY id DESC"); foreach ($rows as $row) : echo $i++."."; echo $row["news"]; ?><br>
  <?php endforeach; ?>
               
      </div>
            <div class="box1"><p style="text-align: center;">YouTube</p>
        <?php if($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
        $sql = "SELECT * FROM youtube";
        $result = $conn->query($sql);
        $i = 1;
        if($result->num_rows > 0) { 
          while($row = $result->fetch_assoc()) { ?>
          <div style="display: inline-block;">
          <p><?php echo $i++.". "; echo $row['name']; ?><a href="<?php echo $row['link']; ?>" target="_blank" class="btn btn-info btn-sm" style="margin-left: 10px; text-decoration: none;">click here</a></p>
        </div><br>
    
  <?php }  } ?>
</div>
<div class="box1"><p style="text-align: center;">Students</p><?php $i = 1; $rows = mysqli_query($conn, "SELECT * FROM placed ORDER BY id DESC"); 
        foreach ($rows as $row) : echo $i++."."; 
        echo $row["name"]."-";
        echo $row["company"]."-";
        echo $row["lpa"]."lpa"; ?>
        <?php endforeach; ?></div>
</div>
<div class="center">
    <div class="box2"><p style="text-align: center;">News</p><br></div> 
      
  <div class="box3"><p style="text-align: center;">News</p><br>
  <?php $i = 1; $rows = mysqli_query($conn, "SELECT * FROM filenews ORDER BY id DESC"); foreach ($rows as $row) : echo $i++."."; echo $row["news"]; ?><br>
  <?php endforeach; ?></div>
</div></section>
	</body></html>
