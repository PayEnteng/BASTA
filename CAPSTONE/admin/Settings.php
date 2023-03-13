<?php
session_start();

include("../../CAPSTONE/server.php");
include("../../CAPSTONE/functions.php");

$user_data = check_login($con);

?>
<!DOCTYPE html>
<html Lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings | SSU Scholarship Management System</title>
    <link rel="icon" type="image/png" href="../../CAPSTONE/Images/logo.png">
    <link rel="stylesheet" href="../../CAPSTONE/CSS/adminSettings.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <style>
        .material-symbols-sharp {
            font-variation-settings:
                'FILL' 1,
                'wght' 200,
                'GRAD' 200,
                'opsz' 48
        }
    </style>
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../../CAPSTONE/Images/logo.png" alt="logo">
                    <h2>Sorsogon State University</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">close</span>
                </div>
                <h6 class="danger">Scholarship Management System</h6>
            </div>
            <div class="sidebar">
                <a href="../../CAPSTONE/index.php">
                    <span class="material-symbols-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="../../CAPSTONE/admin/Scholarships.php">
                    <span class="material-symbols-sharp">school</span>
                    <h3>Scholarships</h3>
                </a>
                <a href="../../CAPSTONE/admin/Students.php">
                    <span class="material-symbols-sharp">groups</span>
                    <h3>Students</h3>
                </a>
                <a href="../../CAPSTONE/admin/Applications.php">
                    <span class="material-symbols-sharp">mail</span>
                    <h3>Applications</h3>
                    <?php
                        $queryy = "SELECT id FROM student_list WHERE Scholarship_Status IN('Pending')";
                        $query_runn = mysqli_query($con, $queryy);

                        $roww = mysqli_num_rows($query_runn);
                    ?>
                    <span class="message-count"><?php echo $roww; ?></span>
                </a>
                <a href="../../CAPSTONE/admin/Records.php">
                    <span class="material-symbols-sharp">folder_open</span>
                    <h3>Records</h3>
                </a>
                <a href="../../CAPSTONE/admin/Settings.php">
                    <span class="material-symbols-sharp">settings</span>
                    <h3>Settings</h3>
                </a>
                <a href="../../CAPSTONE/logout.php">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!----------- END OF ASIDE ----------->
        <main>
            <h1>Settings</h1>
            
           
        </main>
        <!------------------------------------------------------- END OF MAIN ------------------------------------------------------->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-sharp">menu</span>
                </button>
                <div class="themeToggler">
                    <span class="material-symbols-sharp active">light_mode</span>
                    <span class="material-symbols-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b><?php echo $user_data['firstname']; ?> </b></p>
                        <small class="text-muted">ADMIN</small>
                        <!-- <small class="text-muted"><?php echo $user_data['Position']; ?></small> -->
                    </div>
                    <div class="profile-photo">
                        <img src="../../CAPSTONE/Images/profile-admin-male.png" alt="Profile Photo">
                    </div>
                </div>
            </div>
            <!----------- END OF TOP ----------->
        </div>
    </div>
    <script src="../../CAPSTONE/js/activePage.js"></script>
    <script defer src="../../CAPSTONE/js/adminDashboard.js"></script>
</body>
</html>