function email_in(){
	var x = document.forms["admin_login"]["Email_Id"].value;
	if(x == "")
	{
		document.forms["admin_login"]["Email_Id"].style.backgroundColor ="white";
		document.forms["admin_login"]["Email_Id"].placeholder = "*****@gmail.com";
		document.forms["admin_login"]["Email_Id"].style.border ="none";
	}
}

function email_out(){
	var x = document.forms["admin_login"]["Email_Id"].value;
	if(x=="")
	{
		document.forms["admin_login"]["Email_Id"].placeholder = "email can't be empty";
		document.forms["admin_login"]["Email_Id"].style.border ="2px solid red";
		return false;
	}
	var x = document.forms["admin_login"]["Email_Id"].value;
	var regex = new RegExp('[A-Za-z0-9_+\.~!#%&]+@[A-Za-z0-9_+\.~!#%&]+\.[A-Za-z0-9_+\.~!#%&]+');
	if (!x.match(regex))
	{
		document.getElementById('errors').innerHTML="Invalid Email id";
		return false;
	}
	else
	{
		document.getElementById('errors').innerHTML="";
	}
	return true;
}