<?php
$servername = "localhost";
$username = "yourusername";
$password = "yourpassword";
$dbname = "databasename";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 if(isset($_POST["rating"])) {
     $ql=mysqli_query($conn,"UPDATE votes SET rating=rating+1 WHERE id=1");
  }

$sql = "SELECT id, rating FROM votes WHERE id=1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        
        echo $row["rating"];
 }
} 
?> 
