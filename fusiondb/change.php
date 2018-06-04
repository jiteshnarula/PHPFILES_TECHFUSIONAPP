<?php 
require_once ('config.php');
?>
<?php
if(( isset($_REQUEST['email']) && isset($_REQUEST['oldpass']) && isset($_REQUEST['newpass']) ) && (!empty($_REQUEST['email']) && !empty($_REQUEST['oldpass']) && !empty($_REQUEST['newpass'])) ) {
	$email = $_REQUEST['email'];
	$old = $_REQUEST['oldpass'];
	$new = $_REQUEST['newpass'];
} else {
	echo "-1";
	return false;
}
$query = "SELECT * from `registered` where (email='$email' OR phone='$email') and password='$old';";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
if($count == 0 ) {
	echo "0";//Old Password is wrong
} elseif (!strcmp($old,$new)) {
	echo "-2"; // Old and new password is same
} 
else {
	$q = "UPDATE `registered` SET `password` ='$new' where (`email`='$email' OR `phone`='$email');";
	$res = mysqli_query($con,$q) or die("Query error: ".mysqli_error($con));
	if($res) {
		echo "1";
	}
}
?>