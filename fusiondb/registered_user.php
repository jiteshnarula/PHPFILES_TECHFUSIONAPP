<?php

$con = mysqli_connect("localhost","root","","techfusiondb");
if(mysqli_connect_errno()){
    die("Database connection failed" . "(" . mysqli_connect_error() ."-" . mysqli_connect_errno() .")" );
    
}else{

$st_check = $con->prepare("SELECT * FROM registered WHERE phone=? OR email=?");
$st_check->bind_param("ss",$_GET["phone"],$_GET["email"]);

$st_check->execute();
$rs = $st_check->get_result();

if($rs->num_rows ==0){
$st = $con->prepare("INSERT INTO registered (name, email, phone, password) VALUES (?,?,?,?)");
$st->bind_param("ssss", $_GET["name"],$_GET["email"],$_GET["phone"],$_GET["password"]);
$st->execute();
echo '1';
}

else
    echo '0';
}