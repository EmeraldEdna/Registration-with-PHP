<?php

include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>List Display</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Media/styles.css" />
    
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
  </head>

  <body
    style="
      margin: 50px;
      padding-top: 20px;
      padding-left: 20px;
      margin-top: 20px;
      background-color: rgb(141, 121, 167);
    "
  >

    <div>
      <form action="editStudent.php" method="POST" name="myform">
        <em> <b> Students Registered successfully.</b></em>
        <table class="table-bordered">
          <input type='hidden'  name='studentID' id='studentID' value='' /></td>
          <input type='hidden'  name='buttonRef' id='buttonRef' value='' /></td>
          
          <thead>
           
          <br /><br>
              <tr>
              <th>Student Name</th>
              <th>Student Password</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody> 
            <?php 
          $query = "SELECT * FROM `stud_tab`";
          $result = mysqli_query($con,$query);
  
          if(!$result){
            die("Invalid query"); 
          } 
?>
   <?php       while($row=$result-> fetch_assoc()){ 
            ?>
            <tr>
              <td><?php echo $row['STUD_NAME']; ?> </td>
              <td><?php echo $row['STUD_PASSWORD']; ?> </td>
              <td><button type="submit" class="btn btn-primary" onclick="document.getElementById('studentID').value=<?php echo $row['ID']?>;document.getElementById('buttonRef').value='editBtn';"> Edit </a> <button class="btn btn-secondary"  onclick="document.getElementById('buttonRef').value='delBtn';document.getElementById('studentID').value=<?php echo $row['ID'] ?>;"> Delete</a></td>
              
            </tr>
          
         <?php }
         
            ?>
          </tbody>
         
        </table>
       
      </form>
      <form action="add.php" method="POST" >
            <button type="submit" class="btn btn-primary btn-sm" style="margin-left:400px">ADD</button>
            </form>
         
    </div>
  </body>
</html>
