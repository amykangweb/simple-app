<?php include('products.php'); ?>
<?php
$pageTitle = "Mike's Full Catalog Shirts";
$section = "shirts";
include('header.php'); ?>

<h1>Shirts For Sale</h1>

<ul class="list">
  <?php foreach($products as $product_id => $product) {
    echo get_list_view_html($product_id, $product);
    } ?>
</ul>

<?php include('footer.php'); ?>
