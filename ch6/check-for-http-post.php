<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$term=$_POST['term']; 
		echo 'You searched for ' . htmlspecialchars($term); 
	} else { ?>
	<form action="check-for-http-post.php" method="POST">
		Search for: <input type="text" name="term">
		<input type="submit" value="search">
	</form>
<?php } ?>
