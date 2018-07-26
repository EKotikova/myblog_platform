<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 26.07.2018
 * Time: 19:38
 */

include "components/connect_db.php";
if(isset($_GET['del'])){
    $id=$_GET['del'];
    $db=mysqli_connect($host,$user,$password,$database) or
    die("Error connect db :".mysqli_error($db) );

    $queru= "DELETE  from  arhive_post  where id='".$id."'";
    $res=mysqli_query($db,$queru)or die("Error :".mysqli_error($db));

    mysqli_close($db);
    header("Location:http://myblog:81/index.php");
}

