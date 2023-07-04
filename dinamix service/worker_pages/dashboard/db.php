<?php  
// connect to database

$conn = mysqli_connect("localhost", "root", "", "blue_volte");

// check if connection is successful

if(mysqli_connect_error()){
   exit ('failed to connect: ' .mysqli_connect_error());
}
?>