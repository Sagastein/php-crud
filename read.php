<style>
    table {
       margin-left: 50%;
       width: 500px;
        border-collapse: collapse}
    th,td{
       height: 45px;
        border: 1px solid #000}
        th{
            background-color: green;
            color: white;
            font-weight: 400px;
        }
    table a{
        text-decoration: none;
        border: 1px solid black;
        color: white;


    }
    .btn{
        background: green;
        border-radius: 5px;
        padding: 7px;
        margin-left: 20px;
    }
    .btn2{
     background: red;
     border-radius: 5px;
     padding: 7px;
    margin-left: 20px;
    }
</style>
<?php
include "db.php";
/*************************************/
include 'search.php';
$query = mysqli_query($connect, "SELECT * FROM users");
echo"
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Profile</th>
        <th>password</th>
        <th colspan='3'>action</th>
    </tr>
";    
while ($rows = mysqli_fetch_assoc($query)) {
  
  echo"
    <tr>
        <td>".$rows["username"]."</td>
        <td>".$rows["email"]."</td>
        <td><image src='uploads/".$rows["filename"]."' title='sage'></td>
        <td>".$rows["password"]."</td>
       <td><a class='btn' href='edit_form?id=".$rows["id"]."'>Update</a></td>
        <td><a class='btn2' href='delete?id=".$rows["id"]."'>Delete</a></td>
    </tr>
";  
}
echo "</table>";
echo "<hr>";
echo "<a href='ex.html'>Add more Data</a>";
?>







<!-- <td><a href='edit_form.php?thisID=".$rows["id"]."&username=".$rows["username"]."&email=".$rows["email"]."&password=".$rows["password"]."'>Update</a></td> -->
<style>
    img{
         width: 180px;
        padding: 10px;
        height: 80px;
    
    }
</style>