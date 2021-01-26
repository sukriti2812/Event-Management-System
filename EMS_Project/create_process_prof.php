<?php 
	include_once 'config.php';
	if(isset($_POST['create']))
{

    $eventname=$_POST['eventname'];
    $eventid=$_POST['eventid'];
    $eventdescription=$_POST['eventdescription'];
    $Professorid=$_POST['Professorid'];
    $hostorg=$_POST['hostorg'];

    $insertquery3 = " INSERT INTO events(E_Name,Event_id,E_Description,Professor_id,Host_Org) VALUES ('$eventname','$eventid','$eventdescription','$Professorid','$hostorg')";
    //$searchq = (E_Name,Event_id,E_Description,Student_id,Professor_id,Host_Org)VALUES(‘Consulting-Case Study’,201823001,A case study workshop on 23 December,192123002,’NULL’,’Consulting Club’)
    $res1=mysqli_query($conn,$insertquery3);

    if($res1){
      echo "data inserted successfully!";    
    }
     mysqli_close($conn);
}
?>