
<?php
include_once 'dbh.php';
$email = $_POST['email'];
$pass = $_POST['pass'];

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {






$query = "SELECT * FROM register WHERE email = '$email' AND password = '$pass'";
        $user = mysqli_query($conn, $query);
        if (mysqli_num_rows($user) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            
            
            $sql="INSERT INTO login (email,password) VALUES ('$email','$pass') ;";
            mysqli_query($conn,$sql);
            header("Location: ../choice.php?signup=success");
        }
        else
        {
            echo 'your credentials are wrong';
            header("refresh:2; url=index.php");
        }
        }
        
?>
