<?php
include "config.php";
$sql="delete from student where id=".$_POST["ID"];
$con->query($sql);
?>