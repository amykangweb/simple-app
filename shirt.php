<?php include('products.php');

if (isset($_GET["id"])) {
  $product_id = $_GET["id"];
  if (isset($products[$product_id])) {
    $product = $products[$product_id];
  }
}

if(!isset($product)) {
  header("Location: shirts.php");
  exit();
}

$section = "shirts";
$pageTitle = $product["name"];

include('header.php'); ?>

<h1><?php echo $product["name"] ?></h1>

<strong>price:</strong> <?php echo "$" . $product["price"] ?>

<?php include('footer.php'); ?>
