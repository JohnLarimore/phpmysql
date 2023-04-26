<?php
$form['email'] = ''; 
$form['age'] = ''; 
$form['terms'] = 0; 
$data = []; 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$filters['email'] = FILTER_VALIDATE_EMAIL; 
	$filters['age']['filter'] = FILTER_VALIDATE_INT;
	$filters['age']['options']['min_range'] = 16; 
	$filters['terms'] = FILTER_VALIDATE_BOOLEAN; 
	$form = filter_input_array(INPUT_POST); 
	$data = filter_var_array($form, $filters); 
}
?>
<form action="validate-variables.php" method="POST">
	Email: <input type="text" name="email" value="<?= htmlspecialchars($form['email']) ?>">
	Age: <input type="text" name="age" value="<?= htmlspecialchars($form['age']) ?>"><br>
	I agree to terms and conditions: <input type="checkbox" name="terms" "value=1"><br>
	<input type="submit" value="Save">
</form>
<pre><?php var_dump($data); ?></pre>
