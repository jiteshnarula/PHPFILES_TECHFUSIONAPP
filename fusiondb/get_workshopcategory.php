<?php
 

$con = new mysqli("localhost","root","","techfusiondb");

$st_check = $con->prepare("SELECT  distinct category FROM workshops ");

$st_check->execute();
$rs = $st_check->get_result();

$arr = array();

while($row = $rs->fetch_assoc()){
    
    array_push($arr, $row);
    
}

echo json_encode($arr);

