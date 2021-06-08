<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "skin";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$salt = "skin";
$password_encrypted = sha1($password.$salt);


$sql = "INSERT INTO user (name, email, password) 
VALUES ('$name', '$email', '$password_encrypted')";


if($conn->query($sql) === TRUE ){
	?>
	<script>
		alert('Values have been inserted');
	</script>
	<?php
}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
}
header("Location: signlog.html#sign-in");

?>