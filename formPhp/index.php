<?php
    session_start();
    $_SESSION;
    ?>
    
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up Page</title>
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
      <div class="row col-sm-6">
        <img
          src="Images/babyk.jpg"
          alt="Baby kitten"
          width="630px"
          height="600px"
        />
      </div>
      <div class="row col-sm-6">
        <div id="box" style=" width: 400px; height: 600px; margin: auto">
          <form method="post" action="query.php">
            <div
              style="font-size: 20px; margin: 10px; color: rgb(70, 109, 86)"
            >
              Welcome, sign up to join us!
            </div>
            <input id="text" type="text" name="stud_name" /><br /><br />
            <input id="text" type="password" name="password" /><br /><br />
            <input id="button" type="submit" value="Sign Up" /><br />
            Have an account already? <a href="login.php">Login Instead</a>
          </form>
        </div>
      </div>
  </div>
   </div>
    
  </body>
</html>
