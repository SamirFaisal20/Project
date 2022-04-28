function showpassword()
{
    var pass= document.getElementById("show");
    if(pass.type== 'password')
    {
        pass.type='text';
    }
    else{
        pass.type='password';
    }
}