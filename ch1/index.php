<?php
$username = 'Ivy'; 
$greeting = 'Hello, ' . $username . '.'; 
$offer = [
	'item' => 'Chocolate',
	'qty' => 5,
	'price' => 5,
	'discount' => 4,
];
$usual_price = $offer['qty'] * $offer['price']; 
$offer_price = $offer['qty'] * $offer['discount']; 
$saving = $usual_price - $offer_price; 
?>
<html>
	<head>
		<title>The Candy Store</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<h1>The Candy Store</h1>
		<h2>Multi-buy Offer</h2>
		<p><?= $greeting ?></p>
		<p class="sticker">Save $<?= $saving ?></p>
		<p>Buy <?= $offer['qty'] ?> packs of <?= $offer['item'] ?>
			for $<?= $offer_price ?> (usual price of $<?= $usual_price ?>)</p>
	</body>
</html>
