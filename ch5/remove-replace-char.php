<?php
$text = '/images/uploads/';
?>
<?php include 'includes/header.php' ?>
<p>
	<b>Remove '/' from both ends: </b><?= trim($text, '/'); ?><br>
	<b>Remove '/' from the left of the string: </b><?= ltrim($text, '/'); ?><br>
	<b>Remove 's/' from the right of the string: </b><?= rtrim($text, 's/'); ?><br>
	<b>Replace 'images' with 'img': </b><?= str_replace('images', 'img', $text); ?><br>
	<b>As above but case insensitive: </b><?= str_ireplace('IMAGES', 'img', $text); ?><br>
	<b>Repeat the string: </b><?= str_repeat($text, 2); ?>
</p>
<?php include 'includes/footer.php' ?>
