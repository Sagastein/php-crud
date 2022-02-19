<style>
    table {
       margin-left: 300px;
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
    input{
        height: 40px;
        width: 200px;
        margin-left: 600px; 
        border-radius: 10px 0px 0px 10px;
    }
    button{
          height: 40px;
        width: 60px; 
        margin-left: -10px;
        border-radius: 0px 10px 10px 0px;
        background: green;
    }
    button:hover{
        background: #f1f1f1f1;
    }
    h3{
        text-align: center;
        font-size: 40px;
        font-weight: 500px;
        font-family: initial;
    }
</style>
<script>
function showUser(str) {
  console.log(str);
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","search.php?q="+str,true);
    xmlhttp.send();
  }
}
//Runner.instance_.gameOver = ()=>{}
</script>
<p><a href="http://localhost/image/read">&times</a></p>
        <h3>Search Box</h3>
        <form method="POST" action="search">
          <input placeholder="Type and search..." type="text" onkeyup="showUser(this.value)" name="search_term" required>
          <button type="submit" name="search">Search</button>
        </form>    
        <hr>
<style>
    table {border-collapse: collapse}
    th,td{border: 1px solid #000}
</style>
<?php
include "db.php";

if (isset($_REQUEST['search'])) {
	
$term = $_REQUEST["search_term"];
$query = mysqli_query($connect, "SELECT * FROM users WHERE username LIKE '%$term%' OR email LIKE '%$term%'");
echo"
<h3>Search Result</h3>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
         <th>Profile</th>
        <th>password</th>
        <th colspan='2'>action</th>
    </tr>
";    
while ($rows = mysqli_fetch_assoc($query)) {
  
  echo"
    <tr>
        <td>".$rows["username"]."</td>
        <td>".$rows["email"]."</td>
         <td><image src='uploads/".$rows["filename"]."' title='sage'></td>
        <td>".$rows["password"]."</td>
        <td><a class='btn' href='edit_form.php?id=".$rows["id"]."'>Update</a></td>
        <td><a class='btn2' href='delete.php?id=".$rows["id"]."'>Delete</a></td>
       
    </tr>
"; 

}
   


echo "</table>";

}


echo "<hr>";
echo "<a href='form.html'>Add More Data</a>";
?>


<style>
    p{
        float: right;
        font-size: 50px;
        font-weight: bolder;
        font-stretch: 20px;
    }
    p a{
        text-decoration: none;
        font-weight: bolder;

    }
    p a:hover{
        color: red;
        transform: linear 2s;
        rotate: 30deg;
    }
    img{
        width: 180px;
        padding: 10px;
        height: 80px;
    }
</style>
