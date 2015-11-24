<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=dphiffer', 'dphiffer', 'asdfasdf');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$query = $db->query("
	SELECT *
	FROM chat
");

$messages = array();
while ($msg = $query->fetch()){}
	if (!empty($msg)) {
		$messages[] = $msg;
	}
}
header('Content-Type: application/json');
echo json_encode(array(
	'msgs' => $messages
));

?>
