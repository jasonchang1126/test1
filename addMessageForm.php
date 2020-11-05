<?php
session_start();  // 通常如果你的網站具有會員登入的功能或是購物車的功能，基本上就可以使用到 session 來幫助你記錄這些資訊。
require("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新增工作</title>
</head>
<body>
<h1>Add New Message</h1>
<form method="post" action="addMessage.php">   <!--action = 使用者按下送出後資料會傳去哪-->

      Title: <input name="title" type="text" id="title" /> <br>    <!--表單會傳value值過去，若是沒設定，value就是你打的東西-->

      Content: <input name="content" type="text" id="content" /> <br>

      Assignee: <input name="assignee" type="text" id="assignee" /> <br>

      Emergencylevel: <input name="emergencylevel" type="radio" id="emergencylevel" value="3High" /> High
                      <input name="emergencylevel" type="radio" id="emergencylevel" value="2Medium"/> Medium
                      <input name="emergencylevel" type="radio" id="emergencylevel" value="1Low"  checked/> Low<br>

      Status: <input name="status" type="radio" id="status" value="0"  checked/>0 <br>
	  
      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
<a href="listTodo.php">Back</a>;
</body>
</html>
