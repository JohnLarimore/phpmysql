<?php
$order = ['notebook', 'pencil', 'eraser',];
array_unshift($order, 'scissors');
array_pop($order);
$items = implode(', ', $order);

$classes = ['Patchwork' => 'April 12th', 'Knitting' => 'May 4th', 'Lettering' => 'May 18th', ];
array_shift($classes);
$new = ['Origami' => 'June 5th', 'Quilting' => 'June 23rd', ]; 
$classes = array_merge($classes, $new); 
?>
<?php include 'includes/header.php' ?>
<h1>Order</h1>
<?= $items ?>
<h1>Classes</h1>
<?php foreach($classes as $description => $date){ ?>
	<b><?= $description ?></b> <?= $date ?><br>
<?php } ?>
<?php include 'includes/footer.php' ?>
