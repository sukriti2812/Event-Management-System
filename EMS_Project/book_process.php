<?php 
	include_once 'config.php';
	if(isset($_POST['book']))
{
    $roomid=$_POST['roomid'];
    $eventdate=$_POST['eventdate'];
    $H1_Start_Time=$_POST['H1_Start_Time'];
    $H1_End_Time=$_POST['H1_End_Time'];
    $eventid=$_POST['eventid'];

    $insert_query = " INSERT INTO  roomallocate(Room_id,H1_Date,H1_Start_Time,H1_End_Time,Event_id)VALUES('$roomid','$eventdate'
    ,'$H1_Start_Time','$H1_End_Time','$eventid')";

    $reso=mysqli_query($conn,$insert_query);

    if($reso){
      echo "data inserted successfully!";    
    }else{
        echo "Error: " . $insert_query . " " . mysqli_error($conn);
    }
     mysqli_close($conn);
}
?>