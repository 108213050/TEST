<?php
require_once("dbconfig.php");
function addJob($title,$note){
    global $db;
    // 指令
	$sql = "insert into todo (title, note) values (?, ?)";
	$stmt = mysqli_prepare($db, $sql); //prepare sql statement
	mysqli_stmt_bind_param($stmt, "ss", $title, $note); //bind parameters with variables
	// "?"對上綁定的型態 sss s:string
	mysqli_stmt_execute($stmt);  //執行SQL
    return true;
}
function getJobList(){
    global $db;
    //$db其實是在函數外定義的
    //在function裡要宣告這個變數是在外面定義的
    /*
	$a=array();
	$a['id']=10;
	$a['title']='test';
	$a['note']='note';
	$a['start']='123';
	$a['finish']=null;
	$aa[]=$a;
	return  $aa;
	*/
    $a = array();
    $sql = "select * from todo order by id desc;";
    $stmt = mysqli_prepare($db, $sql );
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt); 
    $retArr = array();
    while (	$rs = mysqli_fetch_assoc($result)) {
        $tArr = array();
        $tArr['id'] = $rs['id'];
        $tArr['title'] = $rs['title'];
        $tArr['note'] = $rs['note'];
        $tArr['start'] = $rs['start'];
        $tArr['finish'] = $rs['finish'];
        $retArr[] = $tArr;
    }
    return $retArr;
}
function setFinished($id){
    global $db;
    $sql = "update todo set finish=now() where id=?";
	$stmt = mysqli_prepare($db, $sql);
	mysqli_stmt_bind_param($stmt, "i", $id);
	mysqli_stmt_execute($stmt); //執行SQL
	echo "message updated";
    return false;
}
?>