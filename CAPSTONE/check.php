<?php

session_start();    
    
    include("server.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['pass_word'];
        $error = "Incorrect username or password!";

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//read from database
			// $query = "SELECT * from tbl_users where Username = '$user_name' limit 1";
			$query = "SELECT * from tbl_user_new where username = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					// if($user_data['Password'] === $password)
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['User_ID'];
						if($_SESSION['user_id'] == 37682126)
						{
							header("Location: index.php");
							die;
						}
						else
						{
							header("Location: ../../CAPSTONE/student/studentDashboard.php");
							die;
						}						
					}
				}
			}
            $_SESSION["error"] = $error;
            header("location: login.php");           
		}
        else
		{
			$_SESSION["error"] = $error;
            header("location: login.php");
		}
	}