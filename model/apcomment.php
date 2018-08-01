<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 26.07.2018
 * Time: 18:14
 */
include "components/connect_db.php";
if(isset($_POST['correct_comment'])&& isset($_POST['id_n'])){
    $stx=$_POST['correct_comment'];
    $id=$_POST['id_n'];
    $db=mysqli_connect($host,$user,$password,$database) or
    die("Error connect db :".mysqli_error($db) );

    $queru= "UPDATE user_com SET com_text='" . $stx . "' where id='".$id."'";
    $res=mysqli_query($db,$queru)or die("Error connect db :".mysqli_error($db));

    mysqli_close($db);
    header("Location:http://myblog:81/index.php?w_n=".$_GET['w_n']."&name_w=".$_GET['name_w']."");
}

