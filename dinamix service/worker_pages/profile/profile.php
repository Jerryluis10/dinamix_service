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
    require 'db.php';
    

// SQL query to fetch data from a table
$sql = "SELECT * FROM inverter_data";  // Replace with your table name

// Execute the query
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Loop through each row
    while ($row = $result->fetch_assoc()) {
        // Access the data from the row
        $id = $row["id"];          // Replace with your column name
        $batt_lv = $row["batt_lv"];      // Replace with your column name
        $pow = $row["pow"];    // Replace with your column name
        $batt_v = $row["batt_v"];    // Replace with your column name
        $pow_usa = $row["pow_usa"];    // Replace with your column name
        $solar = $row["solar"];    // Replace with your column name
        $turbine = $row["turbine"];    // Replace with your column name

   
    }
} else {
    echo "No results found.";
}

    if ($conn->query($sql) === FALSE){
             echo "error:" .$sql. ".<br>." .$conn->error;
         }
    
    ?>
    <?php mysqli_close($conn); ?>
    <div class="container">
       <aside>
          <div class="top">
            <div class="logo">
                <img src="img/dina.png">
                <!---<h2>BLUE<span class="danger">VOLTE</span></h2>----->
            </div>
            <div id="close-btn" class="close">
                <span class="material-icons-sharp">close</span>
            </div>
          </div>
          
           <div class="user-profile">
            <div>
                <a href="../blue-volte/dashboard/dashboard.php">
                    <span class="material-icons-sharp back">arrow_back</span>
                </a>
              </div>
              <div class="profile-photos">
                <img src="img/propic.jpg" alt="">
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
            <a href="../blue-volte/dashboard/dashboard.php">
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
            <a href="#" class="">
                <span class="material-icons-sharp">credit_card</span>
                <h3>Withdrawal</h3>
            </a>
            <a href="../blue-volte/report/report.php">
                <span class="material-icons-sharp">report_gmailerrorred</span>
                <h3>Reports</h3>
            </a>
            <a href="../blue-volte/bv/bv.html">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>
          </div>
       </aside>
       <!-------------------------------end of aside---------------------------->

       <main>
        <div class="recent-orders">
            <h2>WORKER INFORMATION</h2>
            <table>
               <thead>
                <tr>
                    <th>ID</th>
                    <th>Job</th>
                    <th>Income</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jeremiah</td>
                    <td>Electrician</td>
                    <td>₦100,000</td>
                    <td class="warning">Active</td>
                    <td class="white">Details</td>
                </tr>
               </tbody>
            </table>
            <div class="lev-hs">
                <!---<h2>SYSTEM OVERVIEW</h2>---->
            </div>
        <div class="insights">
            <div class="sales">
                <a href="">
                <h2>Earnings</h2>
                <div class="middle">
                     <div class="left">
                     <p>₦<?php echo "$batt_lv";?><p> 
                         
                     </div>
                     
                </div>
                <small class="text-muted">Today</small>
                </a>
            </div>
            <!---------------------------END OF SALES-------------------------->
            <div class="expenses">
                <a href="">
                <h2>Ratings</h2>
                <div class="middle">
                     <div class="left">
                     <p><?php echo "$pow";?></p>  
                         
                     </div>
                     
                </div>
                <small class="text-muted">3 years</small>
                </a>
            </div>
            <!--------------------------END OF EXPENSES---------------------------->
            <div class="income">
                <a href="">
                <h2>Withdrawl</h2>
                <div class="middle">
                     <div class="left">
                     <p>₦<?php echo "$batt_v";?></p> 
                         
                     </div>
                     
                </div>
                <small class="text-muted">Last 1 month</small>
                </a>
            </div>
            <!--------------------END OF INCOME------------------------>
        </div>
        </div>
        <!-------------------END OF INSIGHTS---------------------->

       
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
                       <a href="../blue-volte/index.php"><img src="img/propic.jpg" alt=""></a>
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
                         <h5 class="success">+<?php echo "$pow";?></h5>
                        
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
                <a href="">
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