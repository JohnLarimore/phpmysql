<?php
declare(strict_types = 1);
require 'includes/validate.php'; 

$user = [
	'name' => '',
	'age' => '',
	'terms' => '',
];
$errors = [
	'name' => '',
	'age' => '', 
	'terms' => '',
];
$message = ''; 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$user['name'] = $_POST['name'];
	$user['age'] = $_POST['age'];
	$user['terms'] = (isset($_POST['terms']) and $_POST['terms'] == true) ? true : false; 
	$errors['name'] = is_text($user['name'], 2, 20) ? '' : 'Must be 2-20 characters'; 
	$errors['age'] = is_number($user['age'], 16, 65) ? '' : 'You must be 16-65';
	$errors['terms'] = $user['terms'] ? '' : "Agree to terms and conditions or die"; 
	$invalid = implode($errors); 
	//var_dump($invalid); 
	if($invalid){
		$message = 'Please correct the following: '; 
	} else {
		$message = 'Your data is valid'; 
	}
}
?>
<?= $message ?>
<form action="validate-form.php" method="POST">
	Name: <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>">
	<span class="error"><?= $errors['name'] ?></span><br>
	Age: <input type="text" name="age" value="<?= htmlspecialchars($user['age']) ?>">
	<span class="error"><?= $errors['age'] ?></span><br>
	<input type="checkbox" name="terms" value="true" <?= $user['terms'] ? 'checked' : '' ?>>
		I agree to terms and conditions
	<span class="error"><?= $errors['terms'] ?></span><br>
	<input type='submit' value="Save">
</form>
