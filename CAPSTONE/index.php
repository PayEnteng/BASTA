<?php
session_start();

include("server.php");
include("functions.php");

$user_data = check_login($con);

?>
<!DOCTYPE html>
<html Lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | SSU Scholarship Management System</title>
    <link rel="icon" type="image/png" href="./Images/logo.png">
    <link rel="stylesheet" href="./CSS/adminDashboard.css">
    <link rel="stylesheet" href="./CSS/search.css">
    <link rel="stylesheet" href="./CSS/circularprogressbar.css">
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
                    <img src="./Images/logo.png" alt="logo">
                    <h2>Sorsogon State University</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">close</span>
                </div>
                <h6 class="danger">Scholarship Management System</h6>
            </div>
            <div class="sidebar">
                <a href="index.php">
                    <span class="material-symbols-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="./admin/Scholarships.php">
                    <span class="material-symbols-sharp">school</span>
                    <h3>Scholarships</h3>
                </a>
                <a href="./admin/Students.php">
                    <span class="material-symbols-sharp">groups</span>
                    <h3>Students</h3>
                </a>
                <a href="./admin/Applications.php">
                    <span class="material-symbols-sharp">mail</span>
                    <h3>Applications</h3>
                    <?php
                        $queryy = "SELECT id FROM student_list WHERE Scholarship_Status IN('Pending')";
                        $query_runn = mysqli_query($con, $queryy);

                        $roww = mysqli_num_rows($query_runn);
                    ?>
                    <span class="message-count"><?php echo $roww; ?></span>
                </a>
                <a href="./admin/Records.php">
                    <!-- <span class="material-symbols-sharp">list_alt</span> -->
                    <span class="material-symbols-sharp">folder_open</span>
                    <h3>Records</h3>
                </a>
                <a href="./admin/Settings.php">
                    <span class="material-symbols-sharp">settings</span>
                    <h3>Settings</h3>
                </a>
                <a href="logout.php">
                    <span class="material-symbols-sharp" id="logout-btn">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!----------- END OF ASIDE ----------->
        <main onload="renderTime();">
            <h1>Dashboard</h1>
            <div class="date" id="dateTimeDisplay">
                <input type="date">
            </div>
            <div class="insights">
                <div class="scholars">
                    <span class="material-symbols-sharp">how_to_reg</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Student Scholars</h3>
                            <?php
                            $query = "SELECT id FROM student_list WHERE Scholarship_Status = 'Completed'";
                            $query_run = mysqli_query($con, $query);

                            $row = mysqli_num_rows($query_run);

                            echo '<h1>' . $row . '</h1>';
                            ?>
                        </div>
                        <div class="progress">
                            <div class="circular-progress" id="cp1">
                                <div class="value-container" id="vc1">
                                    <?php
                                    $total_query = "SELECT id FROM student_list ORDER BY id";
                                    $total_result = mysqli_query($con, $total_query);

                                    $total = mysqli_num_rows($total_result);

                                    $count1 = $row / $total;
                                    $count2 = $count1 * 100;
                                    ?>
                                    <script>
                                        let progressBar = document.querySelector("#cp1");
                                        let valueContainer = document.querySelector("#vc1");

                                        let progressValue = 0;
                                        let progressEndValue = "<?php echo $count2; ?>";
                                        let speed = 20;

                                        let progress = setInterval(() => {
                                        progressValue++;
                                        valueContainer.textContent = `${progressValue}%`;
                                        progressBar.style.background = `conic-gradient(
                                            #7383ec ${progressValue * 3.6}deg,
                                            #cadcff ${progressValue * 3.6}deg
                                        )`;
                                        if (progressValue == progressEndValue) {
                                            clearInterval(progress);
                                        }
                                        }, speed);
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>
                <!----------- END OF SCHOLARS ----------->
                <div class="applications">
                    <span class="material-symbols-sharp">person_add</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Applications</h3>
                            <?php
                            $query1 = "SELECT id FROM student_list WHERE Scholarship_Status IN('Pending', 'Declined') ";
                            $query_run1 = mysqli_query($con, $query1);

                            $row1 = mysqli_num_rows($query_run1);

                            echo '<h1>' . $row1 . '</h1>';
                            ?>
                        </div>
                        <div class="progress">
                            <div class="circular-progress" id="cp2">
                                <div class="value-container" id="vc2">
                                    <?php
                                    $count3 = $row1 / $total;
                                    $count4 = $count3 * 100;
                                    ?>
                                    <script>
                                        let progressBar1 = document.querySelector("#cp2");
                                        let valueContainer1 = document.querySelector("#vc2");

                                        let progressValue1 = 0;
                                        let progressEndValue1 = "<?php echo $count4; ?>";
                                        let speed1 = 20;

                                        let progress1 = setInterval(() => {
                                        progressValue1++;
                                        valueContainer1.textContent = `${progressValue1}%`;
                                        progressBar1.style.background = `conic-gradient(
                                            #7383ec ${progressValue1 * 3.6}deg,
                                            #cadcff ${progressValue1 * 3.6}deg
                                        )`;
                                        if (progressValue1 == progressEndValue1) {
                                            clearInterval(progress1);
                                        }
                                        }, speed);
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>                       
                <!----------- END OF APPLICATIONS ----------->
                <div class="active_programs">
                    <span class="material-symbols-sharp">inventory</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Active Programs</h3>
                            <!-- <?php

                                    // $query1 = "SELECT id FROM student_list WHERE Scholarship_Status IN('Pending', 'Declined') ";
                                    // $query_run1 = mysqli_query($con, $query1);

                                    // $row1 = mysqli_num_rows($query_run1);

                                    // echo '<h1>'. $row1 . '</h1>';

                                    ?> -->
                            <h1>20</h1>
                        </div>
                        <div class="progress">
                            <div class="circular-progress" id="cp3">
                                <div class="value-container" id="vc3">
                                    <?php
                                    // $count3 = $row1 / $total;
                                    // $count4 = $count3 * 100;
                                    ?>
                                    <script>
                                        let progressBar2 = document.querySelector("#cp3");
                                        let valueContainer2 = document.querySelector("#vc3");

                                        let progressValue2 = 0;
                                        // let progressEndValue2 = "<?php echo $count4; ?>";
                                        let progressEndValue2 = 68;
                                        let speed2 = 20;

                                        let progress2 = setInterval(() => {
                                        progressValue2++;
                                        valueContainer2.textContent = `${progressValue2}%`;
                                        progressBar2.style.background = `conic-gradient(
                                            #7383ec ${progressValue2 * 3.6}deg,
                                            #cadcff ${progressValue2 * 3.6}deg
                                        )`;
                                        if (progressValue2 == progressEndValue2) {
                                            clearInterval(progress2);
                                        }
                                        }, speed);
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>
                <!----------- END OF ACTIVE PROGRAMS ----------->
            </div>

            <div class="charts-card">
                <h5 class="chart-title">Scholarship Grantees</h5>
                <div id="bar-chart"></div>
            </div>                            

            <!----------- END OF INSIGHTS ----------->
            <div class="pending-applications">
                <h2>Pending Applications</h2>
                <table id="tableDboard">
                    <thead>
                        <tr>
                            <th>Student ID No.</th>
                            <th>Student Name</th>
                            <th>Course & Year</th>
                            <th>Status</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM student_list WHERE Scholarship_Status IN('Pending', 'Declined', 'Completed')";
                        // $sql = "SELECT * FROM student_list WHERE Scholarship_Status LIKE '%Pending%' OR Scholarship_Status LIKE '%Declined%' OR Scholarship_Status LIKE '%Completed%' ";
                        $result = $con->query($sql);

                        if (!$result) {
                            die("Invalid query: " . $con->$error);
                        }
                        ?>
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            $id = $row["Student_ID"];
                            $fname = $row["First_Name"];
                            $lname = $row["Last_Name"];
                            $course = $row["YearCourseBlock"];
                            $status = $row["Scholarship_Status"];
                        ?>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $fname, " ", $lname; ?></td>
                                <td><?php echo $course; ?></td>
                                <td><?php echo $status; ?></td>
                                <td><a href='#'>view</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
                <a href="./admin/Applications.php"><h4>Show All</h4></a>             
            </div>                               
        </main>
        <!------------------------------------------------------- END OF DASHBOARD ------------------------------------------------------->
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
                        <img src="./Images/profile-admin-male.png" alt="Profile Photo">
                    </div>
                </div>
            </div>
            <!----------- END OF TOP ----------->
            <div class="registered-users">
                
                <div class="users">
                    <h5>Registered Users</h5>
                    <div class="chart">
                        <div id="polarArea"></div>
                        <?php 
                                $sqlCountBSCS = "SELECT id from student_list WHERE YearCourseBlock = 'BSCS'";
                                $queryCountBSCS = mysqli_query($con, $sqlCountBSCS);
                                $totalCountBSCS = mysqli_num_rows($queryCountBSCS);
                        ?>
                        <?php 
                                $sqlCountBSIT = "SELECT id from student_list WHERE YearCourseBlock = 'BSIT'";
                                $queryCountBSIT = mysqli_query($con, $sqlCountBSIT);
                                $totalCountBSIT = mysqli_num_rows($queryCountBSIT);
                        ?>
                        <?php 
                                $sqlCountBSIS = "SELECT id from student_list WHERE YearCourseBlock = 'BSIS'";
                                $queryCountBSIS = mysqli_query($con, $sqlCountBSIS);
                                $totalCountBSIS = mysqli_num_rows($queryCountBSIS);
                        ?>
                        <?php 
                                $sqlCountBSA = "SELECT id from student_list WHERE YearCourseBlock = 'BSA'";
                                $queryCountBSA = mysqli_query($con, $sqlCountBSA);
                                $totalCountBSA = mysqli_num_rows($queryCountBSA);
                        ?>
                        <?php 
                                $sqlCountBSAIS = "SELECT id from student_list WHERE YearCourseBlock = 'BSAIS'";
                                $queryCountBSAIS = mysqli_query($con, $sqlCountBSAIS);
                                $totalCountBSAIS = mysqli_num_rows($queryCountBSAIS);
                        ?>
                        <?php 
                                $sqlCountBSENTREP = "SELECT id from student_list WHERE YearCourseBlock = 'BSENTREP'";
                                $queryCountBSENTREP = mysqli_query($con, $sqlCountBSENTREP);
                                $totalCountBSENTREP = mysqli_num_rows($queryCountBSENTREP);

                                $arr = array($totalCountBSCS, $totalCountBSIT, $totalCountBSIS, $totalCountBSA, $totalCountBSAIS, $totalCountBSENTREP);
                                
                        ?>
                        
                    </div>
                </div>
             
            </div>
        </div>
    </div>
    <script src="./js/adminDashboard.js"></script>
    <script defer src="./js/activePage.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="./js/Charts.js"></script>   

    <script>
        $(document).ready(function() {
            $('#tableDboard').DataTable({
                ordering: false,
            });
        });
    </script>

</body>

</html>