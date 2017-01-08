<?php
require_once('connectdb.php');
if(isset($_POST['submit']) && !empty($_POST['submit'])){
    $file= $_FILES['file_upload'];
    $type= $_FILES['file_upload']['type'];
    $tmp = $_FILES['file_upload']['tmp_name'];
    $fname = $_FILES['file_upload']['name'];
    $fexe= explode('.',$fname);
    $exe = strtolower(end($fexe));
    $changename= uniqid().'.'.$exe;
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $phno=mysqli_real_escape_string($conn,$_POST['phno']);
    $sql= " INSERT INTO contacts (`name`, `email`, `phno`,`fname`) VALUES ('$name','$email',$phno,'$changename')";
    $retval= mysqli_query($conn, $sql);
    if($retval == true){
        move_uploaded_file($tmp,'images/'.$changename);
        echo 'you file has been update';
        header("location: ../index.html");
    }
    else{
       ?>
       <script>
           alert('You have alreardy submitted');
       </script>
       <?php
    }


    //move_uploaded_file($tmp,'images/'.$changename)
}
?>
