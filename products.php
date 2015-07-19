<?php

function get_list_view_html($product_id, $product) {

  $output = "";

  $output = $output . "<li>";
  $output = $output . '<a href="shirt.php?id='. $product_id .'">';
  $output = $output . $product["name"];
  $output = $output . "</a>";
  $output = $output . "<br>";
  $output = $output . "<strong>Price:</strong>";
  $output = $output . $product["price"];
  $output = $output . "</li>";

  return $output;
}

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
$products[105] = array(
  "name" => "Logo Shirt, Purple",
  "url" => "#",
  "price" => 20
);
?>
