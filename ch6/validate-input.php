<?php
$settings['flags'] = FILTER_FLAG_ALLOW_HEX;
$settings['options']['min_range'] = 0; 
$settings['options']['max_range'] = 225;
$number = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT, $settings); 
?>
<form action="validate-input.php" method="POST">
	Number: <input type="text" name="number" value="<?= htmlspecialchars($number) ?>">
	<input type="submit" value="Save">
</form>
<?php var_dump($number); ?>
