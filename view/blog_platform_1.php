<?php
/**
 * Created by PhpStorm.
 * User: Lena
 * Date: 23.07.2018
 * Time: 14:25
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My blogs_platforma</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"
          integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src=""></script>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div>
    <header>
   <a id="reg"  href="registration.php"><button  class="btn btn-outline-primary">Registration</button></a>
        <a id="horiz"  href="authorization.php"><button class="btn  btn-outline-primary">Authorization</button></a>
    </header>
    <div id="main">
        <center>
      <?php include "C:\OpenServer\domains\myblog\blog_platform\model\writers.php"?>
            <form id="com" method="post" action="/index.php?sub=true">
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input class="form-control" type="text"  id="mycommit" placeholder="My commit to the post">
                    </div>

                </div>
                <button type="submit" class="btn btn-info">Comment</button>
            </form>
        </center>

    </div>



</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"
        integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"
        integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
<footer>
Copyright Kotikova  Elena 2018
</footer>
</body>
</html>


