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

<?php
   // connect to database

$conn = mysqli_connect("localhost", "root", "", "blue_volte");

// check if connection is successful

if(mysqli_connect_error()){
   exit ('failed to connect: ' .mysqli_connect_error());
}
    

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
<script>
      var countdown;

function startTimer() {
    var hours = parseInt(document.getElementById('hours').value) || 0;
    var minutes = parseInt(document.getElementById('minutes').value) || 0;
    var seconds = parseInt(document.getElementById('seconds').value) || 0;

    var totalTimeInSeconds = (hours * 3600) + (minutes * 60) + seconds;

    clearInterval(countdown);
    countdown = setInterval(function() {
        if (totalTimeInSeconds <= 0) {
            clearInterval(countdown);
            document.getElementById('timerDisplay').innerHTML = 'Time\'s up!';
        } else {
            var timeString = formatTime(totalTimeInSeconds);
            document.getElementById('timerDisplay').innerHTML = timeString;
            totalTimeInSeconds--;
        }
    }, 1000);
}

function formatTime(totalSeconds) {
    var hours = Math.floor(totalSeconds / 3600);
    var minutes = Math.floor((totalSeconds % 3600) / 60);
    var seconds = totalSeconds % 60;

    return pad(hours) + ':' + pad(minutes) + ':' + pad(seconds);
}

function pad(num) {
    return num.toString().padStart(2, '0');
}
</script>
<body>
    <div class="container">
       <aside>
          <div class="top">
            <div class="logo">
                <img src="../img/dina.png">
                <!--<h2>BLUE<span class="danger">VOLTE</span></h2>---->
            </div>
            <div id="close-btn" class="close">
                <span class="material-icons-sharp">close</span>
            </div>
          </div>
          
          <div class="sidebar">
            <a href="../dashboard/dashboard.php" class="active">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Dashboard</h3>
            </a>
            <a href="../profile/profile.php">
                <span class="material-icons-sharp">person</span>
                <h3>Profile</h3>
            </a>
            <a href="../index.php">
                <span class="material-icons-sharp">group_add</span>
                <h3>Referrals</h3>
            </a>
            <a href="../withdraw/withdraw.php">
                <span class="material-icons-sharp">credit_card</span>
                <h3>Withdrawls</h3>
            </a>
            <a href="../report/report.php" class="active">
                <span class="material-icons-sharp">report_gmailerrorred</span>
                <h3>Reports</h3>
            </a>
            <!--<a href="#">
                <span class="material-icons-sharp">add</span>
                <h3>Add Products</h3>
            </a>------>
            <a href="">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>
          </div>
       </aside>
       <!-------------------------------end of aside---------------------------->

       <main>
        <!--<h1>Dashboard</h1>--->

        <!---<div class="powers">
                    <div class="timer-container">
                         <input type="number" class="timer-input" id="hours" placeholder="00" name="hour">
                         <input type="number" class="timer-input" id="minutes" placeholder="00" name="minutes">
                         <input type="number" class="timer-input" id="seconds" placeholder="00" name="seconds">
                         <button class="timer-button" onclick="startTimer()">Start</button>
                         <div class="timer-display" id="timerDisplay">00:00:00</div>
                   </div>
             
             <div class="power-toggler">
                 <span class="material-icons-sharp active">power_settings_new</span>
                 <span class="material-icons-sharp">power_off</span>
             </div>
        </div>--->

        <div class="insights">
            <div class="sales">
                <a href="">
                <span class="material-icons-sharp">attach_money</span>
                <div class="middle">
                     <div class="left">
                         <h2>Earnings</h2>
                         
                     </div>
                     <div class="progress">
                          <!-----<svg>
                            <circle cx='38' cy='38' r='36'></circle>
                          </svg>----->
                          <div class="number">
                               <p>₦<?php echo "$batt_lv";?></p>
                          </div>
                     </div>
                </div>
                <small class="text-muted">Today</small>
                </a>
            </div>
            <!---------------------------END OF SALES-------------------------->
            <div class="expenses">
                <a href="">
                <span class="material-icons-sharp">group_add</span>
                <div class="middle">
                     <div class="left">
                         <h2>No. of referral</h2>
                     </div>
                     <div class="progress">
                           <!-----<svg>
                            <circle cx='38' cy='38' r='36'></circle>
                          </svg>-->
                          <div class="number">
                               <p><?php echo "$pow";?></p>
                          </div>
                     </div>
                </div>
                <small class="text-muted"></small>
                </a>
            </div>
            <!--------------------------END OF EXPENSES---------------------------->
            <div class="income">
                <a href="../withdraw/withdraw.php">
                <span class="material-icons-sharp">credit_card</span>
                <div class="middle">
                     <div class="left">
                         <h2>Withdrawal</h2>
                         
                     </div>
                     <div class="progress">
                          <!----- <svg>
                            <circle cx='38' cy='38' r='36'></circle>
                          </svg>--->
                          <div class="number">
                               <p>₦<?php echo "$batt_v";?></p>
                          </div>
                     </div>
                </div>
                <small class="text-muted">Past 1 month</small>
                </a>
            </div>
            <!--------------------END OF INCOME------------------------>
        </div>
        <div class="recent-orders">
            <h2>Referals</h2>
            <table>
               <thead>
                <tr>
                    <th>ID</th>
                    <th></th>
                    <th>Referal mail</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jeremiah</td>
                    <td></td>
                    <td>jerry@email.com</td>
                    <td class="warning">Active</td>
                    <td class="white">Details</td>
                </tr>
                <tr>
                    <td>Jeremiah</td>
                    <td></td>
                    <td>jerry@email.com</td>
                    <td class="warning">Active</td>
                    <td class="white">Details</td>
                </tr>
                <tr>
                    <td>Jeremiah</td>
                    <td></td>
                    <td>jerry@email.com</td>
                    <td class="warning">Active</td>
                    <td class="white">Details</td>
                </tr>
                <tr>
                    <td>Jeremiah</td>
                    <td></td>
                    <td>jerry@email.com</td>
                    <td class="warning">Active</td>
                    <td class="white">Details</td>
                </tr>
                <tr>
                    <td>Jeremiah</td>
                    <td></td>
                    <td>jerry@email.com</td>
                    <td class="warning">Active</td>
                    <td class="white">Details</td>
                </tr>
                <tr>
                    <td>Jeremiah</td>
                    <td></td>
                    <td>jerry@email.com</td>
                    <td class="warning">Active</td>
                    <td class="white">Details</td>
                </tr>
               </tbody>
            </table>
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
                       <a href="../profile/profile.php"><img src="../img/propic.jpg" alt=""></a>
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
                <a href="">
                <div class="item add-product">
                    <div>
                        <h3>Shop</h3>
                    </div>
                </div>
                </a>
            </div>
       </div>
    </div>

    <script src="script.js"></script>
    <?php 
        $hour = $_POST['hour'];
        $minutes = $_POST['minutes'];
        $seconds = $_POST['seconds'];
        $date = $_POST['date'] = date("Y-m-d H:i:s");
    
        $sql = "INSERT INTO timer(intervals,duration,seconds,dates) VALUES('".$hour."', '".$minutes."','".$seconds."','".$date."')";
    
    ?>
</body>
</html>
