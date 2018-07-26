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
    <form method="post" action="/index.php">
        <input name="id" hidden value=<? echo $_GET['w'] ?>>
        <center><textarea name="correct" id="corect"></textarea></center>
        <div id="s">
        <button type="submit"  class="save">Save</button>
        </div>
    </form>
</div>
