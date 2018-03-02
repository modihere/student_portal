function name_out(){
	var x = document.forms["Student_signup"]["First_Name"].value;
	var x_len=x.length;
	var regex=/^[0-9]+$/;
    if (x.match(regex))
	{
		document.forms["Student_signup"]["First_Name"].style.border ="2px solid red";
		document.forms["Student_signup"]["First_Name"].value ="";
		document.forms["Student_signup"]["First_Name"].placeholder = "please enter a valid name";
		return false;
	}
	if (x == "") {
        document.forms["Student_signup"]["First_Name"].placeholder = "Name must be filled";
		document.forms["Student_signup"]["First_Name"].style.border ="2px solid red";
		return false;
    
    }
	
	if(x_len < 4 || x_len >20)
	{
		alert("Name must be between 5 and 20 characters!")
		return false;
	}
}

function name_in(){
	var x = document.forms["Student_signup"]["First_Name"].value;
	if(x == "")
	{
		document.forms["Student_signup"]["First_Name"].style.backgroundColor ="#008B8B";
		document.forms["Student_signup"]["First_Name"].placeholder = "Your Name";
		document.forms["Student_signup"]["First_Name"].style.border ="none";
	}
	
}
function name1_out(){
	var x = document.forms["Student_signup"]["Last_Name"].value;
	var x_len=x.length;
	var regex=/^[0-9]+$/;
    if (x.match(regex))
	{
		document.forms["Student_signup"]["Last_Name"].style.border ="2px solid red";
		document.forms["Student_signup"]["Last_Name"].value ="";
		document.forms["Student_signup"]["Last_Name"].placeholder = "please enter a valid name";
		return false;
	}
	if (x == "") {
        document.forms["Student_signup"]["Last_Name"].placeholder = "Name must be filled";
		document.forms["Student_signup"]["Last_Name"].style.border ="2px solid red";
		return false;
    
    }
	
	if(x_len < 4 || x_len >20)
	{
		alert("Name must be between 5 and 20 characters!")
		return false;
	}
}

function name1_in(){
	var x = document.forms["Student_signup"]["Last_Name"].value;
	if(x == "")
	{
		document.forms["Student_signup"]["Last_Name"].style.backgroundColor ="#008B8B";
		document.forms["Student_signup"]["Last_Name"].placeholder = "Your Name";
		document.forms["Student_signup"]["Last_Name"].style.border ="none";
	}
	
}
function dob_out(){
	var x = document.forms["Student_signup"]["dob"].value;
	if(x=="")
	{
		alert("Please enter a date")
	}
	return false;
}

function branch_out(){
	var x = document.forms["Student_signup"]["branch"].value;
	if(x=="")
	{
		alert("please select a proper branch");
	}
	return false;
}

/*
function age_in(){
	var x = document.forms["admin_signup_form"]["dob"].value;
	if(x=="")
	{
		alert("please enter date of birth");
		document.forms["admin_signup_form"]["age"].style.border ="2px solid red";
		return false;
	}
	else
	{
		document.forms["admin_signup_form"]["age"].style.border ="none";
	}
	return false;
}
*/

function id_in(){
	var x = document.forms["Student_signup"]["branch"].value;
	if(x=="")
	{
		document.forms["Student_signup"]["regn_no"].placeholder = "please select your branch";
		document.forms["Student_signup"]["regn_no"].style.border ="2px solid red";
		return false;
	}
	else
	{
		document.forms["Student_signup"]["regn_no"].style.border ="none";
	}
}

function email_in(){
	var x = document.forms["Student_signup"]["Email_Id"].value;
	if(x == "")
	{
		document.forms["Student_signup"]["Email_Id"].style.backgroundColor ="#008B8B";
		document.forms["Student_signup"]["Email_Id"].placeholder = "*****@gmail.com";
		document.forms["Student_signup"]["Email_Id"].style.border ="none";
	}
}

function email_out(){
	var x = document.forms["Student_signup"]["Email_Id"].value;
	if(x=="")
	{
		document.forms["Student_signup"]["Email_Id"].placeholder = "email can't be empty";
		document.forms["Student_signup"]["Email_Id"].style.border ="2px solid red";
		return false;
	}
	var x = document.forms["Student_signup"]["Email_Id"].value;
	var regex = new RegExp('[A-Za-z0-9_+\.~!#%&]+@[A-Za-z0-9_+\.~!#%&]+\.[A-Za-z0-9_+\.~!#%&]+');
	if (!x.match(regex))
	{
		alert("Invalid Email id");
		return false;
	}
	return true;
}

function pass_in(){
	var x = document.forms["Student_signup"]["password"].value;
	if(x == "")
	{
		document.forms["Student_signup"]["password"].style.backgroundColor ="#008B8B";
		document.forms["Student_signup"]["password"].placeholder = "*********";
		document.forms["Student_signup"]["password"].style.border ="none";
	}
}

function pass_out(){
	var x = document.forms["Student_signup"]["password"].value;
	var x_len=x.length;
	if (x == "") {
        document.forms["Student_signup"]["password"].placeholder = "password must be filled";
		document.forms["Student_signup"]["password"].style.border ="2px solid red";
		return false;
    
    }
	if(x_len < 8 || x_len >20)
	{
		alert("Please enter the password in range of 8-20 characters");
		return false;
		
	}
}

function repass_in(){
	var x = document.forms["Student_signup"]["cpassword"].value;
	if(x == "")
	{
		document.forms["Student_signup"]["cpassword"].style.backgroundColor ="#008B8B";
		document.forms["Student_signup"]["cpassword"].placeholder = "*********";
		document.forms["Student_signup"]["cpassword"].style.border ="none";
	}
}

function repass_out(){
	var x = document.forms["Student_signup"]["cpassword"].value;
	var y = document.forms["Student_signup"]["password"].value;
	if (x == "") {
        document.forms["Student_signup"]["cpassword"].placeholder = "please re-type password";
		document.forms["Student_signup"]["cpassword"].style.border ="2px solid red";
		return false;
    
    }
	if(x!=y)
	{
		alert("passwords do not match!!");
		return false;
	}
}

function Mobile_Number_in(){
	var x = document.forms["Student_signup"]["Mobile_Number"].value;
	if(x == "")
	{
		document.forms["Student_signup"]["Mobile_Number"].style.backgroundColor ="#008B8B";
		document.forms["Student_signup"]["Mobile_Number"].placeholder = "94930XXXXX";
		document.forms["Student_signup"]["Mobile_Number"].style.border ="none";
	}
}

function Mobile_Number_out(){
	var x = document.forms["Student_signup"]["Mobile_Number"].value;
	var regex=/^[0-9]+$/;
	if (x == "") {
        document.forms["Student_signup"]["Mobile_Number"].placeholder = "can't leave this empty";
		document.forms["Student_signup"]["Mobile_Number"].style.border ="2px solid red";
		return false;
    
    }
	
	if (!x.match(regex))
	{
		document.forms["Student_signup"]["Mobile_Number"].value = "";
		document.forms["Student_signup"]["Mobile_Number"].placeholder = "enter valid number";
		document.forms["Student_signup"]["Mobile_Number"].style.border ="2px solid red"
	}
	
}
function getaddress(){
	//alert(document.forms["Student_signup"]["address"].value);
	if(document.forms["Student_signup"]["address"].value != 0){
		document.forms["Student_signup"]["Address"].value=document.forms["Student_signup"]["addr"].value
	}
}
function getage(){
	var a = document.forms["Student_signup"]["dob"].value;
	var today = new Date();
    var birthDate = new Date(a);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
    {
        age--;
    }
    document.forms["Student_signup"]["age"].value = age;
}

function getstudentid() {
    var dpt = document.forms["Student_signup"]["branch"].value;
    var s = document.forms["Student_signup"]["regn_no"].value;
    var res = s.substring(2,4);
    //alert(res);

    if(dpt=="BT")
        document.forms["Student_signup"]["roll_no"].value = res+"/BT/";
    if(dpt=="CHE")
        document.forms["Student_signup"]["roll_no"].value = res+"/CHE/";
    if(dpt=="CIV")
        document.forms["Student_signup"]["roll_no"].value = res+"/CE/";
    if(dpt=="CSE")
        document.forms["Student_signup"]["roll_no"].value = res+"/CSE/";
    if(dpt=="EE")
        document.forms["Student_signup"]["roll_no"].value = res+"/EE/";
    if(dpt=="ECE")
        document.forms["Student_signup"]["roll_no"].value = res+"/ECE/";
    if(dpt=="IT")
        document.forms["Student_signup"]["roll_no"].value = res+"/IT/";
    if(dpt=="ME")
        document.forms["Student_signup"]["roll_no"].value = res+"/ME/";
    if(dpt=="MME")
        document.forms["Student_signup"]["roll_no"].value = res+"/MME/";

}