<?php
$conn = mysqli_connect("localhost","root","pass1234","eventmanage");
if(count($_POST)>0) 
{
	$eventid = $_POST['eventid'];
	$query2="SELECT Event_id,Feedback_Data FROM feedback WHERE Event_id='$eventid'";
	$stmt= mysqli_query($conn,$query2);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Search feedback</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<table>
<tr>
<td>Event Id</td>
<td>Feedback Data</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_assoc($stmt)){
?>
<tr>
		   <td> <?php echo $row["Event_id"]; ?> </td>
           <td> <?php echo $row["Feedback_Data"]; ?> </td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>