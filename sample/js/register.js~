function register()
{   
    var error = true;
    
    var firstname = document.getElementById("firstName").value;
        if (firstname == "") {
	        document.getElementById("firstNameError").innerHTML = "Please fill first name";
            var error = false;
			}
	    else {
            document.getElementById("firstNameError").innerHTML="";
            var re = /^([a-zA-Z]{1,30})/;
    var name = document.getElementById("firstName");
        if (!re.test(name.value)) {               
            document.getElementById("firstNameError").innerHTML = "Enter text only";
            var error = false;
            }
		 }
    var lastname = document.getElementById("lastName").value;
        if (lastname == "") {
	        document.getElementById("lastNameError").innerHTML = "Please fill last name";
            var error = false;
			}
	    else {
            document.getElementById("lastNameError").innerHTML = "";
            }
    var address = document.getElementById("address").value;
        if (address == "") {
	        document.getElementById("addressError").innerHTML = "Please fill address";
            var error = false;
			}
	    else {
            document.getElementById("addressError").innerHTML = "";
            }
    var nationality = document.getElementById("nationality").selectedIndex;
		if (nationality == "") {
		    document.getElementById("nationalityError").innerHTML = "Please select nationality";
            var error = false;
		}	
	var month = document.getElementById("month").selectedIndex;
		if (month == "") {
		  document.getElementById("monthError").innerHTML = "select month";
		var error = false;
		}	
	var day = document.getElementById("day").selectedIndex;
		if (day == "") {
		  document.getElementById("dayError").innerHTML = "select day";
		var error = false;
		}	
	var year = document.getElementById("year").selectedIndex;
		if (year == "") {
		  document.getElementById("yearError").innerHTML = "select year";
		var error = false;
		}	
	var designation = document.getElementById("designation").selectedIndex;
		if (designation == "") {
		  document.getElementById("designationError").innerHTML = "select the designation";
		var error = false;
		}		
	var office = document.getElementById("office").selectedIndex;
		if (office == "") {
		  document.getElementById("officeError").innerHTML = "select office";
		var error = false;
		}	
	var bloodgroup = document.getElementById("bloodgroup").selectedIndex;
		if (bloodgroup == "") {
		  document.getElementById("bloodgroupError").innerHTML = "select bloodgroup";
		var error = false;
		}	
    if (error) {
        return true;
        }
    else {
        return false;
        }
}
