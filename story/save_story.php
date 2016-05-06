<?php

$title = mysql_real_escape_string(trim(htmlentities($_REQUEST['title'])));
//$content = htmlspecialchars($_REQUEST['content']);
$content = mysql_real_escape_string(trim(htmlentities($_REQUEST['content'])));
//$content =  mysql_real_escape_string(htmlentities(stripslashes(utf8_encode($_REQUEST['content'])), ENT_QUOTES));
$cat_id = htmlspecialchars($_REQUEST['cat_id']);

include '../include/conn.php';

$sql = "insert into story(title,content,cat_id) values('$title','$content','$cat_id')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'id' => mysql_insert_id(),
		'title' => $title,
		'content' => $content,
		'cat_id' => $cat_id
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>