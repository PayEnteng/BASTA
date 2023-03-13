
    function signupvalidation()
    {
        var valid = true;

        // var Student_IDNo = document.getElementById("Student_IDNo").value;
        // var UserName = document.getElementById("UserName").value;
        var MobileNo = document.getElementById("MobileNo").value;
        var Email = document.getElementById("Email").value;
        var PassWord = document.getElementById("PassWord").value;
        var confirmpassword = document.getElementById("confirmpassword").value;

        if (MobileNo.length<11 || MobileNo.length>11)
        {
            valid = false;
            var com = document.getElementById('alertmsg')
            com.innerHTML = "Please Enter 11 digit Mobile Number"
        }
        else if (PassWord!=confirmpassword)
        {
            valid = false;
            var com = document.getElementById('alertmsg')
            com.innerHTML = "Password Does Not Match"
        }
        else
        {
            document.getElementById('alertmsg').innerHTML = '';
        }

        // if (Email.value.match(/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/))
        // {
        //     document.getElementById('alertmsg').innerHTML = '';                     
        // }
        // else
        // {   
        //     valid = false;
        //     var com = document.getElementById('alertmsg')
        //     com.innerHTML = "Please Enter a Valid Email Address" 
        // }

        return valid
    }