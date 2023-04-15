<a class="badlink" href="xss-1.php?msg=<script src=js/bad.js></script>">LINK TODEMO XSS</a>
<?php 
$message = $_GET['msg'] ?? 'Click link at top of page'; 
?>
<?php include 'includes/header.php' ?>
<h1>XSS Example</h1>
<p><? = $message ?></p>
<?php include 'includes/footer.php'; ?>
