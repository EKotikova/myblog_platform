<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 29.07.2018
 * Time: 20:38
 */


include "components/connect_db.php";

$header = $_POST['headers'];
$short_description = $_POST['short_description'];
$text = $_POST['text'];
$img = $_FILES['img']['name'];
$writers=$_POST['writers'];
$data_post=date('y-m-d');

if (!empty($header) && !empty($short_description) && !empty($text)  && !empty($data_post)) {
    $db = mysqli_connect($host, $user, $password, $database) or
    die ("Ошибка подключения к бд : " . mysqli_error($db));
    if(isset($img)) {
        //проверка загрузки картинки
        if ($_FILES['img']['error'] == 0) {
            echo $_FILES['img']['error'];

            // Если файл загружен успешно, то проверяем - графический ли он
            if (substr($_FILES['img']['type'], 0, 5) == 'image') {

                $Filepath = $_FILES['img']['tmp_name'];


                //читаем содержимое файла
                $image = file_get_contents($Filepath);
                //экранируем специальные символы в пути
                $image = mysqli_real_escape_string($db, $image);


            }

        } elseif ($_FILES['img']['error'] != 0) {
            echo "ошибка загрузки файла";
        }

    }

    $query = "Insert Into arhive_post (headers,short_description,text_post,image,data_post,writers) VALUES('" . $header . "',
    '" . $short_description . "','" . $text . "','" . $image . "','".$data_post."','".$writers."')";
    $res = mysqli_query($db, $query) or
    die ("Ошибка вставки в бд : " . mysqli_error($db));;

    if (isset($res)) {
        echo "<script>document.location.replace('http://myblog:81/index.php?name=".$_GET['name']."')</script>";

    }

    mysqli_close($db);

}
