<?php
	$servername = "localhost"; //Name of the server where database resides, ex: 127.0.0.1
	//$port_no = 3306; // Port number for Windows 
	$username = "root";
	$password = "pass1234";
	$myDB= "eventmanage"; //Name of the database to access
	
		$conn = mysqli_connect($servername,$username,$password,$myDB);
		// set the PDO error mode to exception   
		if($conn){
			?>
			<script>
				alert('connection successful');
			</script>
			<?php
		}
		else{
			die("no connection" . mysqli_connect_error());
		}
?>