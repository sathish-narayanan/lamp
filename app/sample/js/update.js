function update()
{   
    var error = true;
    var firstname = document.getElementById("firstName").value;
        if (firstname == "") {
	        document.getElementById("firstNameError").innerHTML = "Please fill first name";
            var error = false;
			     } else {
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
			     } else {
              document.getElementById("lastNameError").innerHTML = "";
          }
    var address = document.getElementById("address").value;
        if (address == "") {
	           document.getElementById("addressError").innerHTML = "Please fill address";
            var error = false;
			     } else {
              document.getElementById("addressError").innerHTML = "";
          }
    var nationality = document.getElementById("nationality").selectedIndex;
		      if (nationality == "") {
		          document.getElementById("nationalityError").innerHTML = "Please select nationality";
            var error = false;
		      }	else {
	             document.getElementById("nationalityError").innerHTML = "";
	         }
		  var dob = document.getElementById("dob").value;
		      if (dob == "") {
		          document.getElementById("dobError").innerHTML = "enter date of birth";
		          var error = false;
		      }	else {
	             document.getElementById("dobError").innerHTML = "";
	         }
		  var designation = document.getElementById("designation").selectedIndex;
		      if (designation == "") {
		      document.getElementById("designationError").innerHTML = "select the designation";
		  var error = false;
		      }	else {
	             document.getElementById("designationError").innerHTML = "";
	         }
	   var office = document.getElementById("office").selectedIndex;
		      if (office == "") {
		          document.getElementById("officeError").innerHTML = "select office";
		          var error = false;
		      } else {
	             document.getElementById("officeError").innerHTML = "";
	         }
	   var bloodgroup = document.getElementById("bloodgroup").selectedIndex;
		      if (bloodgroup == "") {
		          document.getElementById("bloodgroupError").innerHTML = "select bloodgroup";
		          var error = false;
		      }	else {
	             document.getElementById("bloodgroupError").innerHTML = "";
	         }
    if (error) {
        return true;
    } else {
          return false;
      }
}
