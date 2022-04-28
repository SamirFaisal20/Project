
function checkName() 
{//document.getElementById("name").style.backgroundColor = "red";
	if (document.getElementById("name").value == "") 
	{
		document.getElementById("namEerr").innerHTML = "Name Required";
		document.getElementById("namEerr").style.color = "red";
		document.getElementById("name").style.borderColor = "red";
	}
	//  else if (wordCount(document.getElementById("name").value)<2)
	//  {
	
	//  	document.getElementById("namEerr").innerHTML = "Minimum Two Words";
	//  	document.getElementById("namEerr").style.color = "red";
	//  	document.getElementById("name").style.borderColor = "red";
	// }
	else
	{
		document.getElementById("namEerr").innerHTML = "";
		document.getElementById("name").style.borderColor = "black";
	}
			
}
function checkPassword()
{
    if (document.getElementById("password").value == "") 
    {
		document.getElementById("passwordErr").innerHTML = "Password Required";
		document.getElementById("passwordErr").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
	}
	else if(document.getElementById("password").value.length<8)
	{
		document.getElementById("passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("passwordErr").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("passwordErr").innerHTML = "";
		document.getElementById("password").style.borderColor = "black";
	}
}
function checkRetypeNewPassword()
{//document.getElementById("retype_new_password").style.backgroundColor = "red";
    if (document.getElementById("rpassword").value == "") 
    {
		document.getElementById("rpassworderr").innerHTML = "Password Required";
		document.getElementById("rpassworderr").style.color = "red";
		document.getElementById("rpassword").style.borderColor = "red";
	}
	else if(document.getElementById("rpassword").value.length<8)
	{
		document.getElementById("rpassworderr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("rpassworderr").style.color = "red";
		document.getElementById("rpassword").style.borderColor = "red";
	}
	else if(document.getElementById("rpassword").value != document.getElementById("password").value)
	{
		document.getElementById("rpassworderr").innerHTML = "Password Dosen't Match";
		document.getElementById("rpassworderr").style.color = "red";
		document.getElementById("rpassword").style.borderColor = "red";
	}
	else
	{
		document.getElementById("rpassworderr").innerHTML = "";
		document.getElementById("rpassword").style.borderColor = "black";
	}
}



function checkuerName() 
{//document.getElementById("name").style.backgroundColor = "red";
	if (document.getElementById("user_name").value == "") 
	{
		document.getElementById("usernamEerr").innerHTML = "User name Required";
		document.getElementById("usernamEerr").style.color = "red";
		document.getElementById("user_name").style.borderColor = "red";
	}
	//  else if (wordCount(document.getElementById("user_name").value)<2)
	//  {
	
	//  	document.getElementById("usernamEerr").innerHTML = "Minimum Two Words";
	//  	document.getElementById("usernamEerr").style.color = "red";
	//  	document.getElementById("user_name").style.borderColor = "red";
	// }
	else
	{
		document.getElementById("usernamEerr").innerHTML = "";
		document.getElementById("user_name").style.borderColor = "black";
	}
			
}

function checkCurrentPassword()
{//document.getElementById("current_password").style.backgroundColor = "red";
    if (document.getElementById("current_password").value == "") 
    {
		document.getElementById("current_passwordErr").innerHTML = "Password Required";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("current_password").style.borderColor = "red";
	}
	else if(document.getElementById("current_password").value.length<8)
	{
		document.getElementById("current_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("current_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("current_passwordErr").innerHTML = "";
		document.getElementById("current_password").style.borderColor = "black";
	}
}

function checkNewPassword()
{//document.getElementById("new_password").style.backgroundColor = "red";
    if (document.getElementById("new_password").value == "") 
    {
		document.getElementById("new_passwordErr").innerHTML = "Password Required";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	else if(document.getElementById("new_password").value.length<8)
	{
		document.getElementById("new_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("new_passwordErr").innerHTML = "";
		document.getElementById("new_password").style.borderColor = "black";
	}
}
