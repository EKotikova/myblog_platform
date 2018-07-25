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

$query="Select id,headers,short_description,image,data_post,writers from arhive_post";

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
        echo "<p><h5 id='h' align='left'>". $head."</h5></p>";
        echo '<div id="pic">'.'<img src="data:image/*;base64,' . base64_encode($row['image']) . '" />'.'</div>';
        echo "<div align='left' id='text'>".$short_txt."</div>";
        echo "<label id='date'>".$data.$name."<a href='http://myblog:81/blog_platform/index.php?w=".$id."'>Read More</a>"."</label>";
        echo "</div>";

    }
    mysqli_close($db);

}
