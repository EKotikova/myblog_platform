<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 26.07.2018
 * Time: 18:14
 */
include "components/connect_db.php";
if(isset($_POST['correct'])&& isset($_POST['id'])){
    $stx=$_POST['correct'];
     $id=$_POST['id'];
    $db=mysqli_connect($host,$user,$password,$database) or
    die("Error connect db :".mysqli_error($db) );

    $queru= "UPDATE arhive_post SET text_post='" . $stx . "' where id='".$id."'";
    $res=mysqli_query($db,$queru)or die("Error connect db :".mysqli_error($db));

    //echo $stx;
}

