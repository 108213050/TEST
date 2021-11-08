<?php
	require("dbconfig.php");
	// http head
	// session_start(); //啟用session 功能, 必須在php程式還沒輸出任何訊息之前啟用
	//
	$loginID = $_POST["id"];
	$password = $_POST["pwd"];
	
	
	
	$sql = "select loginID from user where password=PASSWORD(?);";
	$stmt = mysqli_prepare($db, $sql );
	mysqli_stmt_bind_param($stmt, "s", $password);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt); 
	
	if ($rs = mysqli_fetch_assoc($result)){
	
		if($rs['loginID'] == $loginID){
			$_SESSION["userID"] = $loginID;
			// 登入成功轉向到首頁去
			header("Location: 1.listUI.php");
		}else{
			// 把記號抹除
			$_SESSION["userID"] = '';
			header("Location: 0.loginUI.php");
		}
	}
	
	
	
	
?>
