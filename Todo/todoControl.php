
<?php
require('todoModel.php');
$act=$_REQUEST['act'];
switch($act){
	//新增工作項目
	case "addJob":
		$title=$_POST['title'];
		$note=$_POST['note'];
		//如果有拿到工作名稱(防呆)
		if ($title) {
			addJob($title,$note);
		}
		header("Location: 1.listUI.php");	
		break;
	//完成工作
	case "setFinish":
		$id = (int)$_REQUEST['id'];
		if ($id>0) {
			setFinished($id);
		}
		header("Location: 1.listUI.php");	
		break;
	default;

	}

?>

</body>
</html>
