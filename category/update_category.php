<?php

$id = intval($_REQUEST['id']);
$title = htmlspecialchars($_REQUEST['title']);
$thumb = htmlspecialchars($_REQUEST['thumb']);

include '../include/conn.php';

$sql = "update category set title='$title',thumb='$thumb' where id=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => $id,
		'title' => $title,
		'thumb' => $thumb
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>