<!DOCTYPE html>
<html>
<head>
  <title>Worker Sign Up</title>
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
  margin-top: 5%;
}

h2 {
  text-align: center;
  color: #00A651;
}

.form-group {
  margin-bottom: 10px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
  font-size: 17px;
  padding: 10px;
  text-align: left;
}

.form-group input {
  width: 95%;
  padding: 10px;
  border: 1.5px solid #ccc;
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

a {
  color: #00A651;
  font-size: 17px;
  padding: 10px;
  text-align: center;
  display: block;
  margin-top: 10px;
}

@media screen and (max-width: 1200px) {
  .form-container {
    max-width: 750px;
    margin: 0 auto;
    padding: 20px;
    margin-top: 2%;
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
    padding: 10px;
  }

  .form-group input {
    font-size: 25px;
    padding: 20px;
  }

  .form-group button {
    line-height: 57px;
    font-size: 30px;
  }

  a {
    font-size: 40px;
    padding: 10px;
  }
}


    /* ... */
  </style>
</head>
<body>
<?php
require 'db.php';

$names = $_POST['names'];
$email = $_POST['email'];
$num = $_POST['num'];
$passwd = $_POST['password'];
$addresses = $_POST['addresses'];
$city = $_POST['city'];


?>
<?php

// Write a query
$query = "SELECT * FROM workers WHERE worker_name = '$names'";
$query = "SELECT * FROM workers WHERE email = '$email'";

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
    $sql = "INSERT INTO workers(worker_name,email,num,passwd,addresses,city) 

    VALUES('".$names."','".$email."','".$num."','".$passwd."','".$addresses."','".$city."')";
    
   if ($conn->query($sql) === FALSE){
        echo "error:" .$sql. ".<br>." .$conn->error;
    }
   

}?>
<?php
$query = "SET @num := 0";
mysqli_query($conn, $query);

$query = "UPDATE workers SET id = @num := (@num+1)";
mysqli_query($conn, $query);

$query = "ALTER TABLE workers AUTO_INCREMENT = 1";
mysqli_query($conn, $query);
?>
<?php mysqli_close($conn); ?>
  <div class="form-container">
    <h2>Worker Sign Up</h2>
    <form action="" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="names" placeholder="Enter your company name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <label for="num">Mobile Numer</label>
        <input type="number" id="num" name="num" placeholder="Enter your Number" required>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" id="address" name="addresses" placeholder="Enter your address" required>
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input type="text" id="city" name="city" placeholder="Enter your city" required>
      </div>
      
      <div class="form-group">
        <button type="submit">Next</button>
      </div>
    </form>
    <script>
    // JavaScript for form submission and redirection
    document.getElementById("signup-form").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent the form from submitting normally

      // Perform any necessary form validation here

      // Redirect to the next page
      window.location.href = "worker-sign-up-nextpage.php";
    });
  </script>
  </div>
</body>
</html>