<?php
    include_once "db.php";
	// Check connection
    $conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
    
    $username=$_POST['name1'];
    $useremail=$_POST['email1'];
    $password1=$_POST['pass1'];
    $query2= "INSERT INTO `users` (`email`, `name`, `password`) VALUES ('$useremail', '$username', '$password1')";
    $result2=mysqli_query($conn,$query2);
    if(mysqli_affected_rows($conn)==1){
    header('location:userhome.php');
    }
    else{
        echo "failure";   
    }
?>