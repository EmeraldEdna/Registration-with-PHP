
<?php
    session_start();
    $_SESSION;
    ?>
    
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Page</title>
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
  </head>

  <body style=" background-color: beige">
   <div class="container">
   <div class="row">
        <div class="row col-md-12">
        <div id="box" style=" width: 400px; height: 600px; margin: auto">
          <form action="save.php" method="post" >
            <div
              style="font-size: 20px; margin: 10px; color: rgb(70, 109, 86)"
            >
            Add New Student Information
            </div>
              
            <input type='hidden'  name='studentID' id='studentID' value="" /></td>        
            <input id="stud_name" type="text" name="stud_name" value="" /><br /><br />
            <input id="password" type="text" name="password" value="" /><br /><br />

            <button type="submit" class="btn btn-primary ml-8">BACK</button>
                <button type="submit" class="btn btn-danger ml-4">SAVE</button><br><br>
          </form>
        </div>
      </div>
  </div>
   </div>
    
  </body>
</html>
