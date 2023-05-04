<?php
require '../cms/includes/database-connection.php'; 
require '../cms/includes/functions.php'; 
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); 
if(!$id){
	include 'page-not-found.php'; 
}
$sql = "SELECT forename, surname FROM member WHERE id = :id;";
$member = pdo($pdo, $sql, ['id' => $id])->fetch(); 
if(!$member){
	include 'page-not-found'; 
}
?>
<html>
	<body>
		<p>
			<?= html_escape($member['forename']) ?>
			<?= html_escape($member['surname']) ?>
		</p>
	</body>
</html>
