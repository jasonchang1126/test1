<?php
require("dbconnect.php");

$msgID=(int)$_POST['id'];
if ($msgID) {
	$sql = "delete from todo where id=$msgID;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
	$msg = "Message deleted.";
}
header("location: listTodo.php?m={$msg}");
?>
<a href="listTodo.php">Back</a>;
