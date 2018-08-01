<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 23.07.2018
 * Time: 20:21
 */
$w=0;
if(isset($_GET['w'])){
    $w=$_GET['w'];
}
elseif(isset($_GET['w_n'])&&$_GET['name_w']){
    $w=$_GET['w_n'];
    $n=$_GET['name_w'];
}

include "components/connect_db.php";
$s=' by ';

$db=mysqli_connect($host,$user,$password,$database) or
die("Error connect db :".mysqli_error($db) );

$query="Select headers,text_post,image,data_post,writers from arhive_post where id=$w";

$res=mysqli_query($db,$query) or die("Error query:".mysqli_error($db));

if(isset($res)){

    while($row=mysqli_fetch_array($res)){
        $head=$row['headers'];
        $txt=$row['text_post'];
        $data=$row['data_post'];
        if($row['writers']=='') {
            $name = $row['writers'];
        }
        else{
            $name=$s.$row['writers'];
        }


        echo "<div id='post_full'>";
        echo "<p><h5 id='h' align='left'>".$head."</h5></p>";
        echo '<div id="pic_full">'.'<img id="full" src="data:image/*;base64,' . base64_encode($row['image']) . '" />'.'</div>';
        echo "<div align='left' id='text_full'>".$txt."</div>";
        echo "<label id='date_full'>".$data.$name."</label>";
        echo "</div>";
        if(isset($n)){
            $queryrole="Select id_roles from users where nameusers='".$n."'";
            $resrole=mysqli_query($db,$queryrole)or die('select role:'.mysqli_error($db));
            if(isset($resrole)){
                $row_role=mysqli_fetch_array($resrole);
                if($row_role['id_roles']==1){
                    echo "<button rel='edit' id='edpost' onclick='edit()' type='button' class='btn btn-secondary'>Edit</button>";
                    echo "<a href='/index.php?del=" . $w. "& w_n=". $_GET['w_n']."&name_w=".$_GET['name_w']."'><button id='delpost' type='button' class='btn btn-secondary'>Delete</button></a>";
                    include "view/form_comments.php";
                    include "model/create_commits.php";
                }
                if($row_role['id_roles']==2){
                   include "view/form_comments.php";
                    include "model/create_commits.php";
                }

            }
        }

    }
    mysqli_close($db);

}




