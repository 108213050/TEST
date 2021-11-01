<?php
require('dbconfig.php');
// 強迫轉為int避免入侵
$mid=(int)$_POST['mid'];
$msg=$_POST['msg'];


if ($mid>0 ) {
	// 指令
	$sql = "insert into response (mid, msg) values (?, ?)";
	$stmt = mysqli_prepare($db, $sql); //prepare sql statement
	mysqli_stmt_bind_param($stmt, "is", $mid, $msg); //bind parameters with variables
	// "?"對上綁定的型態 sss s:string
	mysqli_stmt_execute($stmt);  //執行SQL
	// echo "message added.";
	header("Location: 3.viewPost.php?id=$mid");
} else {
	echo "empty title,cannot";
}
?>
