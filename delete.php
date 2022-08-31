<?php
//including the database connection file
$con=mysqli_connect('localhost','root','','textile');

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($con, "DELETE FROM user WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:home.php");
?>
