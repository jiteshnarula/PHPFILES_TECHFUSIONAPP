<?php 
require_once ('config.php');
?>

<?php
if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];
} else {
	echo "-1";
	return false;
}
$result = mysqli_query($con,"select * from videos where id=$id");
$row = mysqli_fetch_assoc($result);
$keys = array_keys($row);
$image = "https://img.youtube.com/vi/".$row['code']."/sddefault.jpg";
echo '{"title":"'.$row["title"].'","code":"'.$row["code"].'","image":"'.$image.'"}';
?>