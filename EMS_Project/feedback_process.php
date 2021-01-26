<?php 
	include_once 'config.php';
	if(isset($_POST['submit']))
{

    $studentid=$_POST['studentid'];
    $eventid=$_POST['eventid'];
    $feedback=$_POST['feedback'];

    $insertquery5 = " INSERT INTO feedback (Student_id,Event_id,Feedback_Data) VALUES ('$studentid','$eventid','$feedback')";
    //$searchq = (E_Name,Event_id,E_Description,Student_id,Professor_id,Host_Org)VALUES(‘Consulting-Case Study’,201823001,A case study workshop on 23 December,192123002,’NULL’,’Consulting Club’)
    $res3=mysqli_query($conn,$insertquery5);

    if($res3){
      echo "data inserted successfully!";    
    }
    else{
        echo "Error: " . $insertquery5 . " " . mysqli_error($conn);
    }
     mysqli_close($conn);
}
?>