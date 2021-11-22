<?php
require_once("dbconfig.php");
function addJob($title,$note){
    return false;
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
    return false;
}
?>