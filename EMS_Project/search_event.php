<?php
$conn = mysqli_connect("localhost","root","pass1234","eventmanage");
if(count($_POST)>0) {
$name=$_POST['studentname'];
$eName = $_POST['eventname'];
$query1="SELECT S.S_username,E.E_Name FROM students S,events E,registered R WHERE R.Student_id=S.Student_id AND R.Event_id=E.Event_id AND E.E_Name='$eName' AND S.S_username='$name'";
$result = mysqli_query($conn,$query1);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Event registered</title>
<style>
table, th, td {
	align: center;
    border: 1px solid black;
}
</style>
</head>
<body>
<table>
<tr>
<td>Student Username</td>
<td>Event Name</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_assoc($result)) {
?>
<tr>
		   <td> <?php echo $row["S_username"]; ?> </td>
           <td> <?php echo $row["E_Name"]; ?> </td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>