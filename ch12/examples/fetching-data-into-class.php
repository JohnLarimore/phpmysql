<?php
require '../cms/includes/database-connection.php';
require '../cms/includes/functions.php';
require 'classes/Member.php'; 
$sql = "SELECT forename, surname FROM member WHERE id=1;";
$statement = $pdo->query($sql);
$statement->setFetchMode(PDO::FETCH_CLASS, 'Member');
$member = $statement->fetch(); 
?>
<html>
	<p><?= html_escape($member->getFullName()) ?></p>
</html>
