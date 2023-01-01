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
            </div>
            <?php
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
            <div class="header text-center pt-5 text-light">
                <h2>It's a big world out there, <br> Go Explore</h2>
                <p class="pt-4">Thinking of taking a break from every days Busy Life? Don't Worry, <br> we take care of your trip</p>
                <div class="header text-center pt-5 text-light">
                    <a href="addABlog.php" class="btn btn-success btn-lg rounded-pill px-5">Add a Blog</a>
                </div>
            </div>
        </div>
    </section>

    <section class="destination mb-5 mt-5">
        <div class="container">
            <h2 class="text-center">Add Blog</h2>
            <div class="w-75 mx-auto">
                <form action="addblogact.php" method="post" enctype="multipart/form-data">
                    <div class="col-12">
                        <label for="">Tittle</label>
                        <input class="form-control py-4" type="text" name="title">
                    </div>
                    <div class="col-12">
                        <label for="">Author name</label>
                        <input class="form-control py-4" type="text" name="name">
                    </div>
                    <div class="col-12">
                        <label for="">Details</label>
                        <textarea name="infor"  cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="col-12">
                        <label for="">Add Multiple Image</label><br>
                        <input type="file" name="image[]" class="py-4 w-100"  multiple><br><br>
                    </div>
                    <div class="col-12">
                    <input type="submit" value="CONFIRM" class="btn btn-lg btn-outline-success w-100 rounded-pill">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>