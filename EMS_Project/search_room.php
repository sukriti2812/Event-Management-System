<?php
$conn = mysqli_connect("localhost","root","pass1234","eventmanage");
if(count($_POST)>0) {
$Eventdate = $_POST['HDate'];
$newdate=date("Y-m-d", strtotime($Eventdate));
$query="SELECT Room_id,H1_Start_Time,H1_End_Time FROM roomallocate WHERE 
      H1_Date='$newdate'";
$result = mysqli_query($conn,$query);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Search Room availability</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<table>
<tr>
<td>Room_id</td>
<td>Start Time</td>
<td>End Time</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_assoc($result)) {
?>
<tr>
		   <td> <?php echo $row["Room_id"]; ?> </td>
           <td> <?php echo $row["H1_Start_Time"]; ?> </td>
           <td> <?php echo $row["H1_End_Time"]; ?> </td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>