<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="./css/styleLogin.css">
    <title>AKASH VAIA || PROJECT</title>
</head>
<body>
    <section class="hero">
        <div class="container">
            <div class="nav row pt-4">
                <div class="col-6 text-light"> <h4>Travel & Explore</h4></div>
                <div class="col-6 d-flex justify-content-end"> <a href="loginuser.php" class="btn btn-outline-light rounded-pill">Login as User</a></div>
            </div>
            <div class="header text-center pt-5 text-light">
                <h2>It's a big world out there, <br> Go Explore</h2>
                <p class="pt-4">Thinking of taking a break from every days Busy Life? Don't Worry, <br> we take care of your trip</p>
                <h3 class="my-5">Admin</h3>
            </div>
        </div>
    </section>
    <section class="blog mt-5">
        <div class="card_caurosel">
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <h2>Delete Blog</h2>
                            <p>Delete irrelevent blogs.Admin's duty is to maintain the system and validate the authenticity of informations</p>
                        </div>
                        <?php
                        $server= "localhost";
                        $username= "root";
                        $password= "";
                        $database="travel";
                        $variable=mysqli_connect($server,$username,$password,$database);
                        $s="SELECT * from blogs";
                        $prep=mysqli_query($variable,$s);
                        while($rows=mysqli_fetch_assoc($prep)){
                        $id=$rows['bid'];
                        $title=$rows['title'];
                        $desc=$rows['infor'];
                        echo'
                        <div class="col-12 mt-3">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">';
                                                    echo "<img src='{$rows['photo']}' width='40%' height='20%'>";
                                                    echo'
                                                    <div class="card-body">
                                                    <h3 class="card-title"> '. $title. '</h3>
                                                    <p class="card-text">'. $desc .'</p>
                                                    <h4><a href="deleteblog.php?id='.$id.'" class="text-danger">Delete Blog</a> </h4>
                                                    </div>;
                                                    
                                                </div>
                                            </div>
                                            <
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section class="destination mb-5">
        <div class="container">
            <h2 class="text-center">Add Destination</h2>
            <div class="w-75 mx-auto">
                <form action="adddest.php" method="post" enctype="multipart/form-data">
                    <div class="col-12">
                        <label for="">Destination Type</label>
                        <select name="type" id="type">
                        	<option value="Mountain">Mountain</option>
                            <option value="waterfall">Waterfall</option>
                            <option value="campsite">Camp site</option>
                            <option value="sea">Sea</option>
                            <option value="trail">Hidden Trails</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="">Title</label>
                        <input class="form-control" type="text" name="title">
                    </div>
                    <div class="col-6">
                        <label for="">Country Name</label>
                        <input class="form-control" type="text" name="country">
                    </div>
                    <div class="col-6">
                        <label for="">Region</label>
                        <input class="form-control" type="text" name="state">
                    </div>
                    <div class="col-6">
                        <label for="">Division</label>
                        <input class="form-control" type="text" name="division">
                    </div>
                    <div class="col-6">
                        <label for="">District</label>
                        <input class="form-control" type="text" name="dist">
                    </div>
                    <div class="col-12">
                        <label for="">Details</label>
                        <textarea name="info"  cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="col-12">
                        <label for="">Add Multiple Image</label><br>
                        <input type="file" name="image[]"  multiple><br><br>
                    </div>
                    <div class="col-12">
                    <input type="submit" value="CONFIRM" class="btn btn-success w-100 rounded-5">
                    </div>
                </form>
            </div>
        </div>
    </section>



    <!-- JavaScript Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html>