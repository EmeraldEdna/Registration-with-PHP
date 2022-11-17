<?php
function check_login($con)
{

   if(isset ($_SESSION["STUD_ID"])){

    $id = $_SESSION["STUD_ID"];

    $query = "select * from users where STUD_ID = $id limit 1";

    $result = mysqli_query($con,$query);

if ($result && mysqli_num_rows($result)>0) {

    $user_data = mysqli_fetch_assoc($result);

    return $user_data;
                                            }
                                        }

header("location: login.php");
die;
    }