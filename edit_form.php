

      <?php
include "db.php";
$sql=mysqli_query($connect, "SELECT * FROM users");
while ($rows = mysqli_fetch_assoc($sql)) {
  
  
    
        $username=$rows["username"];
        $email=$rows["email"];
        $password=$rows["password"];
       
}



  ?>
        <h3>Edit your info</h3>
        <form method="POST" action="edit_form">
          <input type="hidden" name="user_ID" value="<?php echo $_GET["id"] ?>"><br>
          Name: <input type="text" name="username" value="<?php echo $username ?>" required><br>
          Email: <input type="email" name="email" value="<?php echo $email ?>" required><br>
          password: <input type="password" name="password" value="<?php echo $password ?>" required><br>
          <button type="submit" name="submit">Save Changes</button>
        </form>    
 
<?php

if(isset($_POST['submit'])){

$id=$_POST["user_ID"]; 

$username=$_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
include "db.php";

   if(
    mysqli_query(
$connect,"UPDATE users SET username = '$username', email = '$email', password ='$password' WHERE id = '$id' ")
 )
     {
    echo '<script>alert("data updated")</script>';
    echo "<meta http-equiv='refresh' content='0;URL=read'/>";
   
    
}
else{
     echo "Error Occurred: ".mysqli_error();
 }

}

?>