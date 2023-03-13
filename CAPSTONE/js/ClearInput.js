function clickMe(x)
{   
    if (x == 1)
    {
        document.getElementById("user_name").value = null;
	    document.getElementById("pass_word").value = null;
    }
    else if (x == 0)
    {
        document.getElementById("uname").value = null;
	    document.getElementById("e-mail").value = null;
        document.getElementById("mobile-num").value = null;
    }
    return;
}