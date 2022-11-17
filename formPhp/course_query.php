<?php
session_start();

include("connection.php");
include("function.php");

    $stud_Id = $_POST['StudentId'];
    // $stud_name = $_POST['Student Name'];
    $course_code = $_POST['CourseList'];

$query = "INSERT INTO `registration`(`COURSE_CODE`,`STUDENT_ID`) VALUE ('$course_code','$stud_Id')";

$query2 = mysqli_query($con,$query);



include "index.php";
?>