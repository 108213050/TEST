<?php
	// http head
	session_start(); //啟用session 功能, 必須在php程式還沒輸出任何訊息之前啟用
	//
	$val = $_POST["keyValue"];
	if ($val == ''){
		
	}else{
		$val = '';
	}
	
	
	
	//你必須在Session 程式開頭放入 session_start()
	$_SESSION["keyValue"] = $val; //宣告session 變數並指定值
	setcookie("keyValue", $val, time()+36000); // 設定cookie值與有效時間
	// time()+3600: 從現在開始後的3600
?>
ok!!
<a href="session-get.php">get session value</a>