<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 23.07.2018
 * Time: 20:21
 */


include "components/connect_db.php";
$s=' by ';

$db=mysqli_connect($host,$user,$password,$database) or
die("Error connect db :".mysqli_error($db) );
if(isset($_GET['name'])) {

    $queryrole = "Select id_roles from users where nameusers='" . $_GET['name'] . "'";
    $resrole = mysqli_query($db, $queryrole) or die('select role:' . mysqli_error($db));
    if (isset($resrole)) {
        $row = mysqli_fetch_array($resrole);
        if ($row['id_roles'] == 1) {
          echo "<a id='postadd' class='new_post' href='#' rel='add_post'><button  type='button' class='btn btn-outline-info'>Add_post</button></a>";
        }

    }
}
$query="Select id,headers,short_description,image,data_post,writers from arhive_post ORDER BY id DESC ";

$res=mysqli_query($db,$query) or die("Error query:".mysqli_error($db));

if(isset($res)){

    while($row=mysqli_fetch_array($res)){
        $id=$row['id'];
        $head=$row['headers'];
        $short_txt=$row['short_description'];
        $data=$row['data_post'];
        if($row['writers']=='') {
            $name = $row['writers'];
        }
        else{
            $name=$s.$row['writers'];
        }


        echo "<div id='post'>";
        echo "<p><h6 id='h' align='left'>". $head."</h6></p>";
        echo '<div id="pic">'.'<img id="short" src="data:image/*;base64,' . base64_encode($row['image']) . '" />'.'</div>';
        echo "<div align='left' id='text'>".$short_txt."</div>";
        if(isset($_GET['name'])){
            echo "<label id='date'>".$data.$name."<a href='http://myblog:81/index.php?w_n=".$id."& name_w=".$_GET['name']."'>Read More</a>"."</label>";
        }
        else {
            echo "<label id='date'>" . $data . $name . "<a href='http://myblog:81/index.php?w=" . $id . "'>Read More</a>" . "</label>";
        }
        echo "</div>";

    }
    mysqli_close($db);

}
