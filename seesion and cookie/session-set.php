<?php
	// http head
	session_start(); //�ҥ�session �\��, �����bphp�{���٨S��X����T�����e�ҥ�
	//
	$val = $_POST["keyValue"];
	if ($val == ''){
		
	}else{
		$val = '';
	}
	
	
	
	//�A�����bSession �{���}�Y��J session_start()
	$_SESSION["keyValue"] = $val; //�ŧisession �ܼƨë��w��
	setcookie("keyValue", $val, time()+36000); // �]�wcookie�ȻP���Įɶ�
	// time()+3600: �q�{�b�}�l�᪺3600
?>
ok!!
<a href="session-get.php">get session value</a>