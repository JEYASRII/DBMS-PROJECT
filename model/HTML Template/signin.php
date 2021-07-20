<?php
session_start();
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "skin";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$email = $_POST["email"];
$password = $_POST["password"];
$sql = mysqli_query($conn, "SELECT * from user WHERE email = '".$email."' and 
	password = '".$password."'");
$row = mysqli_fetch_assoc($sql);
if($row){	
	$_SESSION["user"] = $row["user_id"];	
	$_SESSION["name"] = $row["name"];
	$_SESSION["login"]= true;
	?>
	<script>
		alert('Login successful');
	</script>
	
	<?php
	header("Location: account.php");
}
else{
	$_SESSION["login"]= false;
	?>
	<script>
		alert('Login failed');
	</script>
	<?php
}