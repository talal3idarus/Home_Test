<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrtion Page</title>
    <link rel="stylesheet" href="registerStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    
    <script>
		function validateForm() {
		  let usrname = document.forms["myForm"]["S_name"].value;
		  let pass = document.forms["myForm"]["password1"].value;
		  if (usrname == ""){
			alert("Name must be filled out");
			return false;
		  }
		  if (pass == ""){
			alert("Password must be filled out");
			return false;
		  }
		}
		</script>


</head>
</head>
<body>
    <div class="container_1">
        <div class="container_2">
            <h1 class="LReg">Registrtion</h1>
            <hr>
            <form method="post" name="myForm" onsubmit="return validateForm()" action="#"></form>
                <div class="row">
                    <div class="col">
                        <div class="box1">
                            
                        </div>
                        
                        <div class="box2">
                            
                            <div class="user">
                                <label>Username:</label><br>
                                <input type="text" class="username" id="S_name" name="S_name">
                            </div>

                            <div class="email">
                                <label>Email:</label><br>
                                <input type="Email" class="Email">
                            </div>
                            
                            <div class="levels">
                                <table style="width:100%">

                                    <tr>
                                    <td><input type="radio" class="level" name="1"><span class="level">Diploma</span></td>
                                    <td><input type="radio" class="level" name="1"><span class="level">Master</span></td>
                                
                                    </tr>
                                    <tr>
                                    <td><input type="radio" class="level" name="1"><span class="level">Bachler</span></td>
                                    <td><input type="radio" class="level" name="1"><span class="level">Others</span></td>
                                
                                    </tr>
                                </table>
                            </div>

                            <div class="pass">
                                <label>Password:</label><br>
                                <input type="password" class="password" id="password1" 	name="password1">
                            </div>

                            <div class="Cpass">
                                <label>Confirm Password:</label><br>
                                <input type="password" class="Cpassword" id="password2" 	name="password2">
                            </div>
                        </div>   
                
                    </div>
                    <div class="col">
                        <div class="box1">
                            <div class="phone">
                                <label>Phone Number</label><br>
                                <input type="number" class="pnumber">
                            <!-- we should do a regulir exprtion for e not to be used in phone number  -->
                            </div>
            
                            <div class="birthday">
                                <label>Birth Day:</label><br>
                                <input type="Date" class="DOF">
                            </div>
            
                            <div class="major">
                                <label>Speciallizatiopn:</label><br>
                                <input type="text" class="Speciallizatiopn">
                            </div>
            
                            <div class="Civil">
                                <label>Civil No:</label><br>
                                <input type="text" class="id">
                            </div>
                            <div class="location">
                                <label>Address:</label><br>
                                <input type="text" class="Address">
                            </div>
                        </div>
                    
                </div>
                <hr>
                    <div class="buttons">
                        <a href="#"><input type="submit"  class="buttons1" value="Register" id="submit_reg" name="submit_reg" ></a> 
                    <a href="start.html"><input type="button"  class="buttons1" value="back"></a>
                    </div>
                    
                </div>
            </form>
    </div>
</body>
</html>

<?php
include 'dbconnection.php';

$errMsg1="";
$errMsg2="";
$errMsg3="";
$errMsg4="";
$errMsg5="";
$errMsg6="";
$errMsg7="";
$errMsg8="";
$errMsg9="";

if(isset($_POST['submit_reg'])){

}

?>