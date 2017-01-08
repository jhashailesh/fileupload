<?php
require_once ('connect.php');
$db= 'uploads';
$db_connect= mysqli_select_db($conn,$db);
if($db_connect == TRUE){
$sql= "CREATE TABLE IF NOT EXISTS contacts(
            id INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(32) NOT NULL,
            email VARCHAR(32) NOT NULL,
            fname VARCHAR(32) NOT NULL,
            pnum INT(12) NOT NULL,
            UNIQUE KEY username (email)
)";
$retval= mysqli_query($conn, $sql);
    if($retval == TRUE){
        echo 'table has been created';
    }
    else{
        die('table could not be create :'. mysqli_error());
    }
}
else{
    die('data base not connected: ' . mysqli_error());
}
?>
