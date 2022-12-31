<?php
    session_start();
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="travel";
    // Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
    $strSQL= "SELECT * from `trips` ";
    $res=mysqli_query($conn,$strSQL);
    if(mysqli_affected_rows($conn)>=1){
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- CSS only -->
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="./css/styleLogin.css">
            <link rel="stylesheet" href="fontChange.css">
            <title>AKASH VAIA || PROJECT</title>
        </head>
        <body>
            <section class="hero">
                <div class="container">
                    <div class="nav row pt-4">
                        <div class="col-4 text-light"> <h4>Travel & Explore</h4></div>
                        <div class="col-4 text-light"> <div class="row">
                            <div class="col-4"> <a href="userhome.php" class="text-light">Home</a></div>
                            <div class="col-4"><a href="blogs.php" class="text-light">Blogs</a></div>
                            <div class="col-4"><a href="trips.php" class="text-light">Trips</a></div>
                        </div>
                    </div>
                        <div class="col-4 d-flex justify-content-end"> <a href="loginadmin.php" class="btn btn-outline-light rounded-pill">Login as Admin</a></div>
                    </div>';
                    
                    if(isset($_SESSION['authuser_name'])){
                        echo'
                <div class="col-2 d-flex justify-content-end">
                     <h3>' .$_SESSION['authuser_name'].'</h3>
                </div>';
                    
                        echo'
                        <div class="col-2 d-flex justify-content-end">
                             <a href="logout.php" class="btn btn-outline-light rounded-pill">logout</a>
                        </div>';
                    }
                ?>
                <?php
                echo'
            </div>
                    <div class="header text-center pt-5 text-light">
                        <h2>Its a big world out there, <br> Go Explore</h2>
                        <p class="pt-4">Thinking of taking a break from every days Busy Life? Dont Worry, <br> we take care of your trip</p>
                        <div class="header text-center pt-5 text-light">
                        <a href="addatrip.php" class="btn btn-success btn-lg rounded-pill px-5">Add a trip</a>
                    </div>
                </div>
            </section>
            <br>
            <br>
            <h1 align="center">Available Trips</h1>
            <br>
            <br>
            ';

        while($rows=mysqli_fetch_assoc($res))
        {
        
            $title=$rows['title'];
            $trip_id=$rows['tid'];
            $name=$rows['cname'];
            $route=$rows['route'];
            $cost=$rows['cost'];
            $start=$rows['start_date'];
            $details=$rows['infor'];
            $joined =$rows['joined'];
            $max= $rows['member'];
            $available= $max - $joined;


                                echo '<div class="container">';
                                echo "<img src='{$rows['photo']}' width='100%' height='100%'>";
                                echo'
                                    <h1>'. $title. '</h1>
                                    <p >Route: '. $route .'</p>
                                    <p >Creator: '. $name .'</p>
                                    <p >Approximate cost: '. $cost .'</p>
                                    <p >Joined Member: '. $joined .'</p>
                                    <p>available seat: '. $available .'</p>
                                    <p>start date: '. $start .'</p>
                                    <p>Tour details: '. $details .'</p>';
                                    if($available > 0){
                                        echo'
                                    <div class="btn btn-success"><a href="jointrip.php?id='.$trip_id.'" class="text-light">Join This Trip</a></div>
                                    ';
                                    }
                                    else{
                                        echo'
                                        <strong>Trip is full already</strong>
                                        ';

                                    }
                                    echo'
                                    
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        </div>
                        ';
        }
        
    }
    else{
        echo "failed";
    }

?>