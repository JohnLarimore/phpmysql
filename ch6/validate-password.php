<?php
declare(strict_types=1);
$password='';
$message='';
function is_password(string $password):bool{
	if(
		strlen($password)>8
		and preg_match('/[A-Z]/', $password)
		and preg_match('/[a-z]/', $password)
		and preg_match('/[0-9]/', $password)
	){
		return true; 
	} else {
		return false; 
	}
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$password=$_POST['password']; 
	$valid=is_password($password);
	$message=$valid ? 'Password is valid' : 'Weak password'; 
}
?>
<?= $message ?>
<form action="validate-password.php" method="POST">
	Password: <input type="password" name="password">
	<input type="submit" value="Save">
</form>
