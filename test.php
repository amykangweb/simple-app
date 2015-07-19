<?php
$pageTitle = "Unique T-Shirts Designed By Mike";
$section = "home";
include('header.php'); ?>
<a href="shirts.php"><h2>Hey, I'm Mike! Check out my shirts!</h2></a>

<?php include("products.php"); ?>

<ul class="list">
  <?php

    $total_products = count($products);
    $position = 0;
    $list_view_html = "";
    foreach($products as $product_id => $product) {
      $position = $position + 1;
      if($total_products - $position < 4) {
        $list_view_html = get_list_view_html($product_id, $product) .
        $list_view_html;
      }
    }
    echo $list_view_html;
  ?>
</ul>

<?php include('footer.php'); ?>
