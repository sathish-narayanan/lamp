function validate()
{   
    var error = false;
    var firstname = document.getElementById("firstName").value;
    if (firstname == "") {
        document.getElementById("firstNameError").innerHTML = "Please fill first name";
        var error = true;
	} else {
        document.getElementById("firstNameError").innerHTML = "";
        var text = /^([a-zA-Z]{1,30})/;
        var name = document.getElementById("firstName");
        if (!text.test(name.value)) {                                  
            document.getElementById("firstNameError").innerHTML = "Enter text only";
            var error = true;
        }
	}
    var lastname = document.getElementById("lastName").value;
    if (lastname == "") {
        document.getElementById("lastNameError").innerHTML = "Please fill last name";
        var error = true;
	} else {
        document.getElementById("lastNameError").innerHTML = "";
        var text = /^([a-zA-Z]{1,30})/;
        var name = document.getElementById("lastName");
        if (!text.test(name.value)) {                                  
            document.getElementById("lastNameError").innerHTML = "Enter text only";
            var error = true;
        }    
    }
    var address = document.getElementById("address").value;
    if (address == "") {
        document.getElementById("addressError").innerHTML = "Please fill address";
        var error = true;
    } else {
        document.getElementById("addressError").innerHTML = "";
    }
    var designation = document.getElementById("designation").selectedIndex;
    if (designation == "") {
        document.getElementById("designationError").innerHTML = "select the designation";
        var error = true
    } else {    
        document.getElementById("designationError").innerHTML = "";
    }
    var nationality = document.getElementById("nationality").selectedIndex;
    if (nationality == "") {
        document.getElementById("nationalityError").innerHTML = "Please select nationality";
        var error = true;
	} else {
        document.getElementById("nationalityError").innerHTML = "";
    }
    var date = document.getElementById("datepicker").value;
    if (date == "") {
        document.getElementById("dobError").innerHTML = "enter date of birth";
        var error = true;
    } else {
        document.getElementById("dobError").innerHTML = "";
    }
    var office = document.getElementById("office").selectedIndex;
    if (office == "") {
        document.getElementById("officeError").innerHTML = "select office";
        var error = true;  
    } else {
        document.getElementById("officeError").innerHTML = "";
    }
    var bloodgroup = document.getElementById("bloodgroup").selectedIndex;
    if (bloodgroup == "") {
        document.getElementById("bloodgroupError").innerHTML = "select bloodgroup";
        var error = true;
    } else {
        document.getElementById("bloodgroupError").innerHTML = "";
    }
    if (!error) {
        
        return true;
    } else {
        
        return false;
    }
}
