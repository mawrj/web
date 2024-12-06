<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Details - Glowing</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body id="top">
  <!-- Include header -->
  <?php include 'includes/header.php'; ?>

  <?php
  // Mock database for demonstration purposes
  $products = [
    'Facial cleanser' => [
      'image' => './assets/images/product-07.jpg',
      'alt' => 'Facial cleanser',
      'price_original' => '$39.00',
      'price_discounted' => '$29.00',
      'description' => 'A gentle yet effective facial cleanser for all skin types.',
      'reviews' => '5170 reviews'
    ],
    'Bio-shroom Rejuvenating Serum' => [
      'image' => './assets/images/product-08.jpg',
      'alt' => 'Bio-shroom Rejuvenating Serum',
      'price_original' => '',
      'price_discounted' => '$29.00',
      'description' => 'Revitalize your skin with this powerful rejuvenating serum.',
      'reviews' => '4230 reviews'
    ]
    // Add more products as needed
  ];

  // Get the product name from the URL
  $productName = isset($_GET['product']) ? $_GET['product'] : null;

  if ($productName && isset($products[$productName])) {
    $product = $products[$productName];
  ?>

<main class="product-details">
  <div class="container">
    <div class="product-wrapper">
      <div class="product-content" style="display: flex; gap: 20px;">
        <div class="product-image" style="flex: 1;">
          <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['alt']); ?>" class="img-cover">
        </div>
        <div class="product-info" style="flex: 2;">
          <h1 class="product-title"><?php echo htmlspecialchars($productName); ?></h1>
          <div class="price">
            <?php if (!empty($product['price_original'])): ?>
              <del class="del"><?php echo htmlspecialchars($product['price_original']); ?></del>
            <?php endif; ?>
            <span class="span"><?php echo htmlspecialchars($product['price_discounted']); ?></span>
          </div>
          <p class="product-description"><?php echo htmlspecialchars($product['description']); ?></p>
          <div class="card-rating">
            <div class="rating-wrapper" aria-label="5 star rating" style="display: flex; gap: 5px;">
              <ion-icon name="star" class="star-icon" aria-hidden="true"></ion-icon>
              <ion-icon name="star" class="star-icon" aria-hidden="true"></ion-icon>
              <ion-icon name="star" class="star-icon" aria-hidden="true"></ion-icon>
              <ion-icon name="star" class="star-icon" aria-hidden="true"></ion-icon>
              <ion-icon name="star" class="star-icon" aria-hidden="true"></ion-icon>
            </div>
            <p class="rating-text"><?php echo htmlspecialchars($product['reviews']); ?></p>
          </div>
          <button class="btn btn-primary">Add to Cart</button>
        </div>
      </div>
    </div>
  </main>

  <?php
  } else {
    // If the product does not exist
  ?>

  <main class="product-not-found">
    <div class="container">
      <h1>Product Not Found</h1>
      <p>Sorry, the product you are looking for does not exist. Please go back to the <a href="index.php">homepage</a>.</p>
    </div>
  </main>

  <?php } ?>

  <!-- Include footer -->
  <?php include 'includes/footer.php'; ?>

  <!-- Custom JS -->
  <script src="./assets/js/script.js" defer></script>

  <?php include 'includes/footer.php'; ?>

  <!-- Ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>