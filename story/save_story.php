<?php
//$title = mysql_real_escape_string(trim(htmlentities($_REQUEST['title'])));
$title = mysql_real_escape_string(htmlentities(html_entity_decode($_REQUEST['title'])));
$content = htmlentities(mysql_real_escape_string(trim($_REQUEST['content'])));
//$content =  mysql_real_escape_string(htmlentities(stripslashes(utf8_encode($_REQUEST['content'])), ENT_QUOTES));
$cat_id = htmlspecialchars($_REQUEST['cat_id']);
include '../include/conn.php';
$sql = "insert into story(title,content,cat_id) values('$title','$content','$cat_id')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => mysql_insert_id(),
		'title' => html_entity_decode($title),
		'content' => html_entity_decode($content),
		'cat_id' => $cat_id
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>