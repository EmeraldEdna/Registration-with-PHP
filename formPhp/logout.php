<?php
session_start();

if(isset ($_SESSION["STUD_ID"])){

    unset($_SESSION["STUD_ID"]);

}
header("location: index.html");