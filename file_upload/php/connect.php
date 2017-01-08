<?php
$host='localhost';
$user='root';
$pas= '';
$conn= mysqli_connect($host,$user,$pas);
if($conn != TRUE ){
    die('not connected: ' . mysqli_error());
}
else{
   // echo 'connected';
}
?>
