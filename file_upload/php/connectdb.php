<?php
$host='localhost';
$user='root';
$pas= '';
$db='uploads';
$conn= mysqli_connect($host,$user,$pas,$db);
if($conn != TRUE ){
    @ die('not connected: ' . mysqli_error());
}
else{
     //echo 'connected';
}
?>
