<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 23.07.2018
 * Time: 14:36
 */?>


<form id="Sign in" method="post" action="/index.php?authorizin=true">
    <a href="authorization.php">Don't have an acount?Join now</a>
    <div class="form-group">
        <label for="InputEmail">Email address</label>
        <input name="email" type="email" class="form-control" id="InputEmail"  placeholder="Email address">
    </div>
    <div class="form-group">
        <label for="Password1">Password</label>
        <input name="password" type="password" class="form-control" id="Password1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>

