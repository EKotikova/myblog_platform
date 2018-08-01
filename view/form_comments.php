<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 29.07.2018
 * Time: 12:46
 */
if(isset($_GET['name_w'])){
    include "components/connect_db.php";
    $name_com=$_GET['name_w'];
    $db=mysqli_connect($host,$user,$password,$database) or
    die("Error connect db :".mysqli_error($db) );

    $queryrole="Select id_users, id_roles from users where nameusers='".$_GET['name_w']."'";
    $resrole=mysqli_query($db,$queryrole)or die('select role:'.mysqli_error($db));

    if(isset($resrole)){
        while($row=mysqli_fetch_array($resrole)) {
            $id_user = $row['id_users'];
            $id_role = $row['id_roles'];


            if ($id_role == 2||$id_role==1) {
                echo '<form id="com" method="post" action="http://myblog:81/index.php?w_n='.$_GET['w_n'].'&name_w='.$name_com.'">
    <div id="col" class="col-md-12">
        <input hidden name="rol" value='.$id_role.'>
         <input hidden name="n_user" value='.$name_com.'>
        <input hidden name="iduser" value='.$id_user.'>
        <input name="mycomit" class="form-control"  type="text"  id="mycommit" placeholder="My comment to the post">
        <div id="b_com">
            <button id="scom" type="submit" class="btn btn-info">Comment</button>
        </div>
    </div>
</form>';
            }

        }
    }


}

?>
