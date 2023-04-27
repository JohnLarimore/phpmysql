<?php
$counter = $_COOKIE['counter'] ?? 0; 
$counter = $ounter + 1; 
setcookie('counter', $counter); 
$message = 'Page views: ' . $counter; 
?>
<?php include 'includes/header.php'; ?>
<h1>Welcome</h1>
	<p><?= $message ?></p>
<p><a href="sessions.php">Refresh this page</a> to see page views increase.</p>
<?php include 'includes/footer.php'; ?>
