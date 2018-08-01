<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 30.07.2018
 * Time: 13:21
 */

include "components/connect_db.php";

$db=mysqli_connect($host,$user,$password,$database) or
die("Error connect db :".mysqli_error($db) );

$select_comment="Select id,com_user,com_text,data_com from user_com ORDER BY data_com DESC";
$resselect_comment=mysqli_query($db,$select_comment)or die("error select_comment:".mysqli_error($db));
if(isset($resselect_comment)){
    while($row_coment=mysqli_fetch_array($resselect_comment)){
        $id=$row_coment['id'];
        $data=$row_coment['data_com'];
        $user=$row_coment['com_user'];
        $comment=$row_coment['com_text'];
        echo "<div class='my_com' id=$id>";
        echo "<label id='d'>".$data."</label>  ";
        echo "<label id='u' >".$user."</label><br>";
        echo "<label class='addcom' id='comment$id'>".$comment."</label>";
        echo "</div>";
        if(isset($_GET['name_w'])){
            $queryrole="Select  id_roles from users where nameusers='".$_GET['name_w']."'";
            $resrole=mysqli_query($db,$queryrole)or die('select role:'.mysqli_error($db));
            if(isset($resrole)){
                $row=mysqli_fetch_array($resrole);
                if ($row['id_roles'] == 1) {
                    echo "<a class='comment' href='#' id='edcomment$id' rel='edit_comment' onclick='editcomment($id)'><button  type='button' class='btn btn-secondary'>Edit comment</button></a>";
                    echo "<a href='/index.php?delcomment=" . $id . "& w_n=". $_GET['w_n']."&name_w=".$_GET['name_w']."'><button id='delcomment' type='button' class='btn btn-secondary'>Delete</button></a>";
                }

            }
        }
    }
    mysqli_close($db);
}
?>

<script type="text/javascript">
    function editcomment (id_com){
        var v=id_com;
        $('input').val(v);
        var  texted=document.getElementById('comment'+v);
        var areatxt=document.getElementById('correct_comment');
        areatxt.innerHTML=texted.innerHTML;


    }
</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"
        integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"
        integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>