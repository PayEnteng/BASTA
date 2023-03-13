<?php
session_start();

    include("server.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['Username'];
		$stud_id_no = $_POST['student_idNo'];
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $email_add = $_POST['email'];
        $mobile_num = $_POST['mobileNo'];
        $password = $_POST['Password'];
        // $birthday = $_POST['birthday'];
        $gender = $_POST['sex'];

         /* ----------------------------------- BIRTHDAY ----------------------------------- */
        if (isset($_POST['add_birthday'])){
                            
            if ($_POST['birthday_day']==0 or $_POST['birthday_month']==0 or $_POST['birthday_year']==0)
            {
                echo "Please Complete the Birthday Selection";
            }
            else
            {
                $m=$_POST['birthday_month'];
                $d=$_POST['birthday_day'];
                $y=$_POST['birthday_year'];
                $date=$y.'-'.$m.'-'.$d;
            }
        }
        /* ----------------------------------- BIRTHDAY ----------------------------------- */

        if(!empty($username) && !empty($password) && !is_numeric($username))
		{
            $user_id = random_num(10);
			$query = "insert into tbl_user_new (User_ID, username, stud_id_no, firstname, lastname, email_add, mobile_num, password, birthday, gender) values ('$user_id', '$username', '$stud_id_no', '$firstname', '$lastname', '$email_add', '$mobile_num', '$password', '$date', '$gender')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}
        else
		{
			echo "Please enter some valid information!";
		}
	}

?>