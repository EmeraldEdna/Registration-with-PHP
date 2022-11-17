<?php 
// session_start();

// include("connection.php");
//  include("function.php");


// if ($_SERVER['REQUEST_METHOD']=="POST") {
//     # code...something was posted
//     $stud_name = $_POST['STUD_NAME'];
//     $password = $_POST['STUD_PASSWORD'];{

// if(!empty($stud_name)&& !empty($password)){
//       //save to database
//       $stud_id = random_num(20);
//       $query= "SELECT * FROM STUDENTS where 'STUD_NAME' = '$stud_name' limit 1"; 
   
//       $result = mysqli_query($con,$query);
// if($result){
// 	if ($result && mysqli_num_rows($result)>0)
// 	 {
// 		$stud_data = mysqli_fetch_assoc($result);

		
// 	 }
// }

// }
// else {
//     echo "Wrong username or password";
// }}
// }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Media/styles.css" />
    <link rel="stylesheet" href="Media/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <title>Login</title>
  </head>
  <body style=" background-color: beige">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img
            src="Images/cat.jpg"
            alt="Baby kitten"
            width="630px"
            height="600px"
          />
        </div>
        <div class="col-md-6">
          <div id="box" style="color: light blue; margin: auto; width: 400px; height: 600px">
            <form method="post" action="query_fetch.php">
              <div
                style="font-size: 20px; margin: 10px; color: rgb(255, 255, 255)"
              >
               Log In
              </div>
              <input id="text" type="text" name="stud_name" /><br /><br />
              <input id="text" type="password" name="password" /><br /><br />
              <input id="button" type="submit" value="Log In" /><br /><br><br><br>
              Don't Have an Account? <a href="index.php">Signup Here</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
