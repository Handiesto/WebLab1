function checkInbound(input) {
	if (isNaN(input.value) || (input.value < -5 || input.value > 3)) 
	{
		if (!input.className.includes("error")) {
			input.className = input.className + " error";
		}
	}
	else 
	{
		input.className = input.className.replace(" error", "");
		return true;
	}
}

function checkboxValidate(input) {
	let checkboxes = document.getElementsByClassName("rRadioButton");

	for (let i = 0; i < checkboxes.length; i++)
	{
		if (checkboxes[i].checked == true) {
			checkboxes[i].checked = false;
		}
	}
	
	if (input.checked == true) 
	{
		input.checked = false;
	}
	else
	{
		input.checked = true;
	}
}



	

function validateForm() {
	let checkboxes = document.getElementsByClassName("rRadioButton");
	let checkedButtons = 0;

	let xInput = document.getElementById("x");
	let ySelect = document.getElementById("ySelect");

	let check = true;

	for (let i = 0; i < checkboxes.length; i++)
	{
		if (checkboxes[i].checked == true)
			checkedButtons++;
	}

	if (checkedButtons != 1) {
		document.getElementsByClassName("r");
		check = false;
	} else {
		document.getElementsByClassName("r");
	}

	if (!checkInbound(xInput) || xInput.value == "") {
		document.getElementsByClassName("x");
		check = false;
	} else {
		document.getElementsByClassName("x");
	}

	

	console.log("validate " + check + document.getElementById("ySelect"));
	return check;
}


