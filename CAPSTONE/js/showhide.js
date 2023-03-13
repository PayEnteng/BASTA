function text(x)
    {  
        if (x == 0)
        {
            document.getElementById("EMAIL").style.display = "block";
            document.getElementById("MOBILE").style.display = "none";
            document.getElementById("link-btn").style.display = "block";
            document.getElementById("code-btn").style.display = "none";
            document.getElementById("mobile-num").value = null;
        }
        else
        {
            document.getElementById("MOBILE").style.display = "block";
            document.getElementById("EMAIL").style.display = "none";
            document.getElementById("code-btn").style.display = "block";
            document.getElementById("link-btn").style.display = "none";
            document.getElementById("e-mail").value = null;
        }
        return;
    }