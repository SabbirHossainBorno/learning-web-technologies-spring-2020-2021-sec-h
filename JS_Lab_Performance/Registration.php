<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>FlyCash - Registration</title>
</head>

<body style="background-color:rgb(0, 0, 0);">
<script type = "text/javascript">
function countWords(str) {
  return str.trim().split(/\s+/).length;
}
  function validateForm() {
	var name = document.forms["myForm"]["name"].value;
	var username = document.forms["myForm"]["username"].value;
    var email = document.forms["myForm"]["email"].value;
    var mobilenumber = document.forms["myForm"]["mobileNumber"].value;
    var nidnumber = document.forms["myForm"]["nidNumber"].value;
	var pass = document.forms["myForm"]["password"].value;
	
	if (name == "") {
		alert("Name cant be empty");
		name.focus();
		return false;
  		}
	
	elseif (email == "") {
		alert("Email Can't Be Empty");
		email.focus();
		return false;
  				}
	
	if (pass == "") {
		alert("Pass Can't Be Empty");
		pass.focus();
		return false;
  				}	
	if (dob == "") {
		alert("Date Of Birth Can't Be Empty");
		dob.focus();
		return false;
  		}
    if (mobileNumber == "") {
		alert("Mobile Number Can't Be Empty");
		dob.focus();
		return false;
  		}
    if (nidNumber == "") {
		alert("NID Number Can't Be Empty");
		dob.focus();
		return false;
  		}
	
}
</script>



    <table style="border:2px solid rgb(255, 255, 255); border-collapse: collapse;" align="center" width="70%">

        <tr>


            <td style="border:2px solid rgb(255, 255, 255); border-collapse: collapse;" align="right">

                <img align="left" src="../assets/flycash.png" alt="Logo" width="200" height="100">
                <br><br>
                <a href="publicHome.html">Home </a>|
                <a href="login.html">Login</a>|
                <a style="color: rgb(116, 168, 64); font-size: larger;"
                    href="registration.html">Registration</a>&nbsp;&nbsp;
            </td>

        </tr>

        <tr>

            <td style="border:2px solid rgb(255, 255, 255); border-collapse: collapse;">

                <form action="../controller/regCheck.php" method="post" style="color: rgb(255, 255, 255);">
                    <br><br><br><br><br>
                    <fieldset style="width:45%; margin:  0px auto;">

                        <legend><b style="color: rgb(255, 255, 255);">REGISTRATION</b></legend>

                        <br><br>

                        <b style="color: rgb(255, 255, 255);">Name</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input
                            type="text" name="name" required>
                        <hr>

                        <b style="color: rgb(255, 255, 255);">User Name</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input
                            type="text" name="username" required>
                        <hr>
                        <b style="color: rgb(255, 255, 255);">Email</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input
                            type="email" name="email" required>
                        <button title="hint:Sample@example.com"><b>i</b></button>
                        <hr>
                        <b style="color: rgb(255, 255, 255);">Mobile Number</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text"
                            name="mobileNumber" pattern="[0]{1}[1]{1}[0-9]{9}" title="Enter your 11 digit mobile number 
                        Hint: 017xxxxxxxx" required>
                        <hr>
                        <b style="color: rgb(255, 255, 255);">NID Number</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input
                            type="text" name="nidNumber" pattern="[0]{1}[1]{1}[0-9]{9}" title="Enter your nid number 
                        Hint: 8574965821475" required>
                        <hr>
                        <b
                            style="color: rgb(255, 255, 255);">Password</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input
                            type="password" name="password">
                        <!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least 1 number and 1 uppercase and lowercase letter, and at least 8 or more characters" required-->
                        <hr>
                        <b style="color: rgb(255, 255, 255);">Confirm Password</b>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="password" name="cpassword">
                        <!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password and Confirm Password should be same" required-->
                        <hr>



                        <fieldset>

                            <legend><b style="color: rgb(255, 255, 255);">Gender</b></legend>

                            <input type="radio" name="gender" value="Male"> <b
                                style="color: rgb(255, 255, 255);">Male</b>
                            <input type="radio" name="gender" value="Female"> <b
                                style="color: rgb(255, 255, 255);">Female</b>
                            <input type="radio" name="gender" value="Other"> <b
                                style="color: rgb(255, 255, 255);">Other</b>

                        </fieldset>

                        <hr>

                        <fieldset>

                            <legend><b style="color: rgb(255, 255, 255);">Date of Birth</b></legend>

                            <input type="tel" name="dd" size="1" pattern="[0-9]{2}"><b
                                style="color: rgb(255, 255, 255);"> /</b>
                            <input type="tel" name="mm" size="1" pattern="[0-9]{2}"><b
                                style="color: rgb(255, 255, 255);"> /</b>
                            <input type="tel" name="yyyy" size="2" pattern="[0-9]{4}"> <b
                                style="color: rgb(255, 255, 255);">(dd/mm/yyyy)</b>

                        </fieldset>
                        <hr>

                        <input type="submit" name="submit" value="Submit">
                        <input type="Reset" name="reset" value="Reset">

                    </fieldset>
                    <br><br><br><br><br>

                </form>
            </td>

        </tr>

        <tr>

            <td colspan="2" align="center">
                <p style="color: rgb(255, 255, 255);">Copyright &#169; 2017</p>
            </td>

        </tr>

    </table>



</body>

</html>


<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="cashin.php"><img src="../assets/taka.png" style="width:82px; height:86px"
        title="Cash In" alt="CashIn"></a>
<b style="color: rgb(255, 255, 255);">Cash In</b>