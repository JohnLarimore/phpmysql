<?php
$greetings = ['Hi ', 'Howdy ', 'Hello ', 'Hola ', 'Welcome ', 'Ciao ', ];
$greeting_key = array_rand($greetings); 
$greeting = $greetings[$greeting_key]; 
$bestsellers = ['notebook', 'pencil', 'ink',];
$bestsellers_count = count($bestsellers); 
$bestseller_text = implode(',', $bestsellers); 
$customer = ['forename' => 'Ivy', 'surname' => 'Stone', 'email' => 'ivy@eg.link', ];
if(array_key_exists('forename', $customer)){
	$greeting .= $customer['forename']; 
}
?>
<?php include 'includes/header.php' ?>
<p><?= $greeting ?></p>
<p>Our top <?= $bestsellers_count ?> items today are: 
	<b><?= $bestseller_text ?></b></p>
<?php include 'includes/footer.php' ?>
