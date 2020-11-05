<?php
require("dbconnect.php");

$msgID=(int)$_GET['id'];
if ($msgID) {
	$sql = "delete from todo where id=$msgID;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
	$msg = "Message:$msgID End.";
}
header("location: Completed.php?m={$msg}");
?>
