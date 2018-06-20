<?php 
require_once ('config.php');
?>
<?php
if(isset($_REQUEST['wid'])&&!empty($_REQUEST['wid'])) {
	$wid = $_REQUEST['wid'];
} else {
	echo "-1";
	return false;
}

$query = "SELECT * from `workshops` WHERE wid=$wid";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$keys = array_keys($row);
$array = array($keys[5]=>$row['short_description'],$keys[7]=>$row['long_description'],$keys[1]=>$row['name'],$keys[2]=>$row['price']);

echo json_encode($array);
?>