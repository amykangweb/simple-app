<!DOCTYPE html>
<html>
<head>
  <title><?php echo $pageTitle; ?></title>
  <link rel="stylesheet" type="text/css" href="site.css">
</head>
<body>
  <h1>Shirts 4 Mike</h1>

  <ul>
    <li class="home <?php if($section == "home"){ echo "on"; } ?>"><a href="test.php">Home</a></li>
    <li class="shirts <?php if($section == "shirts"){ echo "on"; } ?>"><a href="shirts.php">Shirts</a></li>
    <li class="contact <?php if($section == "contact"){ echo "on"; } ?>"><a href="contact.php">Contact</a></li>
  </ul>
