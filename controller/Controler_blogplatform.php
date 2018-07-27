<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 23.07.2018
 * Time: 14:20
 */

//run work
$reg=filter_input(INPUT_GET,'reg');
$authorization=filter_input(INPUT_GET,'user');
$w=filter_input(INPUT_GET,'w');
if(isset($reg)){
    include "view/registration.php";
}
elseif(isset($authorization)){
    include "view/authorization.php";
}elseif(isset($w)){
    include "view/blog_platform_1.php";
}
else{
    include "view/blog_platform.php";
}
//create commit
$formcom=filter_input(INPUT_GET,'sub');
if(isset($formcom)){
$inpucom=filter_input(INPUT_POST,'mycomit');
if(isset($inpucom)){
    include "model/create_commits.php";
}
}
//update data
$text=filter_input(INPUT_POST,'correct');
$id=filter_input(INPUT_POST,'id');
if(isset($text)){
    include "model/apdata.php";
}
//deleted post
$delpost=filter_input(INPUT_GET,'del');
if(isset($delpost)){
    include "model/delpost.php";
}
//registration
$sgnin=filter_input(INPUT_GET,'regin');
if(isset($regin)){
  $user=filter_input(INPUT_POST,'user');
  $email=filter_input(INPUT_POST,'email');
    $pass=filter_input(INPUT_POST,'password');
    $confpass=filter_input(INPUT_POST,'confpass');
include "model/userdata.php";
}