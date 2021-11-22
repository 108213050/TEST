<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>input form</title>
</head>
<body>
<p>my guest book !! </p>
<hr />

<table width="200" border="1">
  <tr>
    <td>title</td>
    <td>message</td>
    <td>name</td>
    <td>留言種類</td>
  </tr>
  <!-- 用POST打包送給2.insert.php -->
  <tr><form method="post" action="2.insert.php">
    <!-- NAME的命名會連結到PHP程式執行辨認 -->
    <td><label>
      <input name="title" type="text" id="title" />
    </label></td>
    <td><label>
      <input name="msg" type="text" id="msg" />
    </label></td>
    <td><label>
      <input name="myname" type="text" id="myname" />
      
    </label></td>
    <td>
      <select name="type" size="1">
        <option>請選擇留言種類</option>
        <option value="閒聊">閒聊</option>
        <option value="心情">心情</option>
        <option value="八卦">八卦</option>
      </select>
    </td>
    <td><input type="submit" name="Submit" value="送出" /></td>
	</form>
  </tr>
</table>
</body>
</html>
