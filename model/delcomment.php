<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 26.07.2018
 * Time: 19:38
 */

include "components/connect_db.php";
if(isset($_GET['delcomment'])){
    $id=$_GET['delcomment'];
    $db=mysqli_connect($host,$user,$password,$database) or
    die("Error connect db :".mysqli_error($db) );

    $queru= "DELETE  from  user_com  where id='".$id."'";
    $res=mysqli_query($db,$queru)or die("Error :".mysqli_error($db));

    mysqli_close($db);
    header("Location:http://myblog:81/index.php?w_n=".$_GET['w_n']."&name_w=".$_GET['name_w']."");
}

