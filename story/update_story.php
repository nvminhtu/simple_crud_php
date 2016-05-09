<?php
$id = intval($_REQUEST['id']);
$title = mysql_real_escape_string(htmlentities(html_entity_decode($_REQUEST['title'])));
//$content = mysql_real_escape_string(trim(htmlentities(htmlspecialchars(html_entity_decode($_REQUEST['content'])))));
$content = mysql_real_escape_string(trim(htmlentities(html_entity_decode($_REQUEST['content']))));
$cat_id = htmlspecialchars($_REQUEST['cat_id']);
include '../include/conn.php';
$sql = "update story set title='$title',content='$content',cat_id='$cat_id' where id=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => $id,
		'title' => html_entity_decode($title),
		'content' => html_entity_decode($content),
		'cat_id' => $cat_id
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'))
;}
?>