<?php
$color = $_COOKIE['color'] ?? null; 
$options = ['light', 'dark', ]; 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$color = $_POST['color']; 
	setcookie('color', $color, time()+60*60, '/', '', false, true); 
}
$scheme = (in_array($color, $options)) ? $color : 'dark'; 
?>
<?php include 'includes/header-style-switcher.php'; ?>
<form method="POST" action="cookie-preferences.php">
	Select color scheme: 
	<select name="color">
		<option value="dark">Dark</option>
		<option value="light">Light</option>
	</select><br>
	<input type="submit" value="Save">
</form>
<?php include 'includes/footer.php'; ?>
