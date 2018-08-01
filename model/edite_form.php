<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 26.07.2018
 * Time: 6:49
 */
?>

<div id="edit" class="popup edit">
    <a class='close' href='#'>Close</a>
    <form method="post" action="/index.php?w_n=<?echo $_GET['w_n']."&name_w=".$_GET['name_w']?>">
        <input name="id" hidden value=<? echo $_GET['w_n'] ?>>
        <center><textarea name="correct" id="corect"></textarea></center>
        <div id="s">
        <button type="submit"  class="save">Save</button>
        </div>
    </form>
</div>

<div id="edit_comment" class="popup edit_comment">
    <a class='close' href='#'>Close</a>
    <form method="post" action="/index.php?w_n=<?echo $_GET['w_n']."&name_w=".$_GET['name_w']?>">
        <input  class="id" name="id_n" hidden>
        <center><textarea name="correct_comment" id="correct_comment"></textarea></center>
        <div id="s">
            <button type="submit"  class="save">Save</button>
        </div>
    </form>
</div>
