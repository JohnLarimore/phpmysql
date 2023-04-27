<?php
include 'includes/sessions.php'; 
if($logged_in){
	header('Location: account.php'); 
	exit; 
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$user_email = $_POST['email']; 
	$user_password = $_POST['password']; 
	if($user_email == $email and $user_password == $password){
		login(); 
		header('Location: account.php'); 
		exit; 
	}
}
?>
<?php include 'includes/header-member.php'; ?>
<h1>Login</h1>
<form method="POST" action="login.php">
	Email: <input type="email" name="email"><br>
	Password: <input type="password" name="password"></br>
	<input type="submit" value="Log In">
</form>
<?php include 'includes/footer.php'; ?>
