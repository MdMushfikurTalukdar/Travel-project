<?php
include ('dbcon.php');
if(isset($_GET['id']) && ctype_digit($_GET['id'])){
    //details
 
    $bid = intval($_GET['id']);
    $strSQL = "DELETE FROM blogs WHERE bid=?";
    $prepared = $conn->prepare($strSQL);
    $prepared->execute(array($bid));
    // product_id, product_name, category_name, product_price, product_unit
    if($prepared->rowCount() == 1){
        echo '<div class="report">
        <h3 allign-center>Blog deleted successfully<h3>
        <a href="login_as_admin.php">Return Home</a>
        </div>';

    }
    else{
        header('location:login_as_admin.php');
    }
}
?>