<?php
$form['email'] = '';
$form['age'] = ''; 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$filters['email'] = FILTER_VALIDATE_EMAIL; 
	$filters['age']['filter'] = FILTER_VALIDATE_INT; 
	$filters['age']['options']['min_range'] = 16; 
	$form = filter_input_array(INPUT_POST, $filters); 
}
?>
<form action="validate-multiple-inputs.php" method="POST">
	Email: <input type="text" name="email" value="<?= htmlspecialchars($form['email']) ?>">
	Age: <input type="text" name="age" value="<?= htmlspecialchars($form['age']) ?>">
	I agree to terms and conditions: <input type="checkbox" name="terms" value="1"><br>
	<input type="submit" value="Save">
</form>
<pre><?php var_dump($form); ?></pre>

