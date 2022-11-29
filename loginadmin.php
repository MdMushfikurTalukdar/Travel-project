<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Admin</title>
</head>
<body>
    <section class="container sign_in">
        <div class="w-50 bg-light mt-5 m-auto p-5 rounded-3">
            <div>
                <form action="loginadminaction.php" method="post">
                    <label for="">Email Address</label>
                    <input type="email" name="email1" class="form-control" placeholder="Write Your Email">
                    <br>
                    <label for="">Password</label>
                    <input type="password" name="pass1" class="form-control" placeholder="Write Your Password">
                    <br>
                    <input type="submit" value="Log in" class="btn btn-success w-100 rounded-5">
                </form>
                <br>
                <br>
                <span>Don't have any account?</span><br>
                <a href="signin.php" class="text-success"><h5>Create User Account</h5></a>
            </div>
        </div>
    </section>

</body>
</html>