<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 25.07.2018
 * Time: 13:20
 */

$inputcom=0;
$id=0;
$rol=0;
$nam=0;
include "components/connect_db.php";

if(isset($_POST['mycomit'])&& isset($_POST['iduser'])&& isset($_POST['n_user'])) {

    $db=mysqli_connect($host,$user,$password,$database) or
    die("Error connect db :".mysqli_error($db) );

    $inputcom = $_POST['mycomit'];
    $id = $_POST['iduser'];
    $nam = $_POST['n_user'];
    $data_comment=date('y-m-d');
    if (isset($inputcom)) {
    $isert_commet="Insert into user_com (com_user,com_text,data_com)VALUE ('".$nam."','".$inputcom."','".$data_comment."')";
    $res_comment=mysqli_query($db,$isert_commet)or die("error insert_comment:".mysqli_error($db));
    if(isset($res_comment)){

    }

    }
}
