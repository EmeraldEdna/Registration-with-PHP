<?php
// session_start();
include("connection.php");
include("function.php");





// if (!$result){
//     die("Wrong Query");
// }
if ($_SERVER['REQUEST_METHOD']=="POST") {
        # code...something was posted
        $stud_name = $_POST['stud_name'];
        $password = $_POST['password'];{
    
    if(!empty($stud_name)&& !empty($password)){
          //save to database
        //   $stud_id = random_num(20);
          $query_fetch = "SELECT * FROM `stud_tab` WHERE `STUD_NAME` = '$stud_name' AND `STUD_PASSWORD` = '$password' ";
          $result = mysqli_query($con,$query_fetch);
   
    	if ($result && mysqli_num_rows($result)>0)
    	 {
    		$stud_data = mysqli_fetch_assoc($result);
    
            
    	 }
  
    
    }
    else {
        echo "Wrong username or password";
    }}
    }
include "index_old.php";
?>