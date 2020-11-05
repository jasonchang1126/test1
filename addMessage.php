<?php
require("dbconnect.php");
$title=mysqli_real_escape_string($conn,$_POST['title']);   // 轉換字符串中特殊字符
$content=mysqli_real_escape_string($conn,$_POST['content']);    // $_POST: 接收使用者傳送的資料
$assignee=mysqli_real_escape_string($conn,$_POST['assignee']);
$emergencylevel=mysqli_real_escape_string($conn,$_POST['emergencylevel']);
$status=mysqli_real_escape_string($conn,$_POST['status']);

if ($title) { //if title is not empty
	$sql = "insert into todo (title, content, assignee, emergencylevel, status) values ('$title', '$content', '$assignee', '$emergencylevel','$status');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$msg = "Message added";
} else {
	$msg = "Message title cannot be empty";
}
header("location: listTodo.php?m={$msg}");
?>
<a href="listTodo.php">Back</a>;