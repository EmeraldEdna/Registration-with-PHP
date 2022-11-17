<?php

include("connection.php");

// include("function.php");

$stud_name = $_POST['stud_name'];
$stud_password = $_POST['password'];
$studentID = $_POST['studentID'];

$query2 ="INSERT INTO `stud_tab`(`ID`,`STUD_NAME`, `STUD_PASSWORD`) VALUES ('$studentID','$stud_name','$stud_password')";
$result2  = mysqli_query($con,$query2);

$query = "UPDATE `stud_tab` SET `STUD_NAME`='$stud_name',`STUD_PASSWORD`='$stud_password' WHERE `ID` = $studentID";
$result = mysqli_query($con,$query);

if($result2){     
     $status = 1;
     echo 'Save successfully';
}
 
header("location:display_studlist.php" );



?>