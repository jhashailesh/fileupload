<?php
require_once ('connect.php');
$sql= 'CREATE DATABASE IF NOT EXISTS uploads';
$retval = mysqli_query( $conn, $sql);
if(!$retval){
    die('not created or already exist:'. mysqli_error());
}
else{
    echo 'created';
}
mysqli_close($conn);
?>
