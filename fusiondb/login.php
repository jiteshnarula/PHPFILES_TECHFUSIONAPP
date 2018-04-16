<?php

$con = new mysqli("localhost","root","","techfusiondb");

$st_check = $con->prepare("SELECT * FROM registered WHERE email=? and password=?");
$st_check->bind_param("ss",$_GET["email"],$_GET["password"]);

$st_check->execute();
$rs = $st_check->get_result();

if($rs->num_rows ==0){
    echo '0';
}
else
    echo '1';