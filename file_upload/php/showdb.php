<?php

require_once("connectdb.php");
$result = mysqli_query($conn, "SELECT * FROM contacts ORDER BY id DESC");
if($result == true){
    while($row= mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<div class='container'>";
        echo "<span class='delete'><a href='delete.php?id=" . $row['id'] . "'><i class='material-icons'>&#xE92B;</i></a></span>";
        echo "<div class='name'>";
        echo "<span>".$row['name']."</span><br><br>";
        echo"<span>" . $row['email'] ."</span><br><br>";
        echo"<span>" . $row['phno'] ."</span><br><br>";
        echo "<span class='link'>";
        echo " <a href='../php/images/".$row['fname']."'>click here! To get your document</a>";
        echo "</span>";
        echo "</div>";
        echo "</div>";
   
}
}
else{
    die('not connected:'.mysqli_error($conn));
}
mysqli_close($conn);

?> 