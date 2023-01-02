<?php
session_start();
?>
<!DOCTYPE html>
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
                    <?php
                    if(isset($_SESSION['authuser_name'])){
                        echo'
                <div class="col-1 d-flex justify-content-end text-light">
                     <h4>' .$_SESSION['authuser_name'].'</h4>
                </div>';
                    
                        echo'
                        <div class="col-1 d-flex justify-content-end">
                             <a href="logout.php" class="btn btn-outline-light rounded-pill">logout</a>
                        </div>
                        <div class="col-2 d-flex justify-content-end"> <a href="loginadmin.php" class="btn btn-outline-light rounded-pill">Login as Admin</a></div>';
                    }
                ?>
                    <div class="header text-center pt-5 text-light">
                        <h2>Its a big world out there, <br> Go Explore</h2>
                        <p class="pt-4">Thinking of taking a break from every days Busy Life? Dont Worry, <br> we take care of your trip</p>
                        <div class="header text-center pt-5 text-light">
                        
                            <!-- Form Area -->
                            <form action="s.php" method="post">
                                <div class="userHomeForm w-75 bg-light m-auto text-dark rounded-pill py-3 px-5 text-start">
                                        <div class="row" >
                                            <div class="col-4">
                                                <label for="">Location</label>
                                                <input class="form-control" type="text" name="area" placeholder="Write your think" style="border: 0px solid; background-color:transparent; padding-left:0px">
                                            </div>
                                            <div class="col-4">
                                                <label for="">Destination Type</label>
                                                <select name="type"  class="form-control" style="border: 0px solid; background-color:transparent; padding-left:0px;">
                                                    <option value="Mountain">Mountain Peak</option>
                                                    <option value="waterfall">Waterfall</option>
                                                    <option value="sea">Sea Beach</option>
                                                    <option value="campsite">Campsite</option>
                                                    <option value="trail">Hidden Trails</option>
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <input type="submit" class="btn btn-success rounded-pill btn-lg w-100 h-100 d-flex align-items-center justify-content-center"></input>
                                            </div>
                                        </div>
                                </div>
                            </form>
                       
                    </div>
                </div>
            </section>
<?php
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
        $query = "SELECT postid,avg(rating) as averageRating from post_rating GROUP BY postid order by avg(rating) desc limit 0,10";
        $result = mysqli_query($conn,$query) or die(mysqli_error());
        echo '<div class="print">
        <br>
        <br>
        <h3 align="center">Popular Destinations</h3>
        <br>
        <br>
        </div>';
        
   
        while($rows=mysqli_fetch_assoc($result))
        {

            $dest_id=$rows['postid'];
            $averagerating=$rows['averageRating'];
            $sq="SELECT * from destinations Where id='$dest_id'";
            $ress=mysqli_query($conn,$sq);
            $fetchdata = mysqli_fetch_array($ress);
            $title=$fetchdata['ttile'];
            $desc=$fetchdata['infor'];
            echo ' <div class="container">
                    
            ';
            echo "<img src='{$fetchdata['photo']}' width='30%' height='100%'>";
            echo '
                    
                        <h4 class="card-title"><a  href="rate.php?id='.$dest_id.'" class="text-dark">'. $title.'</h4>
                        <p class="card-text">Average Rating: '. $averagerating .'</p>
                        <br>
                        <br>
                
                </div>
            ';


                        
                        
            
           
    
            
     
      
        }
        

?>