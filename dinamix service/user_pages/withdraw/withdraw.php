<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="withdraw.css">
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
        $earnings = $row["earnings"]; 
        $acc_name = $row["acc_name"]; 
        $acc_num = $row["acc_num"]; 
        $bank_name = $row["bank_name"]; 
    

   
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
            <a href="../profile/profile.php" class="">
                <span class="material-icons-sharp">person</span>
                <h3>Profile</h3>
            </a>
            <!--<a href="#" class="">
                <span class="material-icons-sharp">group_add</span>
                <h3>Referral</h3>
            </a>--->
            <a href="../withdraw/withdraw.php" class="active">
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
                        <label for="name">Balance:</label>
                        <input type="text" readonly name="earnings" value="<?php echo "$earnings";?>">
                    </div>
                    <div class="emal">
                        <label for="Email">Withdrawal amount:</label>
                        <input type="number" name="email" placeholder="Amount">
                    </div>
                    <div class="curt">
                        <label for="current password">Account number:</label>
                        <input type="text"  value="<?php echo "$acc_num";?>">
                    </div>
                    
                    <div class="bio">
                        <label for="bio">Account name:</label>
                        <input name="bio" id="" cols="30" rows="10" value="<?php echo "$acc_name";?>">
                    </div>
                    <div class="up-img">
                        <label for="upload-image">Bank:</label>
                        <select name="" id="">
                            <option value="">Bank</option>
                            <option value="">UBA</option>
                            <option value="">GTB</option>
                            <option value="">UNION BANK</option>
                            <option value="">STANBIC IBTC</option>
                            <option value="">ACCESS BANK</option>
                            <option value="">FIRST BANK</option>
                            <option value="">ZENITH</option>
                            <option value="">POLARIS</option>
                            <option value="">PALMPAY</option>
                            <option value="">OPAY</option>
                            <option value="">KUDA</option>
                        </select>
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
                       <a href="../profile/profile.php"><img src="../img/propic.jpg" alt=""></a>
                     </div>
                </div>
            </div>
            <!-------------------------END OF TOP--------------------->
          
            <!--------------------------------END OF RECENT UPDATES----------------------------->
            
       </div>
    </div>

    <script src="script.js"></script>
</body>
</html>