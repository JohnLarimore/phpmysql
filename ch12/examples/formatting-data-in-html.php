<?php
require '../cms/includes/database-connection.php';
require '../cms/includes/functions.php'; 
$sql = "SELECT id, forename, surname, joined, picture FROM member;";
$statement = $pdo->query($sql); 
$members = $statement->fetchAll(); 
?>
<html>
	<body>
		<?php foreach ($members as $member) { ?>
			<div class="member-summary">
				<img src="../cms/uploads/<?= html_escape($member['picture'] ?? 'blank.png') ?>"
					alt="<?= html_escape($member['forename']) ?>" class="profile">
				<h2><?= html_escape($member['forename'] . ' ' . $member['surname']) ?></h2>
				<p>Member since: <br><?= format_date($member['joined']) ?></p>
			</div>
		<?php } ?>
	</body>
</html>
