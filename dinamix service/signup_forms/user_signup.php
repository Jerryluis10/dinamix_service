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
      margin-top: 3%;
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
      margin-bottom: 5px;
    }

    .form-group input {
      width: 95%;
      padding: 10px;
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

$names = $_POST['names'];
$email = $_POST['email'];
$num = $_POST['num'];
$passwd = $_POST['password'];
$ref_email = $_POST['ref_email'];


?>
<?php

// Write a query
$query = "SELECT * FROM users WHERE user_name = '$names'";
$query = "SELECT * FROM users WHERE email = '$email'";

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
    $sql = "INSERT INTO users(user_name,email,num,passwd,referral_id) 

    VALUES('".$names."','".$email."','".$num."','".$passwd."','".$ref_email."')";
    
   if ($conn->query($sql) === FALSE){
        echo "error:" .$sql. ".<br>." .$conn->error;
    }
   

}?>
<?php
$query = "SET @num := 0";
mysqli_query($conn, $query);

$query = "UPDATE users SET id = @num := (@num+1)";
mysqli_query($conn, $query);

$query = "ALTER TABLE users AUTO_INCREMENT = 1";
mysqli_query($conn, $query);
?>
<?php mysqli_close($conn); ?>
</h1>
  <div class="form-container">
    <h2>Sign Up </h2>
    <form action="" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="names" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="email">Mobile Number</label>
        <input type="number" id="num" name="num" placeholder="Enter your Mobile Number" required>
      </div>
      <div class="form-group">
        <label for="email">Referral Email</label>
        <input type="email" id="email" name="ref_email" placeholder="Enter Referral email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <button type="submit">Sign Up</button>
      </div>
      <p>Have an account? <a href="user-login.php">click here</a></p>
    </form>
  </div>
</body>



</html>