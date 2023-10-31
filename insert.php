<?php
include "config.php";
$Name = $_POST['Name'];
$Age = $_POST['Age'];
$City = $_POST['City'];
$sql = "insert into student(Name,Age,City)values('$Name','$Age','$City')";
$con->query($sql);
echo"<td>{$Name}</td>";
echo"<td>{$Age}</td>";
echo"<td>{$City}</td>";
echo "<td><button type='button' class='btn btn-sm btn-info edit'data-id-'(ID)'></td>";
echo "<td><button type='button' class='btn btn-sm btn-info del' data-id-'(ID)'></td>";
?>