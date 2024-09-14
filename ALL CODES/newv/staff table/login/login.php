<?php
    
        $conn = mysqli_connect("localhost", "root", "", "test");

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $email = $_POST['email'];
            $password = $_POST['pass'];


            $result = mysqli_query($conn, "SELECT * FROM stafftable WHERE email='$email' AND pass='$password'");
		
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);

                $id = $row['id'];

        
                header("Location: staff profile/staff profile.php?id=$id");
                exit;
            } else {
                echo "Invalid email or password.";
            }
        }
        ?>