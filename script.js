function checkForm() {
	// Fetching values from all input fields and storing them in variables.
	var website = document.getElementById("website1").value;
	//Check input Fields Should not be blanks.
	if (website == '') {
		alert("Fill All Fields");
	} 
	else {
		//Notifying error fields
		var website1 = document.getElementById("website");
		//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
		if (website1.innerHTML == 'Invalid website') {
			alert("Fill Valid Information");
		} 
		else {
			//Submit Form When All values are valid.
			document.getElementById("myForm").submit();
		}
	}
}
// AJAX code to check input field values when onblur event triggerd.
function validate(field, query) {
	var xmlhttp;
	if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else { // for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
			document.getElementById(field).innerHTML = "Validating..";
		}
		else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById(field).innerHTML = xmlhttp.responseText;
		} 
		else {
			document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
		}
	}
	xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
	xmlhttp.send();
}

function checkForm2() {
	// Fetching values from all input fields and storing them in variables.
	var website = document.getElementById("website3").value;
	//Check input Fields Should not be blanks.
	if (website == '') {
		alert("Fill All Fields");
	} 
	else {
		//Notifying error fields
		var website1 = document.getElementById("website2");
		//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
		if (website1.innerHTML == 'Invalid website') {
			alert("Fill Valid Information");
		} 
		else {
			//Submit Form When All values are valid.
			document.getElementById("myForm2").submit();
		}
	}
}