<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 26.07.2018
 * Time: 23:28
 */

$name=0;
if(isset($_GET['name'])){
    $name=$_GET['name'];
}



echo '<div id="add" class="popup add_post"><a class="close" href="#">Close</a>
    <h2>Add new_post</h2>
    <form enctype="multipart/form-data" action="http://myblog:81/index.php?name='.$name.'&insert=true" method="POST">
        <label for="header">new headers</label>
        <input name="headers" type="text" class="form-control" id="header" placeholder="name_header" required>
        <label for="short_description">short_description</label>
        <input name="short_description" type="text" class="form-control" id="short_description" placeholder="short_description" required>
        <label for="text">full_text</label>
        <textarea name="text"  class="form-control" id="text_full" required></textarea>
        <div class="form-group">
            <label>Выбор картинки</label>
            <input name="img" type="file" accept="image/*" id="img">
        </div>
        <label for="writers">writer</label>
        <input name="writers" type="text" class="form-control" id="writers" placeholder="name_writer" required>
        <div id="button" class="col-sm-offset-2 col-sm-30">
            <button type="submit" class="btn btn-default btn-sm">Сохранить</button>
        </div>
    </form>
</div>';