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
$w_n=filter_input(INPUT_GET,'w_n');
$name_w=filter_input(INPUT_GET,'name_w');
$name=filter_input(INPUT_GET,'name');
if(isset($reg)||isset($reg)&& isset($name)){
    include "view/registration.php";
}
elseif(isset($authorization)||isset($authorization)&& isset($name)){
    include "view/authorization.php";
}elseif(isset($w)||isset($w_n)&&isset($name_w)){
    //create commit
    $inpucom=filter_input(INPUT_POST,'mycomit');
    $iduser=filter_input(INPUT_POST,'iduser');
    $n_user=filter_input(INPUT_POST,'n_user');
    $rol=filter_input(INPUT_POST,'rol');

    //update comment
    $text_comment=filter_input(INPUT_POST,'correct_comment');
    $id=filter_input(INPUT_POST,'id_n');
    if(isset($text_comment)){
        include "model/apcomment.php";
    }

    //deleted comment
    $delcom=filter_input(INPUT_GET,'delcomment');
    if(isset($delcom)){
        include "model/delcomment.php";
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


    include "view/blog_platform_1.php";
}
else{
    include "view/blog_platform.php";
}


//registration
$sgnin=filter_input(INPUT_GET,'regin');
$rol=filter_input(INPUT_GET,'role');
if(isset($sgnin)){
    $user=filter_input(INPUT_POST,'user');
    $email=filter_input(INPUT_POST,'email');
    $pass=filter_input(INPUT_POST,'password');
    $confpass=filter_input(INPUT_POST,'confpass');
include "model/userdata.php";
}
//authorization
$authorizin=filter_input(INPUT_GET,'authorizin');

if(isset($authorizin)){
    $emailhoriz=filter_input(INPUT_POST,'email');
    $passhoriz=filter_input(INPUT_POST,'password');
    include "model/chekuser.php";
}


$insert_post=filter_input(INPUT_GET,'insert');
if(isset($insert_post)){
    $header=filter_input(INPUT_POST,'headers');
    $short_des=filter_input(INPUT_POST,'short_description');
    $text=filter_input(INPUT_POST,'text');
    $img=filter_input(INPUT_POST,'img');
    $writers=filter_input(INPUT_POST,'writers');
    include "model/insert_post.php";
}


