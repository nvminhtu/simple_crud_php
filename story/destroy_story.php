<?php

$id = intval($_REQUEST['id']);

include '../include/conn.php';

$sql = "delete from story where id=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>