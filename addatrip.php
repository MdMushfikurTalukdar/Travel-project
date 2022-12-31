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
                <h3 class="my-5">Trips</h3>
            </div>
        </div>
    </section>
    <section class="destination mb-5">
        <div class="container">
            <h2 class="text-center">Create a Trip</h2>
            <div class="w-75 mx-auto">
                <form action="addatripaction.php" method="post" enctype="multipart/form-data">
                    <div class="col-6">
                        <label for="">Title</label>
                        <input class="form-control" type="text" name="title">
                    </div>
                    <div class="col-6">
                        <label for="">Creator name</label>
                        <input class="form-control" type="text" name="cname">
                    </div>
                    <div class="col-6">
                        <label for="">Route</label>
                        <input class="form-control" type="text" name="route">
                    </div>
                    <div class="col-6">
                        <label for="">Start date</label>
                        <input class="form-control" type="text" name="start">
                    </div>
                    <div class="col-6">
                        <label for="">Cost</label>
                        <input class="form-control" type="int" name="cost">
                    </div>
                    <div class="col-6">
                        <label for="">Maximum Member</label>
                        <input class="form-control" type="int" name="member">
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
                    <input type="submit" value="Create trip" class="btn btn-success w-100 rounded-5">
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
