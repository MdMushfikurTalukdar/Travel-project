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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
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
                        <div class="col-4"><a href="#" class="text-light">Trips</a></div>
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
                    <h2>Its a big world out there, <br> Go Explore</h2>
                    <p class="pt-4">Thinking of taking a break from every days Busy Life? Dont Worry, <br> we take care of your trip</p>
                    
                </div>
                <div class="header text-center pt-5 text-light">
                        <a href="addABlog.html" class="btn btn-success btn-lg rounded-pill px-5">Add a Blog</a>
                    </div>
            </div>
        </section>
<?php
require_once('dbcon2.php');

$isFullList = true;

//This can be split into two separate pages.
if(isset($_GET['bid']) && ctype_digit($_GET['bid'])){
  //details
  $isFullList = false;
  $did = intval($_GET['bid']);
  $strSQL = "SELECT * FROM blogs WHERE bid=?";
  $prepared = $conn->prepare($strSQL);
  $prepared->execute(array($did));
  // product_id, product_name, category_name, product_price, product_unit
  if($prepared->rowCount() == 1){
    //we have a match
    $row = $prepared->fetch();
    echo '
  
            <div class="result">
            <h3>'. $row['title']. '</a> </h3>
            <p>'. $row['aname'] .'</p>
            <p>'. $row['infor'] .'</p>';
            echo "<img src='{$row['photo']}' width='40%' height='20%'>";
            
      echo '
      <br><br>
     
            <div class="result">
            <h3><a href="example.php?id='.$did.'" class="text-dark">Go to discussion</a></h3>
            </div>';

  }else{
    //no match
    echo '<p>No details match available.</p>';
  }
}

else{
  //full list
  $strSQL = "SELECT * FROM products";
  $prepared = $conn->prepare($strSQL);
  $prepared->execute(array());
}
?>