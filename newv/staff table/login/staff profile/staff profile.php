<?php
$conn = mysqli_connect("localhost", "root", "", "test");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta name = "viewport" content="with=device-width , initial-scale=1.0">
<title>University website Design</title> 
    <link rel="stylesheet" type="text/css" href="staff profile style.css">
    <link rel="stylesheet" href="staff profile.php">
    <link rel="stylesheet" href="staff profile style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
</head>

<body>
    <section class="header">
        <nav>
        <div class="logo">
         <img src="verify/meenties/db image and doc/images/logo.jpg" alt="logo"></a> <!-----collage logo-->
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
        <?php
        if(isset($_GET['id'])){
            $student_id = mysqli_real_escape_string($conn, $_GET['id']);
            $query = "SELECT * FROM stafftable WHERE id='$student_id' ";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){$row = mysqli_fetch_array($query_run); ?>
            
            <div class="box" data-tilt>
                <div class="animation" >
                    <h1><b><?=$row['name'];?></b></h1>
                    <div class="pic">
                        <link rel="stylesheet" href="staff profile style.css">
                        <img src="verify/meenties/db image and doc/staff image/<?php echo $row["image"]; ?>" alt="Profile-card">
               
                    </div>
                    <div><p><h4>Department : <span><?=$row['department'];?></span>  Email :<span> <?=$row['email'];?></span></h4></p></div><br>
                    <div><p><h4>Phone :<span> <?=$row['phone'];?> </span>  StaffId :<span> 12345 </span></h4></p></div><br>
                    <div><p><h4>Education :<span> <?=$row['education'];?></span> Gender  :<span> <?=$row['staffid'];?> </span></h4></p></div><br>

                    <?php
    }else{echo "<h4>No Such Id Found</h4>";}}?>
                    <button class="btn btn-primary" >
                        <a href="verify/meenties/db image and doc/time table/<?php echo $row["timetable"]; ?>"  style="color: #fff; text-decoration: none;"><strong>Working Time</strong></a>
                    </button>
                    <button class="btn btn-primary" style="margin-left: 10px;">
                    <a href="verify/meenties/db image and doc/read more/<?php echo $row["readmore"]; ?>" style="color: #fff; text-decoration: none;"><strong>Read more</strong></a></button>
                    <button class="btn btn-primary" style="margin-left: 10px;">
                    <a href="verify/verify_meenties.php" style="color: #fff; text-decoration: none;"><strong>Meenties</strong></a></button>
                </div>
            </div>
        </section>
        <script src="vanilla-tilt.js"></script>
        <!--<script src="srcipt.js"></script>-->
        <script>
        // Get the element to animate
const formValue = document.querySelector('.animation');

// Set its initial position and opacity
formValue.style.transform = 'translateY(100%)';
formValue.style.opacity = '0';

// Animate the element on page load
window.addEventListener('load', () => {
    formValue.style.transition = 'transform 0.5s ease-in-out, opacity 0.5s ease-in-out';
    formValue.style.transform = 'translateY(0)';
    formValue.style.opacity = '1';
});

    </script>
    <!--<div class="sm">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-github"></a>
                    <a href="#" class="fab fa-youtube"></a>
                </div>-->
</body>

</html>
