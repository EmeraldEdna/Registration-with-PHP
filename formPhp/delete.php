<?php

include("connection.php");

// include("function.php");

$stud_name = $_POST['stud_name'];
$stud_password = $_POST['password'];
$studentID = $_POST['studentID'];

$query = "DELETE FROM `stud_tab` WHERE `ID` ='$studentID'";
$result = mysqli_query($con,$query);
 if(!$result){
      die("Wrong query");
 }else{
header("location:display_studlist.php" );
}


?>