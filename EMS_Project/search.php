<?php
$conn = mysqli_connect("localhost","root","pass1234","eventmanage");
if(count($_POST)>0) {
$OrganizationName = $_POST['OrganizationName'];
$query="SELECT Registration_number,Org_Name,Org_mailid,Mou_Details FROM sponsorship_data WHERE 
      Org_Name='$OrganizationName'";
$result = mysqli_query($conn,$query);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Sponsors</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<table>
<tr>
<td>Registration_number</td>
<td>Org_Name</td>
<td>Org_mailid</td>
<td>Mou_Details</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_assoc($result)) {
?>
<tr>
		   <td> <?php echo $row["Registration_number"]; ?> </td>
           <td> <?php echo $row["Org_Name"]; ?> </td>
           <td> <?php echo $row["Org_mailid"]; ?> </td>
           <td> <?php echo $row["Mou_Details"]; ?> </td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>