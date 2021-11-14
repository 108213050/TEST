<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>delete message</p>
<hr />
<?php
require("dbconfig.php");
// 放在網址後的參數都要用get取
if(isset($_GET['id'])) {
	$id=(int)$_GET['id'];
	$mid=(int)$_GET['mid'];
} else {
	$id=0;
}

if ($id>0) {
	$sql = "delete from response where id=?;";
	$stmt = mysqli_prepare($db, $sql );
	mysqli_stmt_bind_param($stmt, "i", $id);
	mysqli_stmt_execute($stmt);

	echo "response deleted.";
} else {
	echo "empty id, cannot delete.";
}
?>
<hr>

<?php
echo "<a href='3.viewPost.php?id=$mid'>Home</a>"
?>
</body>
</html>
