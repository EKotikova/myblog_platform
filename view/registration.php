<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 23.07.2018
 * Time: 14:36
 */

?>

<form id="Sign up" method="post" action="/index.php?regin=true">
    <a href="authorization.php">Already registered?Sign in</a>
    <div class="form-group">
        <label for="username">Username</label>
        <input name="user" type="text" class="form-control" id="username"  placeholder="Username">
    </div>
    <div class="form-group">
        <label for="InputEmail1">Email address</label>
        <input name="email" type="email" class="form-control" id="InputEmail1"  placeholder="Email address">
    </div>
    <div class="form-group">
        <label for="Password1">Password</label>
        <input name="password" type="password" class="form-control" id="Password1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="ConfirmPassword1"> Confirm Password</label>
        <input name="confpass" type="password" class="form-control" id="ConfirmPassword1" placeholder=" Confirm Password">
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>
