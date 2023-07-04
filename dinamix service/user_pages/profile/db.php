<?php  
// connect to database

$conn = mysqli_connect("localhost", "root", "", "dinamix");

// check if connection is successful

if(mysqli_connect_error()){
   exit ('failed to connect: ' .mysqli_connect_error());
}
?>