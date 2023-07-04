<!DOCTYPE html>
<html>
<head>
  <title>Sign Up | Dinamix</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-top: 10%;
    }

    h2 {
      text-align: center;
      color: #00A651;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 10px;
      text-align: left;
    }

    .form-group input {
      width: 95%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #00A651;
      border: none;
      color: #fff;
      cursor: pointer;
      border-radius: 3px;
    }
     a{
       color: #00A651 ; 
       font-size: 17px;
       padding: 10px;
    }

@media screen and (max-width: 1200px){
  .form-container {
    max-width: 700px;
    margin: 0 auto;
    padding: 20px;
    margin-top: 25%;
  }
  h2 {
      font-size: 55px;
    }

    .form-group {
      margin-bottom: 15px;
      padding: 10px;
    }
    .form-group label {
      font-size: 35px;
      padding: 5px;
    }

    .form-group input {
      font-size: 35px;
      padding: 20px;
    }
    .form-group button {
      width: 102%;
      line-height: 57px;
      padding: 10px;
      background-color: #00A651;
      border: none;
      font-size: 30px;
      color: #fff;
      cursor: pointer;
      border-radius: 5px;
    }
    p {
      font-size: 35px;
    }
     a{
       color: #00A651 ; 
       font-size: 40px;
       padding: 10px;
    }
}
  </style>
  </head>
  <body>
  <?php
require 'db.php';

$jobtitle = $_POST['jobtitle'];
$companyname = $_POST['companyname'];
$locations = $_POST['locations'];
$descriptions = $_POST['descriptions'];


?>
<?php

// Write a query
$query = "SELECT * FROM jobs WHERE descriptions = '$descriptions'";


// Execute the query
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die('Query execution failed: ' . mysqli_error($conn));
}



?>

    <h1 style="margin: auto; margin-top: 5%; text-align: center; font-size:"> <?php // Check if the user exists
           $success = "Successful...";
           if (mysqli_num_rows($result) > 0) {
        
   echo "User already exist...";
} else {
    // Proceed with the desired action, such as inserting the user into the table
    // or displaying a success message
    echo  $success;
    $sql = "INSERT INTO jobs(jobtitle,companyname,locations,descriptions) 

    VALUES('".$jobtitle."','".$companyname."','".$locations."','".$descriptions."')";
    
   if ($conn->query($sql) === FALSE){
        echo "error:" .$sql. ".<br>." .$conn->error;
    }
   

}?>
<?php
$query = "SET @num := 0";
mysqli_query($conn, $query);

$query = "UPDATE jobs SET id = @num := (@num+1)";
mysqli_query($conn, $query);

$query = "ALTER TABLE jobs AUTO_INCREMENT = 1";
mysqli_query($conn, $query);
?>
<?php mysqli_close($conn); ?>
      
    <div class="form-container">
      <h2>Job Post</h2>
<form method="post">
    <div class="form-group">
      <label for="title">Job Title</label>
      <input type="text" id="title" name="jobtitle" placeholder="Enter the job title" required>
    </div>
    <div class="form-group">
      <label for="company">Company</label>
      <input type="text" id="company" name="companyname" placeholder="Enter the company name" required>
    </div>
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" id="location" name="locations" placeholder="Enter the job location" required>
    </div>
    <div class="form-group">
      <label for="description">Job Description</label>
      <textarea id="description" name="descriptions" placeholder="Enter the job description" required></textarea>
    </div>
    <div class="form-group">
      <button type="submit">Post Job</button>
    </div>
  </form>
</div>
</body>
</html>