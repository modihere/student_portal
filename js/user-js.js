function email_in(){
	var x = document.forms["Student_login"]["Email_Id"].value;
	if(x == "")
	{
		document.forms["Student_login"]["Email_Id"].style.backgroundColor ="#008B8B";
		document.forms["Student_login"]["Email_Id"].placeholder = "*****@gmail.com";
		document.forms["Student_login"]["Email_Id"].style.border ="none";
	}
}

function email_out(){
	var x = document.forms["Student_login"]["Email_Id"].value;
	if(x=="")
	{
		document.forms["Student_login"]["Email_Id"].placeholder = "email can't be empty";
		document.forms["Student_login"]["Email_Id"].style.border ="2px solid red";
		return false;
	}
	var x = document.forms["Student_login"]["Email_Id"].value;
	var regex = new RegExp('[A-Za-z0-9_+\.~!#%&]+@[A-Za-z0-9_+\.~!#%&]+\.[A-Za-z0-9_+\.~!#%&]+');
	if (!x.match(regex))
	{
		alert("Invalid Email id");
		return false;
	}
	return true;
}