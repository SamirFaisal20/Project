function validationreg()
{
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var presentadd = document.getElementById("presentadd").value;
    var permanentadd = document.getElementById("permanentadd").value;
    var phoneno = document.getElementById("phoneNo").value;
    var nid = document.getElementById("nid").value;
    var religion = document.getElementById("religion").value;
    var email = document.getElementById("email").value;
    var format = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var accept = format.test(email);
    var nameformat = /^[a-zA-z]*$/;
    var name_accept = nameformat.test(username);

    if (username == "" || password == "" || presentadd == "" || permanentadd == "" || phoneno == "" || nid == "" || religion == "" || email == ""  ) 
    {
        document.getElementById("msg").innerHTML="All Information Require";
        return false;
    }
    else{
        if(!name_accept)
        {
            document.getElementById("msg").innerHTML="Usename just contain letter ";
            return false;
        }
        if(password.length <=5)
        {
            document.getElementById("msg").innerHTML="password must be getter than 5 ";
            return false;
        }
        if(phoneno.length !=11)
        {
            document.getElementById("msg").innerHTML="Phone number must be 11 digit";
            return false;
        }
        if(!accept)
        {
            document.getElementById("msg").innerHTML="Email format is not corrrect";
            return false;
        }
        else{
            document.getElementById("msg").innerHTML="Now you can submit";
            return false;
        }
    }
    
}
