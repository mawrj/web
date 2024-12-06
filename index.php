<?php
// Periksa apakah parameter 'product' ada di URL
if (isset($_GET['product']) && !empty($_GET['product'])) {
  // Include file details.php untuk menampilkan detail produk
  include 'details.php';
} else {
  // Halaman utama
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glowing - Reveal The Beauty of Skin</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Preload Images -->
  <link rel="preload" as="image" href="./assets/images/logo.png">
  <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-3.jpg">
</head>

<body id="top">
  <!-- Include header -->
  <?php include 'includes/header.php'; ?>

  <!-- Include other sections -->
  <?php include 'includes/mobile-navbar.php'; ?>
  <?php include 'includes/hero.php'; ?>
  <?php include 'collection.php'; ?>
  <?php include 'shop.php'; ?>
  <?php include 'banner.php'; ?>
  <?php include 'offer.php'; ?>
  <?php include 'blog.php'; ?>
  <?php include 'includes/footer.php'; ?>
</body>

</html>
<?php
}
?>
