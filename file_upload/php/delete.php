<?php
require('connectdb.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    mysqli_query($conn,"DELETE FROM contacts WHERE id='$id'");
    header("location: ../index.html");
}
mysqli_close($conn);
?>