<?php
include("connection.php");

$studentID = $_POST['studentID'];

$buttonType = $_POST['buttonRef'];
 
// if($buttonType == 'editBtn'){
  
// }

// elseif($buttonType == 'delBtn'){
// $query2 = "DELETE FROM `stud_tab` WHERE `stud_tab`.`ID` = $studentID";
// $result2 = mysqli_query($con,$query2);
// header("location: display_studlist.php");
// }

switch ($buttonType) {
    case 'editBtn':
        $query = "SELECT * FROM `stud_tab` WHERE `ID` = $studentID ";
        $result = mysqli_query($con,$query);
        $row=$result-> fetch_assoc();
        include "editStudentForm.php";
        break;
    
        case 'delBtn':
      
        $query2 = "DELETE FROM `stud_tab` WHERE `stud_tab`.`ID` = $studentID";
        $result2 = mysqli_query($con,$query2);
        include "display_studlist.php";
        break;

        default:
        echo "none worked";
        break;
}

// elseif(!$result && $result2){
//     die("wrong query");
// }

// else{
//     echo("location: display_studlist.php");
// }
 

//  $row=$result-> fetch_assoc();
//  $row=$result-> fetch_assoc()


?>