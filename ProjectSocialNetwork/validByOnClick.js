function validation()
{
	// name
	var nm = document.getElementById("name").value;
	if(nm == "")
	{
		vName.innerHTML = "Name Required";
		return false;
	}
	else if(!isNaN(nm))
	{
		vName.innerHTML = "Name can't be a number";
		alert("Name cant be blank");
		return false;
	}
	else
	{
		vName.innerHTML = "";
	}
	
	//contact
	var cnt = document.getElementById("cont").value;
	if(cnt == "")
	{
		vCont.innerHTML = "Contact Required";
		return false;
	}
	else if(isNaN(cnt))
	{
		vCont.innerHTML = "Should be a number";
		return false;
	}
	else if(cnt.length != 10)
	{
		vCont.innerHTML = "Should be 10 digits";
		return false;
	}
	else
	{
		vCont.innerHTML = "";
	}
	
		// email
	var mail = document.getElementById("email").value;
	if(mail == "")
	{
		vEmail.innerHTML = "Email Required";
		return false;
	}
	else
	{
		vEmail.innerHTML = "";
	}
	
	//password
	var pss = document.getElementById("pass").value;
	if(pss == "")
	{
		vPass.innerHTML = "Password Required";
		return false;
	}
	else
	{
		vPass.innerHTML = "";
	}
	
	//confirm Pass
	var cp = document.getElementById("confirmpass").value;
	if(cp != pss)
	{
		vConPass.innerHTML = "Password Doesnot Match";
		return false;
	}
	else
	{
		vConPass.innerHTML = "";
	}
	
	//skill
	var skill = document.getElementsByName("sk[]");
	var flag = 0, i;
	for(i = 0;i<skill.length;i++)
	{
		if(skill[i].checked)
		{
			flag =1;
			break;
		}
	}
	if(flag == 0)
	{
		vSkill.innerHTML = "Select skill"
		return false;
	}
	else
	{
		vSkill.innerHTML = ""
	}
	//city
	/*var ct = document.getElementById("city").value;
	if(ct == "Select City")
	{
		vCity.innerHTML = "select a city";
		return false;
	}
	else
	{
	vCity.innerHTML = "";
	}*/
	//gender
	var gen = document.getElementsByName("gk[]");
	var count = 0;
	if(gen[0].checked || gen[1].checked)
	{
		count =1;
	}
	if(count == 0)
	{
		vGen.innerHTML = "Select Gender";
		return false;
	}
	else
	{
		vGen.innerHTML = "";
	}
}
/*
function ProgressBar()
{
	var pswrd = document.getElementById("pass").value;
	var i = pswrd.length;
	progress.value = "0";
	progress.style.display = "none";
	for(i=1;i<=10;i++)
	{
		i = pswrd.length;
		if(i <=5 && i > 0)
		{
			vPass.innerHTML = "Weak";
			vPass.style.color = "red";
			progress.value = (10 * i);
			return false;
		}
		if(i >5 && i <8)
		{
			vPass.innerHTML = "Medium";
			vPass.style.color = "yellow";
			progress.value = (10 * i);
			return false;
		}
		if(i >=8)
		{
			vPass.innerHTML = "Strong";
			vPass.style.color = "green";
			progress.value = (10 * i);
			return false;
		}
		if(i == 0)
		{
			vPass.innerHTML = "";
			return false;
		}
	}
}

//city other field
function Other()
{
	var c = document.getElementById("city").value;
	if(c == "Others")
	{
		ot.style.display = "block";
	}
	else
	{
	ot.style.display = "none";
	}
}

*/







