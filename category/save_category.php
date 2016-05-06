<?php

$title = htmlspecialchars($_REQUEST['title']);
$thumb = htmlspecialchars($_REQUEST['thumb']);

include '../include/conn.php';

$sql = "insert into category(title,thumb) values('$title','$thumb')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => mysql_insert_id(),
		'title' => $title,
		'thumb' => $thumb
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>