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
    <title>Home | SSU Scholarship Management System</title>
    <link rel="icon" type="image/png" href="../../CAPSTONE/Images/logo.png">
    <link rel="stylesheet" href="../../CAPSTONE/CSS/studentScholarships.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <style>
        .material-symbols-sharp {
            font-variation-settings:
                'FILL' 1,
                'wght' 200,
                'GRAD' 200,
                'opsz' 48
        }
        .material-symbols-rounded {
            font-variation-settings:
                'FILL' 1,
                'wght' 400,
                'GRAD' 100,
                'opsz' 20
        }
    </style>
</head>

<body>
    <div class="container">
        <aside>
            <div class="topp">
                <div class="logo">
                    <img src="../../CAPSTONE/Images/logo.png" alt="Sorsogon State University Scholarship Management System">
                    <h2>Sorsogon State University</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">close</span>
                </div>
                <h6 class="danger">Scholarship Management System</h6>
            </div>
            <div class="sidebar">
                <a href="../../CAPSTONE/student/studentDashboard.php">
                    <span class="material-symbols-sharp">home_app_logo</span>
                    <h3>Home</h3>
                </a>
                <a href="../../CAPSTONE/student/studentScholarships.php">
                    <span class="material-symbols-sharp">school</span>
                    <h3>Scholarships</h3>
                </a>
                <a href="../../CAPSTONE/student/studentApplication.php">
                    <span class="material-symbols-sharp">local_post_office</span>
                    <h3>Application</h3>
                </a>
                <a href="../../CAPSTONE/student/studentApplicationStatus.php">
                    <span class="material-symbols-sharp">mail</span>
                    <h3>Application Status</h3>
                </a>
                <a href="../../CAPSTONE/student/studentSettings.php">
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
            <h1>Scholarships</h1>
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
                        <small class="text-muted">STUDENT</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../../CAPSTONE/Images/profile-default-male.png" alt="Profile Photo">
                    </div>
                </div>
            </div>
            <!----------- END OF TOP ----------->


            
        </main>
        <!------------------------------------------------------- END OF MAIN ------------------------------------------------------->
        <div class="right">
           
        </div>
    </div>
    <script src="../../CAPSTONE/js/adminDashboard.js"></script>
    <script defer src="../../CAPSTONE/js/activePage.js"></script>
</body>

</html>