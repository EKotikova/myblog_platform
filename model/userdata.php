<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 27.07.2018
 * Time: 7:00
 */
include "components/connect_db.php";
if(isset($_POST['user'])&& isset($_POST['email'])&& isset($_POST['password'])&& isset($_POST['confpass'])){

    $db=mysqli_connect($host,$user,$password,$database) or
    die("Error connect db :".mysqli_error($db) );

    $user=$_POST['user'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confpass=$_POST['confpass'];


     $chek="Select email from users where email='".$email."'";
    $chek_res=mysqli_query($db,$chek) or die("error chek:".mysqli_error($db));
    if(mysqli_num_rows($chek_res)<=0) {
        if(isset($_GET['role'])) {
            $qidroles = "Select id from roles WHERE name_role='" . $_GET['role'] . "'";
            $residroles = mysqli_query($db, $qidroles) or die("error select:" . mysqli_error($db));
            if (isset($residroles)) {
                $row_roles = mysqli_fetch_array($residroles);


                $query = "Insert into users (nameusers,id_roles,email,password)VALUES ('" . $user . "','" . $row_roles['id'] . "','" . $email . "','" . $password . "')";

                if ($password == $confpass) {
                    $res = mysqli_query($db, $query) or die("error insert:" . mysqli_error($db));
                    if (isset($res)) {
                        mysqli_close($db);
                        echo "<script>document.location.replace('http://myblog:81/index.php?user=true')</script>";

                    }
                } else {
                    echo "Please check password";
                }
            }
        }
    }
    else{
        echo "Email is not individual";
        echo "<script>document.location.replace('http://myblog:81/index.phpreg=true')</script>";
    }



}


?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

