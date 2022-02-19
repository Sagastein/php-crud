<?php
$id=$_GET["id"]; 
include "db.php";
if(
    mysqli_query(
$connect,"DELETE FROM users WHERE id= '$id' ")
){
    echo "<h3>Data Deleted</h3>";
    echo "<meta http-equiv='refresh' content='0;URL=read' />";
}
else{
    echo "Error Occurred: ".mysqli_error();
}
?>