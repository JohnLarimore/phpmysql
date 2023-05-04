<?php
require '../cms/includes/database-connection.php'; 
require '../cms/includes/functions.php'; 
$sql = "SELECT forename, surname FROM member;";
$statement = $pdo->query($sql); 
var_dump($statement);
?>
<html>
	<body>
		<?php while ($row = $statement->fetch()) { ?>
			<p>
				<?= html_escape($row['forename']) ?>
				<?= html_escape($row['surname']) ?>
			</p>
		<?php } ?>
	</body>
</html>
