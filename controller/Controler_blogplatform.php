<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 23.07.2018
 * Time: 14:20
 */


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

$formcom=filter_input(INPUT_GET,'sub');
if(isset($formcom)){
$inpucom=filter_input(INPUT_POST,'mycomit');

}

$text=filter_input(INPUT_POST,'correct');
$id=filter_input(INPUT_POST,'id');
if(isset($text)){
    include "model/apdata.php";
}
