<?php
session_start();
$counter = $_SESSION['counter'] ?? 0; 
$counter = $counter + 1; 
$_SESSION['counter'] = $counter; 
$message = 'Page views: ' . $counter; 
?>
<?php include 'includes/header.php'; ?>
<h1>Welcome</h1>
	<p><?= $message ?></p>
<p><a href="sessions.php">Refresh this page</a> to see the page views increase.</p>
<p><?php echo ini_get('session.save_path'); ?></p>
<?php include 'includes/footer.php'; ?>
