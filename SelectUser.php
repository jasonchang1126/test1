<?php
session_start();    // 通常如果你的網站具有會員登入的功能或是購物車的功能，基本上就可以使用到 session 來幫助你記錄這些資訊。
require("dbconnect.php");
$sql = "select * from todo where status = 0 ORDER BY title, emergencylevel;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");    // 執行查詢，mysqli_query(使用的mysql連接, 查詢字符串)
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>工作清單</title>
</head>

<body>

<p>未完成! </p>
<hr />
<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>title</td>
    <td>content</td>
    <td>Assignee</td>
    <td>Emergencylevel</td>
    <td>status</td>
  </tr>
<?php
while (	$rs=mysqli_fetch_assoc($result)) {    // 從結果集中取得一行作為關聯組數，類似去抓取這個資料表哪個欄位
	echo "<tr><td>" . $rs['id'] . "</td>";    // 這邊就是去抓取id欄位
	echo "<td>{$rs['title']}</td>";
  echo "<td>" , $rs['content'], "</td>";
  echo "<td>" , $rs['assignee'], "</td>";
  if ($rs['emergencylevel']=="3High"){
    echo "<td><font color=red>" .$rs['emergencylevel']. "</font></td>";
  }
  else if ($rs['emergencylevel']=="2Medium"){
    echo "<td><font color=blue>" .$rs['emergencylevel']. "</font></td>";
  }
  if ($rs['emergencylevel']=="1Low"){
    echo "<td><font color=black>" .$rs['emergencylevel']. "</font></td>";
  }
  echo "<td>" . $rs['status'], "</td>";
}
?>
</table>
<?php
require("dbconnect.php");
$sql = "select * from todo where status = 1 ORDER BY title, emergencylevel;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");    // 執行查詢，mysqli_query(使用的mysql連接, 查詢字符串)
?>
<p>已完成!</p>
<hr/>
<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>title</td>
    <td>content</td>
    <td>Assignee</td>
    <td>Emergencylevel</td>
    <td>status</td>
  </tr>
<?php
while (	$rs=mysqli_fetch_assoc($result)) {    // 從結果集中取得一行作為關聯組數，類似去抓取這個資料表哪個欄位
	echo "<tr><td>" . $rs['id'] . "</td>";    // 這邊就是去抓取id欄位
	echo "<td>{$rs['title']}</td>";
  echo "<td>" , $rs['content'], "</td>";
  echo "<td>" , $rs['assignee'], "</td>";
  if ($rs['emergencylevel']=="3High"){
    echo "<td><font color=red>" .$rs['emergencylevel']. "</font></td>";
  }
  else if ($rs['emergencylevel']=="2Medium"){
    echo "<td><font color=blue>" .$rs['emergencylevel']. "</font></td>";
  }
  if ($rs['emergencylevel']=="1Low"){
    echo "<td><font color=black>" .$rs['emergencylevel']. "</font></td>";
  }
  echo "<td>" . $rs['status'], "</td>";
}
?>
</table>

<a href="Employee.php">Employee</a> 
<a href="listTodo.php">Boss</a>
</body>
</html>
