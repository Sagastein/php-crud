<?php
/***** Connection to the database *****
To find the database name, username, and password go to the page for SQL
*/
    $DB_server = "localhost";
    $DB_name = "crud";
    $DB_user_name = "root";
    $DB_user_password = "";
    
    $connect = mysqli_connect($DB_server,$DB_user_name,$DB_user_password,$DB_name);
?>