<?php
require("dbconfig.php");
	// http head
	// session_start(); //啟用session 功能, 必須在php程式還沒輸出任何訊息之前啟用
	$loginID = $_POST["id"];
	$password = $_POST["pwd"];
	
	
	$sql = "select loginID,role,level from user where password=PASSWORD(?);";
	$stmt = mysqli_prepare($db, $sql );
	mysqli_stmt_bind_param($stmt, "s", $password);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt); 
	if ($rs = mysqli_fetch_assoc($result)) {
		
		if ($rs['loginID'] == $loginID) {
			
			$_SESSION["userID"] = $loginID; //宣告session 變數並指定值
			//$_SESSION["role"] = $rs['role']; //宣告session 變數並指定值
			$_SESSION["role"] = $rs['level']; //宣告session 變數並指定值
			header("Location: 1.listUI.php");
		} else {
			$_SESSION["userID"] = '';
			$_SESSION["role"] = '';
			header("Location: 0.loginUI.php");
		}
	}
	// if ($rs = mysqli_fetch_assoc($result)){
	
	// 	if($rs['loginID'] == $loginID){
	// 		$_SESSION["userID"] = $loginID;
	// 		// $_SESSION["role"] = $re['role'];
	// 		$_SESSION["role"] = $rs['level'];
			
	// 		// 登入成功轉向到首頁去
	// 		header("Location: 1.listUI.php");
	// 	}else{
	// 		// 把記號抹除
	// 		$_SESSION["userID"] = '';
	// 		$_SESSION["role"] = '';
	// 		header("Location: 0.loginUI.php");
	// 	}
	// }
	
	
	
	
?>
