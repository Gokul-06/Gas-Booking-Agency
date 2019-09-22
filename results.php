<?php
	$servername = "localhost";
	$username = "root";
	$db="youtube";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 


	$result=mysqli_query($conn,"Select * from register;") or die ("Failed to query database".mysqli_error($conn));
	while($row=mysqli_fetch_array($result)){
	echo "$row[id]<br>$row[username]<br>$row[password]<br>$row[gender]<br>$row[email]<br>$row[phonecode]<br>$row[phone]<br>$row[cylinders]
<br><hr>
	";
}
?>
<html>

</html>