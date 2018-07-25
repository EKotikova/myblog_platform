<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 25.07.2018
 * Time: 13:20
 */

$inputcom=0;
if(isset($_POST['mycomit'])) {
    $inputcom = $_POST['mycomit'];

}

if($inputcom!=0){

    echo "<div>";
    echo "<label>".date('m/d/y')."</label>";
    echo "<textarea>".$inputcom."</textarea>";
    echo "<button type='button' class='btn btn-secondary'>Edit</button>";
    echo "<button type='button' class='btn btn-secondary'>Delete</button>";
    echo "</div>";



}
