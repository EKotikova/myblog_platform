<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 23.07.2018
 * Time: 14:36
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My blogs_platforma</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"
          integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src=""></script>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div>
    <header>
    </header>

    <form id="Signup" method="post" action="/index.php?regin=true">
        <a href="authorization.php">Already registered?Sign in</a>
        <div class="form-group">
            <label for="username">Username</label>
            <input  name="user" type="text" class="form-control" id="username" required oninput="validateName(this)"  placeholder="Username">
        </div>
        <div class="form-group">
            <label for="InputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="InputEmail1" oninput="validateEmail(this)"  required placeholder="Email address">
        </div>
        <div class="form-group">
            <label for="Password1">Password</label>
            <input name="password" type="password" class="form-control" id="Password1" oninput="validatePassword(this)" required placeholder="Password">
        </div>
        <div class="form-group">
            <label for="ConfirmPassword1"> Confirm Password</label>
            <input name="confpass" type="password" class="form-control" id="ConfirmPassword1" oninput="validateConfPassword(this)" required placeholder=" Confirm Password">
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>

    <script>
        function validateName(input){
            if(!input.value.match('^[a-zA-Z][a-zA-Z0-9-_/.]{1,16}$')){
                input.setCustomValidity("The user must start with a capital letter, must contain only letters and numbers in Latin. " +
                    "The maximum length is 16 characters.");
            }
            else {
                input.setCustomValidity("");
            }
        }

        function validateEmail(input){
            if(!input.value.match('/^([a-z0-9_/.-])+@[a-z0-9-]+/.([a-z]{2,4}/.)?[a-z]{2,4}$/i')){
                input.setCustomValidity("not valid this email address");
            }
            else {
                input.setCustomValidity("");
            }
        }

        function validatePassword(input){
            if(!input.value.match('(?=^.{8,}$)((?=.*/d)|(?=.*/W+))(?![./n])(?=.*[A-Z])(?=.*[a-z]).*$')){
                input.setCustomValidity("The password field must be at least 8 characters. Must contain lowercase and uppercase letters and at least one digit.");
            }
            else {
                input.setCustomValidity("");
            }
        }

        function validateConfPassword(input){
            if(document.getElementById('Password1').value!=document.getElementById('ConfirmPassword1').value){
                input.setCustomValidity("This password is't valid");
            }
            else {
                input.setCustomValidity("");
            }
        }

    </script>


</div>


<footer>
    Copyright Kotikova  Elena 2018
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"
        integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"
        integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

</body>
</html>














