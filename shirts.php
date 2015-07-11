<?php

$products = array();
$products[101] = array(
  "name" => "Logo Shirt, Red",
  "url" => "#",
  "price" => 18
  );
$products[102] = array(
  "name" => "Mike the Frog Shirt, Black",
  "url" => "#",
  "price" => 20
  );
$products[103] = array(
  "name" => "Mike the Frog Shirt, Blue",
  "url" => "#",
  "price" => 25
  );
$products[104] = array(
  "name" => "Logo Shirt, Green",
  "url" => "#",
  "price" => 15
  );

?>
<?php
$pageTitle = "Mike's Full Catalog Shirts";
$section = "shirts";
include('header.php'); ?>

<h1>Shirts For Sale</h1>

<ul class="list">
  <?php foreach($products as $product) {
    echo"<li>";
    echo'<a href="'. $product["url"] .'">';
    echo $product["name"];
    echo"</a>";
    echo"<br>";
    echo"<strong>Price:</strong>";
    echo $product["price"];
    echo"</li>";
    } ?>
</ul>

<?php include('footer.php'); ?>
