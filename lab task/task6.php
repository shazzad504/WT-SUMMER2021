<html>
<head>

<title>Registration Form </title>
<script>
function validateForm() {
  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var comment = document.getElementById("comment").value;
  var genderM=form.gender_male.value;
    var genderF=form.gender_female.value;
    var hobbies = [];
    var checkboxes = document.getElementsByName("hobbies[]");

    for(var i=0; i < checkboxes.length; i++) {
        if(checkboxes[i].checked) {
            // Populate hobbies array with selected values
            hobbies.push(checkboxes[i].value);
        }
  var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var res = patt.test(email);
  if (fname == "" ) {
   document.getElementById("errorfname").innerHTML="Please fill out first name";
    return false;
  }
 if ( lname == "") {
   document.getElementById("errorlname").innerHTML="Please fill out last name";
    return false;
  }
 if(!res)
  {
    document.getElementById("errormail").innerHTML="Email format is not correct";
    return false; 
  }


  if ( password == "") {
   document.getElementById("errorpassword").innerHTML="Please fill out password";
    return false;
  }

  if ( comment == "") {
   document.getElementById("errorcomment").innerHTML="Please fill out comment";
    return false;
  }

  if(genderM.checked==false && genderF.checked==false )
       {
            alert("You must select male or female");
            return false;
       } 
       if(hobbies.length) {
            dataPreview += "Hobbies: " + hobbies.join(", ");
        }
}


  </script>
</head>
<body bgcolor="red">
  <font size ="20px" color="blue">

</font>
<h1>Registration Form</h1>

<form action="" onsubmit="return validateForm()" method="post">
  First Name: <input type="text" id="fname" name="fname"><br><br><p id="errorfname"></p>
  Last Name: <input type="text" id="lname" name="lname"><br><br><p id="errorlname"></p>
  Email: <input type="text" id="email" name="email"><br><br><p id="errormail"></p>
  Password: <input type="text" id="password" name="password"><br><br><p id="errormail"></p>
  Comment: <input type="text" id="comment" name="comment"><br><br><p id="errormail"></p>
  Gender: <label><input type="radio" name="gender" value="male"> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label>
  Please choose a hobby: <label><input type="checkbox" name="hobbies[]" value="sports"> Sports</label>
            <label><input type="checkbox" name="hobbies[]" value="movies"> Movies</label>
            <label><input type="checkbox" name="hobbies[]" value="music"> Music</label>
  <input type="submit" value="Submit">
</form>
</body>
</html>
  