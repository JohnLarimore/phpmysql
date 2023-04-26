<?php
$terms = ''; 
$message = ''; 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$terms=(isset($_POST['terms']) and $_POST['terms'] == true) ? true : false; 
	$message=$terms ? 'Thank you' : 'You must respect my authority'; 
}
?>
<?= $message ?>
<form action="validate-checkbox.php" method="POST">
	I agree to terms and conditions: <input type="checkbox" name="terms" value="true"
		<?= $terms ? 'checked' : '' ?>>
	<input type="submit" value="Save">
</form>
