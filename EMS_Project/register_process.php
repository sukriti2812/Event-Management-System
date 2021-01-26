<?php 
	include_once 'config.php';
	if(isset($_POST['register']))
{

    $studentid=$_POST['studentid'];
    $eventid=$_POST['eventid'];
    $registerid=$_POST['registerid'];

    $insertquery1 = " INSERT INTO registered (Student_id,Event_id,Registration_id) VALUES ('$studentid','$eventid','$registerid')";

    $res=mysqli_query($conn,$insertquery1);

    if($res){
      echo "data inserted successfully!";    
    }else{
        echo "Error: " . $insertquery1 . " " . mysqli_error($conn);
    }
     mysqli_close($conn);
}
?>