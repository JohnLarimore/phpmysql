<?php
declare(strict_types=1);
$username=''; 
$message='';

function is_text($text, int $min=0, int $max=1000):bool{
	$length = strlen($text); 
	return ($length >= $min and $length <= $max); 
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username']; 
	$valid = is_text($username, 3, 18); 
	//var_dump($valid);
	if($valid){
		$message="Username is valid"; 
	} else {
		$message="Username must be 3-18 characters"; 
	}
}
?>
<?= $message ?>
<form action="validate-text-length.php" method="POST">
	Username: <input type="text" name="username"
		value="<?= htmlspecialchars($username) ?>">
	<input type="submit" value="Save">
</form>
