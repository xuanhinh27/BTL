<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hinh27";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Chưa kết nối Database" . mysqli_connect_error());

}




    ?>



