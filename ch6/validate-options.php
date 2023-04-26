<?php
$stars='';
$message='';
$star_ratings = [1,2,3,4,5,'shit',]; 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$stars=$_POST['stars'] ?? ''; 
	//var_dump($stars); 
	$valid=in_array($stars, $star_ratings);
	$message=$valid ? 'Thank you' : 'Select an option'; 
}
?>
<?= $message ?>
<form action="validate-options.php" method="POST">
	Star rating: 
	<?php foreach($star_ratings as $option){ ?>
		<?= $option ?><input type="radio" name="stars"
			value="<?= $option ?>"
			<?= ($stars == $option) ? 'checked' : '' ?>>	
	<?php } ?>
	<input type="submit" value="Save">
</form>
