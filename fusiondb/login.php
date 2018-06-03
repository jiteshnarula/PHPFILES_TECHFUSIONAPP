<?php 
require_once ('config.php');
?>
<?php

if(isset($_REQUEST['email']) && isset($_REQUEST['password'])) {
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
}
else {
	echo "-1";
	return false;
}

$query = "SELECT * FROM `registered` WHERE (email='$email' OR phone='$email') and password='$password'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
if($count == 0) {
	echo '0';
}
else {
	echo '1';
}
?>