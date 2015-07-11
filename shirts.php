<?php

$products = array(
  "Logo Shirt, Red",
  "Mike the Frog Shirt, Black",
  "Mike the Frog Shirt, Blue"
);

?>
<?php
$pageTitle = "Mike's Full Catalog Shirts";
$section = "shirts";
include('header.php'); ?>

<h1>Shirts For Sale</h1>

<ul>
  <?php foreach($products as $product) { ?>
    <li><?php echo $product ?></li>
  <?php } ?>
</ul>

<?php include('footer.php'); ?>
