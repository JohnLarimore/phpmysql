<?php
require '../cms/includes/database-connection.php';
require '../cms/includes/functions.php';
$query = "SELECT forename, surname FROM member WHERE id = 1;";
//var_dump($pdo); 
$statement = $pdo->query($query);
//var_dump($statement); 
$member = $statement->fetch();
//var_dump($member); 
?>
<!DOCTYPE html>
<html>
	<body>
		<p>
			<?= html_escape($member['forename']) ?>
			<?= html_escape($member['surname']) ?>
		</p>
	</body>
</html>
