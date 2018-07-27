<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 27.07.2018
 * Time: 7:00
 */
include "components/connect_db.php";
if(isset($_POST['user'])&& isset($_POST['email'])&& isset($_POST['password'])&& isset($_POST['confpass'])){
    $user=$_POST['user'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confpass=$_POST['confpass'];


    $db=mysqli_connect($host,$user,$password,$database) or
    die("Error connect db :".mysqli_error($db) );

    $query="Insert into users (nameusers,email,password)VALUES ('".$user."','".$email."','".$password."')";

    if($password==$confpass){
        $res=mysqli_query($db,$query) or die("error insert:".mysqli_error($db));
        if(isset($res)){
            header('Location:http://myblog:81/authorization.php');
        }
    }
    else{
        echo "Please check password";
    }
    mysqli_close($db);
}