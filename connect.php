<?php


define("DB_SERVER", "127.0.0.1:50620");   //setting database infos
define("DB_USER", "azure");
define("DB_PASSWORD", "6#vWHD_$");
define("DB_DATABASE", "appointment");

$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);  //connecting database



   
?>