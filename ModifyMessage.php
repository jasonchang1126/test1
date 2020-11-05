<?php
session_start();
require("dbconnect.php");
$title=mysqli_real_escape_string($conn,$_POST['title']);   // 轉換字符串中特殊字符
$content=mysqli_real_escape_string($conn,$_POST['content']);    // $_POST: 接收使用者傳送的資料
$assignee=mysqli_real_escape_string($conn,$_POST['assignee']);
$emergencylevel=mysqli_real_escape_string($conn,$_POST['emergencylevel']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
$one = $_SESSION['one'];

if ($one) {
	$sql = "update todo set title='$title', content='$content', assignee='$assignee', emergencylevel='$emergencylevel', status='$status' where id=$one;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
	$msg = "Message update";
}
// echo "Modify completed.";
header("location: listTodo.php?m={$msg}");
?>


<a href="listTodo.php">Back</a>;