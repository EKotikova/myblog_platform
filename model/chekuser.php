<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 27.07.2018
 * Time: 9:37
 */
include "components/connect_db.php";

if(isset($_POST['email'])&&isset($_POST['password'])){
    $db=mysqli_connect($host,$user,$password,$database) or
    die("Error connect db :".mysqli_error($db) );

    $email=$_POST['email'];
    $password=$_POST['password'];



    $query_1="Select nameusers from users WHERE email='".$email."' and password='".$password."'";
    $res_1=mysqli_query($db,$query_1) or die("error select:".mysqli_error($db));
    if(isset($res_1)){
        $row1=mysqli_fetch_array($res_1);
        if(!empty($row1['nameusers'])){
            header('Location:http://myblog:81');
            echo $row1['nameusers'];

        }
        elseif(empty($row1['nameusers'])){
            $query_2="Select admin from adminka where email='".$email."'and password='".$password."'";
            $res_2=mysqli_query($db,$query_2) or die("error select:".mysqli_error($db));
            if(isset($res_2)){
                $row2=mysqli_fetch_array($res_2);
                if(!empty($row2['admin'])){
                    header('Location:http://myblog:81');
                    echo $row2['admin'];
                }
                else{
                    echo "The user wasn't found here";
                }
            }
        }
    }

    mysqli_close($db);

}