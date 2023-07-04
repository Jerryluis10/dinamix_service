<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $conn =  mysqli_connect("localhost", "root", "", "dinamix");
    if(mysqli_connect_error()){
        exit ('failed to connect: ' .mysqli_connect_error());
     }

// SQL query to fetch data from a table

$sql = "SELECT * FROM users";  // Replace with your table name

// Execute the query
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Loop through each row
    while ($row = $result->fetch_assoc()) {
        // Access the data from the row
        $id = $row["id"];          // Replace with your column name
        $user_name = $row["user_name"];      // Replace with your column name
        $email = $row["email"];    // Replace with your column name
        $passwd = $row["passwd"];    // Replace with your column name
        $bio = $row["bio"];    // Replace with your column name
    

   
    }
} else {
    echo "No results found.";
}

    if ($conn->query($sql) === FALSE){
             echo "error:" .$sql. ".<br>." .$conn->error;
         }

         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Assuming you have received the updated email and user ID from the form
            $user_name = $_POST['user_name'];
            $email = $_POST['email'];
            $passwd = $_POST['passwd'];
            $bio = $_POST['bio'];
        
            // Prepare the update query
            $update_query = "UPDATE users SET user_name='$user_name' WHERE id= $id ";
            $update_query = "UPDATE users SET email='$email' WHERE id= $id  ";
            $update_query = "UPDATE users SET passwd='$passwd' WHERE id= $id  ";
            $update_query = "UPDATE users SET bio='$bio' WHERE id= $id ";
        
            // Execute the query
            if ($conn->query($update_query) === TRUE) {
                echo "Record updated successfully!";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    
    ?>
    <?php mysqli_close($conn); ?>
    <div class="container">
       <aside>
          <div class="top">
            <div class="logo">
                <img src="../img/dina.png">
                <!---<h2>BLUE<span class="danger">VOLTE</span></h2>----->
            </div>
            <div id="close-btn" class="close">
                <span class="material-icons-sharp">close</span>
            </div>
          </div>
          
           <div class="user-profile">
            <div>
                <a href="../dashboard/dashboard.php">
                    <span class="material-icons-sharp back">arrow_back</span>
                </a>
              </div>
              <div class="profile-photos">
                <img src="../img/propic.jpg" alt="">
              </div>
              <div class="adding">
                <a href=""><span class="material-icons-sharp add">add</span></a>
              </div>
              <div class="admin">
                <h3>Jeremiah</h3>
                <h4>jerryluis4life@gmail.com</h4>
                <h4>Electrician</h4>
              </div>
           </div>
          <div class="sidebar">
            <a href="../dashboard/dashboard.php">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Dashboard</h3>
            </a>
            <a href="#" class="active">
                <span class="material-icons-sharp">person</span>
                <h3>Profile</h3>
            </a>
            <!--<a href="#" class="">
                <span class="material-icons-sharp">group_add</span>
                <h3>Referral</h3>
            </a>--->
            <a href="../withdraw/withdraw.php" class="">
                <span class="material-icons-sharp">credit_card</span>
                <h3>Withdrawal</h3>
            </a>
            <a href="../report/report.php">
                <span class="material-icons-sharp">report_gmailerrorred</span>
                <h3>Reports</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>
          </div>
       </aside>
       <!-------------------------------end of aside---------------------------->

       <main>
       <form action="" method="post">
                <div class="box">
                    <div class="nam">
                        <label for="name">Name:</label>
                        <input type="text" name="user_name" value="<?php echo "$user_name";?>">
                    </div>
                    <div class="emal">
                        <label for="Email">Email:</label>
                        <input type="email" name="email" value="<?php echo "$email";?>">
                    </div>
                    <div class="curt">
                        <label for="current password">Current Password:</label>
                        <input type="text" readonly value="<?php echo "$passwd";?> ">
                    </div>
                    <div class="new">
                        <label for="new password">New Password:</label>
                        <input type="text" name="passwd" placeholder="New password">
                    </div>
                    <div class="bio">
                        <label for="bio">Bio</label>
                        <textarea name="bio" id="" cols="30" rows="10" placeholder="<?php echo "$bio";?>"></textarea>
                    </div>
                    <div class="up-img">
                        <label for="upload-image">Upload-image:</label>
                        <input type="text" placeholder="Add image" readonly>
                    </div>
                    <div class="sub"><button type="submit">Save</button></div>
                </div>
               </form>
       
       </main>
    <!---------------------------------END OF MAIN-------------------------------------->
      
       <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                     <div class="info">
                        <p>Hey. <b>Jeremiah</b></p>
                        <small class="text-muted">Admin</small>
                     </div>
                     <div class="profile-photo">
                       <a href="#"><img src="../img/propic.jpg" alt=""></a>
                     </div>
                </div>
            </div>
            <!-------------------------END OF TOP--------------------->
          
            <!--------------------------------END OF RECENT UPDATES----------------------------->
            <div class="sales-analytics">
                <h2>Historical Records <span class="material-icons-sharp">history</span></h2>
                <a href="">
                <div class="item online">
                    <div class="icon">
                        <span class="material-icons-sharp">notifications_active</span>
                    </div>
                    <div class="right">
                         
                         <div class="info">
                            <h3>Announcements</h3>
                            <small class="text-muted">Last 5 Hours</small>
                         </div>
                         <h5 class="success">+</h5>
                        
                    </div>
                </div>
                </a>
                <a href="">
                <a href="">
                <div class="item offline">
                    
                    <div class="icon">
                        <span class="material-icons-sharp">support_agent</span>
                    </div>
                    <div class="right">
                         <div class="info">
                            <h3>online customer service</h3>
                            <small class="text-muted">Last 24 Hours</small>
                         </div>
                         <!--<h5 class="danger">-<?php echo "$pow";?></h5>------>
                   
                    </div>
                </div>
                </a>
                <a href="../withdraw/withdraw.php">
                <div class="item customers">
                    
                    <div class="icon">
                        <span class="material-icons-sharp">credit_card</span>
                    </div>
                    <div class="right">
                         <div class="info">
                            <h3>Payment</h3>
                            <small class="text-muted">Last 24 Hours</small>
                         </div>
                         <!--<h5 class="danger">-<?php echo "$pow";?></h5>------>
                    
                    </div>
                </div>
                </a>
                <a href="">
                <div class="item add-product">
                    <div>
                        <span class="material-icons-sharp">add</span>
                        <h3>Share App</h3>
                    </div>
                </div>
                </a>
            </div>
       </div>
    </div>

    <script src="script.js"></script>
</body>
</html>