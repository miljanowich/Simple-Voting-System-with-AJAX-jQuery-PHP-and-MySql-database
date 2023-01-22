<?php
$con=mysqli_connect("localhost","yourusername","yourpassword","demo");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "CREATE TABLE IF NOT EXISTS votes (
    id INT AUTO_INCREMENT,
    rating INT(11) NOT NULL,
    PRIMARY KEY (id));";
    
if (mysqli_query($con,$sql)) {
  echo "Table `votes` created successfully";
} else {
  echo "Error creating table: " . mysqli_error($con);
}
?>
