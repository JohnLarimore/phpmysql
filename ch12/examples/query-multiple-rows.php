<?php
require '../cms/includes/database-connection.php'; 
require '../cms/includes/functions.php'; 
$sql = "SELECT forename, surname
	FROM member;";
$statement = $pdo->query($sql); 
$members = $statement->fetchAll(); 
//var_dump($members[2]); 
?>

<!DOCTYPE HTML>
<html>
	<body>
		<?php foreach ($members as $member) { ?>
			<p>
				<?= html_escape($member['forename']) ?>
				<?= html_escape($member['surname']) ?>
			</p>
		<?php } ?>
	</body>
</html>
