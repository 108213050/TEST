<?php
	//Session �ϥνd��
	session_start(); //�ҥ�session �\��, �����bphp�{���٨S��X����T�����e�ҥ�
	$_SESSION["userID"] = ""; //�ŧisession �ܼƨë��w��

?>
<hr>

<form method="post" action="0.login.php">
ID<input type="text" name="id"></br>
Password <input type="text" name="pwd">
<input type="submit">
</form>