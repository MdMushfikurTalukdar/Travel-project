<?php
    session_start();
    $server= "localhost";
    $username= "root";
    $password= "";
    $database="travel";
    $variable=mysqli_connect($server,$username,$password,$database);

    if(isset($_POST['login'])){
    $usermail=mysqli_real_escape_string($variable, $_POST['email1']);
    $password1=mysqli_real_escape_string($variable,$_POST['pass1']);
    $query1= "SELECT * from users having `email`='".$usermail."' and `password`='".$password1."'" ;
    $result1=mysqli_query($variable,$query1);
    $rows=mysqli_num_rows($result1);
    if($rows==1){
        $userdata=mysqli_fetch_array($result1);
        $username=$userdata['name'];
        $_SESSION['authuser_name']=$username;
        $_SESSION['status']="Log in successfull";
        header('location:userhome.php');
       exit();
    }
    else{
        $_SESSION['status']="Invalid email or password";
        header('location:loginuser.php');
        exit();
    }
}
?>