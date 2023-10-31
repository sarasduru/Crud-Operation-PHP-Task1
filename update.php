<?php
include "config.php";
$con= mysqli_connect("localhost","root","");
$db= mysqli_select_db($con,"crud");

$sql="update student set Name='{$_POST["Name"]}',Age='{$_POST["Age"]}',City='{$_POST["City"]}' where id=".$POST["id"]; 
    $con->query($sql);
?> 