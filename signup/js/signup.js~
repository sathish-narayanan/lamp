function validate()
{   
    var error = true;
    var username = document.getElementById("userName").value;
        if (username == "") {
	        document.getElementById("userNameError").innerHTML = "Please fill user name";
            var error = false;
			}
	    else {
            document.getElementById("userNameError").innerHTML="";
            }
    var email = document.getElementById("email").value;
        if (email == "") {
	        document.getElementById("emailError").innerHTML = "Please fill email";
            var error = false;
			}
	    else {
            document.getElementById("emailError").innerHTML="";
            }
    var password = document.getElementById("password").value;
        if (password == "") {
	        document.getElementById("passwordError").innerHTML = "Please fill password";
            var error = false;
			}
	    else {
            document.getElementById("passwordError").innerHTML = "";
            }
             
    var confirmpassword = document.getElementById("confirmPassword").value;
        if (confirmpassword == "") {
	        document.getElementById("confirmPasswordError").innerHTML = "Please fill confirm password";
            var error = false;
			}
	    else {
            document.getElementById("confirmPasswordError").innerHTML = "";
            }
        
    var month = document.getElementById("month").selectedIndex;
		if (month == "") {
		  document.getElementById("monthError").innerHTML = "select month";
		var error = false;
		}	
	    else {
            document.getElementById("monthError").innerHTML="";
            }
	var day = document.getElementById("day").selectedIndex;
		if (day == "") {
		  document.getElementById("dayError").innerHTML = "select day";
		var error = false;
		}
		 else {
            document.getElementById("dayError").innerHTML="";
            }	
	var year = document.getElementById("year").selectedIndex;
		if (year == "") {
		  document.getElementById("yearError").innerHTML = "select year";
		var error = false;
		}
	    else {
            document.getElementById("yearError").innerHTML="";
            }
	var mobile = document.getElementById("mobileNo").value;
		if (mobile == "") {
		  document.getElementById("mobileNoError").innerHTML = "enter mobile no";
		var error = false;
		}	
		 else if (isNaN(mobile)) {
         document.getElementById("mobileNoError").innerHTML = "enter valid mobile no";
		var error = false;
		}	
		 else {
            document.getElementById("mobileNoError").innerHTML="";
            }
            
		
	if (error) {
        return true;
        }
    else {
        return false;
        }
}
