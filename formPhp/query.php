<?php
session_start();

include("connection.php");
include("function.php");




// if ($_SERVER['REQUEST_METHOD']=="POST") {
    # code...something was posted
    $stud_name = $_POST['stud_name'];
    $password = $_POST['password'];

if(!empty($stud_name)&& !empty($password)){
      //save to database
    //   $id = random_num(20);
 
      $query= "INSERT INTO `stud_tab`(`STUD_ID`, `STUD_NAME`, `STUD_PASSWORD`) VALUES ('$id','$stud_name','$password')";
      
      $query2 = mysqli_query($con,$query);
    
    
header("location: login.php");
die;

}
else {
    echo "Invalid credentials";

}

include("login.php");
?>
