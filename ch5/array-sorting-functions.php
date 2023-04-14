<?php
$order = ['notebook', 'pencil', 'eraser',];
sort($order);
$items = implode(', ', $order);

$classes = ['Patchwork' => 'April 12th', 'Knitting' => 'May 4th', 'Lettering' => 'May 18th', ];
ksort($classes);

?>
<?php include 'includes/header.php' ?>
<h1>Order</h1>
<?= $items ?>
<h1>Classes</h1>
<?php foreach($classes as $description => $date){ ?>
	<b><?= $description ?></b> <?= $date ?><br>
<?php } ?>
<?php include 'includes/footer.php' ?>
