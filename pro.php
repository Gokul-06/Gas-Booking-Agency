	<?php
session_start();
$servername = "localhost";
$username = "root";
$db="login";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$u = $_POST['user'];
$p = $_POST['pass'];


$result=mysqli_query($conn,"Select * from usename where Username='$u' and Password='$p';") or die ("Failed to query database".mysqli_error($conn));
$row=mysqli_fetch_array($result);
if($row['Username']==$u && $row['Password']== $p){
	echo " Welcome Chief";
	$link_address = 'http://localhost/login/results.php';
	echo "<a href='".$link_address."'>Click Here to See ordered cylinder list
	</a>";

}

else{
	echo"Failed to log in";
}



?>