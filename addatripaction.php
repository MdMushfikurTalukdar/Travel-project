<?php
session_start();
   $submit=false;
    $server= "localhost";
    $username= "root";
    $password= "";
    $database="travel";
    $variable=mysqli_connect($server,$username,$password,$database);
    $title=$_POST['title'];
    $cname=$_POST['cname'];
    $route=$_POST['route'];
    $cost=$_POST['cost'];
    $member=$_POST['member'];
    $start=$_POST['start'];
    $info=$_POST['info'];
    $image=$_FILES['image'];
    $imagecount=count($image['name']);
    for ($i=0;$i<$imagecount;$i++){
        $imagename=$image['name'][$i];
        $tem_name=$image['tmp_name'][$i];
        $error=$image['error'][$i];
        if($error==0){
        $filedest='./'.$imagename;

        $query="INSERT INTO trips (`title`, `route`, `cname`,`cost`,`start_date`,`member`,`infor`,`photo`,`joined`) VALUES ('$title','$route','$cname','$cost','$start','$member','$info','$imagename' ,0)";
        move_uploaded_file($tem_name,$filedest);
        $result=mysqli_query($variable,$query);
        }
    }
    if(mysqli_affected_rows($variable)>=1){
      header('location:destination_successfull.php');
   }
  else{
      header('location:trips.php');   
  }
  
    

?>