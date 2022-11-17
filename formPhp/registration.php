<?php

include("connection.php");
include("function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Media/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <title>Course Registration</title>
</head>

<body style="background-color: rgb(192, 135, 109)">
   <div id="box" style="margin-top: 20px; width:310px">

   <form  action="course_query.php" method="post">
    <div style=" color: purple"> <em> <b>Courses Registration Form</b> </em></div><br>
    <label for="studId">Student ID</label>
<input id="text" type="text" name="StudentId"><br><br>


<select name="CourseList" id="courses" >
<option value="">Select Course Name</option><br>
  <?php

  $query_select ="SELECT `COURSE_NAME`,`COURSE_CODE` FROM `courses`";

  $result = mysqli_query($con,$query_select);

  while ($row = mysqli_fetch_array($result)){
  
  ?>
<option value="<?php echo $row['COURSE_CODE']; ?>"> <?php echo $row['COURSE_NAME']; ?> </option> 
<?php }?>
</select><br><br>

<input type="checkbox" name="checkbox" value="selected">
  <label for="checkbox"> I have read and agreed to all the terms and coditions in submiting this form</label><br>
<button style="background-color: gray; border : none; text-align:right"> <b><em>REGISTER</em></b> </button>
</form>
   </div>

</body>
</html>