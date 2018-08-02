<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 23.07.2018
 * Time: 14:36
 */
if(isset($_GET['name'])){
    include "components/connect_db.php";
    $db=mysqli_connect($host,$user,$password,$database) or
    die("Error connect db :".mysqli_error($db) );

    $queryrole="Select id_roles from users where nameusers='".$_GET['name']."'";
    $resrole=mysqli_query($db,$queryrole)or die('select role:'.mysqli_error($db));
    if(isset($resrole)){
        $row=mysqli_fetch_array($resrole);
        if($row['id_roles']==2){
            echo "<script>document.location.replace('http://myblog:81/index.php?name=".$_GET['name']."')</script>";
        }
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"
          integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div>
    <header>
    </header>

    <div id="main">
        <center>
        <a href="/index.php?user=true&name=<?echo $_GET['name']?>">Already registered?Sign in</a>
    <form id="Signup" method="post" action="/index.php?regin=true&role=User">
            <input  name="user" type="text" class=" form-control" id="username"  oninput="validateName(this)" required pattern="^[a-zA-Z][a-zA-Z0-9-_/.]{1,16}$" placeholder="Username">
             <span class="help-text"></span>

            <input  name="email" type="email" class="form-control" id="InputEmail1"  required placeholder="user@domain.zone">
             <span class="help-text"></span>

            <input  name="password" type="password" class="form-control" id="Password1"  required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password">
             <span class="help-text"></span>

            <input  name="confpass" type="password" class="form-control" id="ConfirmPassword1" oninput="validateConfPassword(this)" required placeholder=" Confirm Password">
             <span class="help-text"></span>

        <button id="in" type="submit" class="btn btn-primary">Sign in</button>
    </form>
    </center>
        </div>

    <script>
            function validateName(input) {
                if (input.value.length > 16) {
                    (input).setCustomValidity("The user must start with a capital letter, must contain only letters and numbers in Latin.The maximum length is 16 characters.");
                }
                else {
                    (input).setCustomValidity("");
                }
            }

            function validatePassword(input) {
                if (input.value.length<8) {
                    (input).setCustomValidity("The password field must be at least 8 characters. Must contain lowercase and uppercase letters and at least one digit.");
                }
                else {
                    (input).setCustomValidity("");
                }
            }

            function validateConfPassword(input) {
                if (document.getElementById('Password1').value != document.getElementById('ConfirmPassword1').value) {
                    (input).setCustomValidity("This password is't valid");
                }
                else {
                    (input).setCustomValidity("");
                }
            }

    </script>


</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"
        integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"
        integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

</body>
<footer>
    Copyright Kotikova  Elena 2018
</footer>
</html>














