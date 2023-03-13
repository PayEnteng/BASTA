<?php
    session_start();
?>

<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SSU Scholarship Management System</title>
    <link rel="icon" type="image/png" href="./Images/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap">
    <link rel="stylesheet" type="text/css" href="./CSS/style.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <style>
        .material-symbols-rounded {
            font-variation-settings:
            'FILL' 1,
            'wght' 700,
            'GRAD' 200,
            'opsz' 48
        }
        body {
            background-image: url('Images/1.jpg');
            background-size: cover;
        }
    </style>
</head>
<body>
    <form action="check.php" method="post">
        <div class="card">
            <input type="checkbox" id="chk" aria-hidden="true" name="">
            <div class="content">
                <div class="front">
                    <div class="inner">
                        <img class="logo" src="Images/logo.png" alt="logo">
                        <h1>Sorsogon State University</h1>
                        <h2>SCHOLARSHIP MANAGEMENT SYSTEM</h2>                       
                        <?php
                            if(isset($_SESSION["error"]))
                            {
                                $error = $_SESSION["error"];
                                ?>
                                <div class="alert show">
                                    <span class="material-symbols-rounded">error</span>
                                    <span class="errormsg"><?php echo $error; ?></span>
                                    <span class="closebtn">
                                        <span class="material-symbols-sharp">close</span>
                                    </span>
                                </div>

                                <script>
                                    $('.closebtn').click(function()
                                    {
                                        $('.alert').addClass("hide");
                                        $('.alert').removeClass("show");
                                    });
                                    setTimeout(function(){
                                        $('.alert').addClass("hide");
                                        $('.alert').removeClass("show");
                                    },10000);
                                </script>

                                <?php
                            }
                        ?> 
                                         
                        <div class="inputBox">
                            <input type="text" name="user_name" id="user_name" required="required">
                            <span>Username</span>
                        </div>                           
                        <div class="inputBox">
                            <input type="password" name="pass_word" id="pass_word" required="required">
                            <span>Password</span>
                        </div>
                        <label for="chk" aria-hidden="true" onclick="clickMe(1)">Forgot Password?</label>
                        <button type="submit">Login</button>
                        <p>Don't have an account?</p>
                        <a href="signup.php">
                            <span class="signup">SIGN UP<span>
                        </a>
                        
                    </div>
                </div>

                <div class="back">
                    <div class="inner">
                        <h3>Forgot your password?</h3>
                        <div class="inputBox">
                            <input type="text" name="username" id="uname">
                            <span>Username</span>
                        </div>

                        <div class="radio-group">
                            <p class="label">Verification Method:</p>
                            <label class="radio">
                                <input type="radio" value="Email" name="radio" checked="checked" onclick="text(0)">
                                Email
                                <span></span>
                            </label>
                            <label class="radio">
                                <input type="radio" value="Mobile Number" name="radio" onclick="text(1)">
                                Mobile Number
                                <span></span>
                            </label>
                        </div>

                        <div class="inputBox" id="EMAIL">
                            <input type="text" name="email" id="e-mail">
                            <span>Your Email:</span>
                        </div>
                        <div class="inputBox" id="MOBILE">
                            <input type="Mobile" name="mobile" id="mobile-num" onkeypress="isInputNumber(event)">
                            <span>Mobile Number:</span>
                        </div>
                        <button type="button-link" id="link-btn">Send my reset link</button>
                        <button type="button-code" id="code-btn">Send the code</button>
                        <label for="chk" class="goBack" aria-hidden="true" onclick="clickMe(0)">Go back to login</label>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="./js/showhide.js"></script>
    <script src="./js/onlynumber.js"></script>
    <script src="./js/ClearInput.js"></script>
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>