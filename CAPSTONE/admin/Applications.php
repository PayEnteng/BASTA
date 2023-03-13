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
    <title>Admin Applications | SSU Scholarship Management System</title>
    <link rel="icon" type="image/png" href="../../CAPSTONE/Images/logo.png">
    <link rel="stylesheet" href="../../CAPSTONE/CSS/adminApplications.css">
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
            <h1>Applications</h1>
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


            <form class="header-search" action="">

                <div class="icons">
                    <button id="js-header-search" class="btn btn-nofill tooltip" data-info="Search">
                        <img src="../Images/assets/search_black_24dp.svg" alt="Search" class="btn-icon btn-icon-alt">
                    </button>
                </div>

                <input type="search" class="header-search-input" placeholder="Search applications">

                <div class="icons">
                    <button type="reset" class="btn" data-info="Options">
                        <img src="../Images/assets/clear_black_24dp.svg" alt="Options" class="btn-icon btn-icon-alt">
                    </button>
                </div>

                <div class="icons">
                    <button id="header-search-options" class="btn tooltip" data-info="Options">
                        <img src="../Images/assets/arrow_drop_down_black_24dp.svg" alt="Options" class="btn-icon btn-icon-alt">
                    </button>
                </div>

            </form>

            <div class="inbox-menu">

                <div class="inbox-menu-group">

                    <div class="inbox-btn-group">
                        <button class="btn-alt">
                            <img src="../Images/assets/check_box_outline_blank_black_24dp.svg" alt="Select" class="btn-icon-sm btn-icon-alt btn-icon-hover">
                        </button>

                        <button class="btn-sm btn-alt">
                            <img src="../Images/assets/arrow_drop_down_black_24dp.svg" alt="Select" class="btn-icon-sm btn-icon-alt btn-icon-hover">
                        </button>
                    </div>

                    <button class="btn">
                        <img src="../Images/assets/refresh_black_24dp.svg" alt="Refresh" class="btn-icon btn-icon-sm btn-icon-alt btn-icon-hover">
                    </button>

                    <button class="btn">
                        <img src="../Images/assets/more_vert_black_20dp.png" alt="More" class="btn-icon btn-icon-sm btn-icon-alt btn-icon-hover">
                    </button>

                </div>

                <div class="inbox-menu-group">

                    <button class="btn-lg btn-alt">
                        <div class="inbox-menu-pagination">
                            1-50 of 262
                        </div>
                    </button>

                    <div class="inbox-menu-pagination-btn">
                        <button class="btn btn-nofill btn-pagination">
                            <img src="../Images/assets/chevron_left_black_24dp.svg" alt="Newer" class="btn-icon-sm btn-icon-alt">
                        </button>

                        <button class="btn btn-pagination">
                            <img src="../Images/assets/chevron_right_black_24dp.svg" alt="Older" class="btn-icon-sm btn-icon-alt btn-icon-hover">
                        </button>
                    </div>


                </div>

            </div>


            <div class="inbox-category">

                <div id="ctg-primary" class="inbox-category-item active">
                    <svg class="inbox-category-icon btn-icon btn-icon-sm btn-icon-alt active" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M19 3H4.99c-1.11 0-1.98.89-1.98 2L3 19c0 1.1.88 2 1.99 2H19c1.1 0 2-.9 2-2V5c0-1.11-.9-2-2-2zm0 12h-4c0 1.66-1.35 3-3 3s-3-1.34-3-3H4.99V5H19v10z" />
                    </svg>
                    <span class="inbox-category-title">Pending</span>
                </div>

                <div class="inbox-category-item">
                    <svg class="inbox-category-icon btn-icon btn-icon-alt btn-icon-sm" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                    </svg>
                    <span class="inbox-category-title">Waitlisted</span>
                </div>

                <div class="inbox-category-item">
                    <svg class="inbox-category-icon btn-icon btn-icon-alt btn-icon-sm" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z" />
                    </svg>
                    <span class="inbox-category-title">Completed</span>
                </div>

            </div>
            <!-- MAIL CONTENT -->
            <div class="content">
                <div class="mail">

                    <div class="inbox-message-item">

                        <div class="checkbox" style="margin-right: -12px;">
                            <button class="btn">
                                <img src="../Images/assets/check_box_outline_blank_black_24dp.svg" alt="Select" class="btn-icon-sm btn-icon-alt btn-icon-hover message-btn-icon">
                            </button>
                        </div>

                        <div class="message-group-hidden">
                            <button class="btn-alt btn-nofill drag-indicator">
                                <img src="../Images/assets/drag_indicator_black_24dp.svg" alt="Drag" class="btn-icon-sm btn-icon-alt btn-icon-disabled">
                            </button>
                        </div>

                        <button class="btn star" style="margin: 0;">
                            <img src="../Images/assets/star_border_black_24dp.svg" alt="Not starred" class="btn-icon-sm btn-icon-alt btn-icon-hover message-btn-icon">                           
                        </button>

                        <div class="message-default">

                            <div class="message-sender message-content unread">
                                <span>Cascadom</span>
                            </div>

                            <div class="message-subject message-content unread">
                                <span>Dev Horror Stories: 👻 2000 lines of inline styles</span>
                            </div>

                            <div class="message-seperator message-content"> - </div>

                            <div class="message-body message-content">
                                <span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta error beatae optio ea, quod harum. Iure ab sed, dolores eos repudiandae inventore magnam id modi blanditiis harum at. Facere, exercitationem.</span>
                            </div>

                            <div class="gap message-content"> &nbsp; </div>

                            <div class="message-date center-text unread">
                                <span>12:09 AM</span>
                            </div>

                        </div>

                        <div class="message-group-hidden">
                            <div class="inbox-message-item-options">
                                <button class="btn">
                                    <img src="../Images/assets/archive_black_24dp.svg" alt="Archive" class="btn-icon-sm btn-icon-alt btn-icon-hover">
                                </button>

                                <button class="btn">
                                    <img src="../Images/assets/delete_black_24dp.svg" alt="Delete" class="btn-icon-sm btn-icon-alt btn-icon-hover">
                                </button>

                                <button class="btn">
                                    <img src="../Images/assets  /mark_as_unread_black_24dp.svg" alt="Mark as unread" class="btn-icon-sm btn-icon-alt btn-icon-hover">
                                </button>

                                <button class="btn">
                                    <img src="../Images/assets/access_time_filled_black_24dp.svg" alt="Snooze" class="btn-icon-sm btn-icon-alt btn-icon-hover">
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="inbox-message-item  message-default-unread">

                        <div class="checkbox" style="margin-right: -12px;">
                            <button class="btn">
                                <img src="../Images/assets/check_box_outline_blank_black_24dp.svg" alt="Select" class="btn-icon-sm btn-icon-alt btn-icon-hover message-btn-icon">
                            </button>
                        </div>

                        <div class="message-group-hidden">
                            <button class="btn-alt btn-nofill drag-indicator">
                                <img src="../Images/assets/drag_indicator_black_24dp.svg" alt="Drag" class="btn-icon-sm btn-icon-alt btn-icon-disabled">
                            </button>
                        </div>

                        <div>
                            <button class="btn star" style="margin: 0;">
                                <img src="../Images/assets/star_border_black_24dp.svg" alt="Not starred" class="btn-icon-sm btn-icon-alt btn-icon-hover message-btn-icon">
                            </button>
                        </div>

                        <div class="message-default">

                            <div class="message-sender message-content">
                                <span>Mr. President</span>
                            </div>

                            <div class="message-subject message-content">
                                <span>Thanks for Saving the World</span>
                            </div>

                            <div class="message-seperator message-content"> - </div>

                            <div class="message-body message-content">
                                <span> Party at my crib next weekend, amet consectetur adipisicing elit. Soluta error beatae optio ea, quod harum. Iure ab sed, dolores eos repudiandae inventore magnam id modi blanditiis harum at. Facere, exercitationem.</span>
                            </div>

                            <div class="gap message-content"> &nbsp; </div>

                            <div class="message-date center-text">
                                <span>4:23 PM</span>
                            </div>

                        </div>

                        <div class="message-group-hidden">
                            <div class="inbox-message-item-options">
                                <button class="btn">
                                    <img src="../Images/assets/archive_black_24dp.svg" alt="Archive" class="btn-icon-sm btn-icon-alt btn-icon-hover">
                                </button>

                                <button class="btn">
                                    <img src="../Images/assets/delete_black_24dp.svg" alt="Delete" class="btn-icon-sm btn-icon-alt btn-icon-hover">
                                </button>

                                <button class="btn">
                                    <img src="../Images/assets/mark_as_unread_black_24dp.svg" alt="Mark as unread" class="btn-icon-sm btn-icon-alt btn-icon-hover">
                                </button>

                                <button class="btn">
                                    <img src="../Images/assets/access_time_filled_black_24dp.svg" alt="Snooze" class="btn-icon-sm btn-icon-alt btn-icon-hover">
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="inbox-message-item  message-default-unread">

                        <div class="checkbox" style="margin-right: -12px;">
                            <button class="btn">
                                <img src="../Images/assets/check_box_outline_blank_black_24dp.svg" alt="Select" class="btn-icon-sm btn-icon-alt btn-icon-hover message-btn-icon">
                            </button>
                        </div>

                        <div class="message-group-hidden">
                            <button class="btn-alt btn-nofill drag-indicator">
                                <img src="../Images/assets/drag_indicator_black_24dp.svg" alt="Drag" class="btn-icon-sm btn-icon-alt btn-icon-disabled">
                            </button>
                        </div>

                        <div>
                            <button class="btn star" style="margin: 0;">
                                <img src="../Images/assets/star_border_black_24dp.svg" alt="Not starred" class="btn-icon-sm btn-icon-alt btn-icon-hover message-btn-icon">
                            </button>
                        </div>

                        <div class="message-default">

                            <div class="message-sender message-content">
                                <span>Spotify</span>
                            </div>

                            <div class="message-subject message-content">
                                <span>🎉 💰 New Job who this? </span>
                            </div>

                            <div class="message-seperator message-content"> - </div>

                            <div class="message-body message-content">
                                <span> Hello, Habib! We are glad to break the news to you, amet consectetur adipisicing elit. Soluta error beatae optio ea, quod harum. Iure ab sed, dolores eos repudiandae inventore magnam id modi blanditiis harum at. Facere, exercitationem.</span>
                            </div>

                            <div class="gap message-content"> &nbsp; </div>

                            <div class="message-date center-text">
                                <span>2:01 PM</span>
                            </div>

                        </div>

                        <div class="message-group-hidden">
                            <div class="inbox-message-item-options">
                                <button class="btn">
                                    <img src="../Images/assets/archive_black_24dp.svg" alt="Archive" class="btn-icon-sm btn-icon-alt btn-icon-hover">
                                </button>

                                <button class="btn">
                                    <img src="../Images/assets/delete_black_24dp.svg" alt="Delete" class="btn-icon-sm btn-icon-alt btn-icon-hover">
                                </button>

                                <button class="btn">
                                    <img src="../Images/assets/mark_as_unread_black_24dp.svg" alt="Mark as unread" class="btn-icon-sm btn-icon-alt btn-icon-hover">
                                </button>

                                <button class="btn">
                                    <img src="../Images/assets/access_time_filled_black_24dp.svg" alt="Snooze" class="btn-icon-sm btn-icon-alt btn-icon-hover">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </main>
        <!------------------------------------------------------- END OF MAIN ------------------------------------------------------->
        <div class="right">
           
        </div>
    </div>
    <script src="../../CAPSTONE/js/adminDashboard.js"></script>
    <script defer src="../../CAPSTONE/js/activePage.js"></script>
</body>

</html>