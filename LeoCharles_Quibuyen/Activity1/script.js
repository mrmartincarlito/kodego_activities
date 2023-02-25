function validate()
{
    var username=document.getElementById(`charles`).value;
    var password=document.getElementById(`Pass123`).value;
    if(username=="charles"&& password=="Pass123")
    {
    alert("Login Successfully");
    return false;
    }

    else
    {
    alert("Invalid Credentials");
    }
}