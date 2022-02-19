<?php
include "db.php";
$username=$_POST["username"]; 
$email= $_POST["email"];
$password=$_POST["password"];
    if(!$connect){
        echo mysqli_error();
    }
/*************************************/
   
/*************************************/
if(
    mysqli_query(
$connect,"INSERT INTO users (username, email,password) VALUES ('$username', '$email','$password')")
){
    echo '<script>alert("data submited")</script>';
     echo "<meta http-equiv='refresh' content='0;URL=read.php' />";
}
else{
    echo "Error Occurred: ".mysqli_error();
}
?>