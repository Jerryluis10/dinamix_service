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
    <div class="container">
       <aside>
          <div class="top">
            <div class="logo">
                <img src="../img/DINAMIX LOGO.png">
                <h2><span class="danger"></span></h2>
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
              </div>
           </div>
          <div class="sidebar">
            <a href="../dashboard/dashboard.php">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Dashboard</h3>
            </a>
            <a href="../profile/profile.php" >
                <span class="material-icons-sharp">person</span>
                <h3>Profile</h3>
            </a>
            <a href="#" class="active">
                <span class="material-icons-sharp">report_gmailerrorred</span>
                <h3>Reports</h3>
            </a>
            <a href="../withdraw/withdraw.php" class="">
                <span class="material-icons-sharp">credit_card</span>
                <h3>Withdrawal</h3>
            </a>
            <a href="../dashboard/dashboard.php">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>
          </div>
       </aside>
       <!-------------------------------end of aside---------------------------->

       <main>
        <div class="recent-orders">
            <div class="report-form">
                <h2>Leave a Report</h2>
                <form action="" method="post"  class="rep-form">
                    <input type="text" placeholder="Name" required name="name"><br>
                    <input type="email" placeholder="Email" required name="email"><br>
                    <textarea name="report" id="" cols="30" rows="10" placeholder="Report:"></textarea><br>
                    <button type="submit">Submit</button>
                  </form>
            </div>
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
     
         
       </div>
    </div>

    <script src="script.js"></script>
    <?php 
    require '../db.php';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $report = $_POST['report'];
    $date = $_POST['date'] = date("Y-m-d H:i:s");

    $sql = "INSERT INTO reports(names,email,report,dates) VALUES('".$name."', '".$email."', '".$report."', '".$date."')";
         if($conn->query($sql) === FALSE){
             echo "error:" .$sql. ".<br>." .$conn->error;
         }
    
    ?>
    <?php mysqli_close($conn); ?>
</body>
</html>