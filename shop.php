<section class="section shop" id="shop" aria-label="shop" data-section>
  <div class="container">
    <div class="title-wrapper">
      <h2 class="h2 section-title">Under $25</h2>
      <a href="#" class="btn-link">
        <span class="span">Shop All Products</span>
        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
      </a>
    </div>

    <ul class="has-scrollbar">
      <?php
      // Array untuk produk
      $products = [
          [
              'image' => './assets/images/product-07.jpg',
              'alt' => 'Facial cleanser',
              'price_original' => '$39.00',
              'price_discounted' => '$29.00',
              'title' => 'Facial cleanser',
              'reviews' => '5170 reviews',
              'badge' => '-20%'
          ],
          [
              'image' => './assets/images/product-08.jpg',
              'alt' => 'Bio-shroom Rejuvenating Serum',
              'price_discounted' => '$29.00',
              'title' => 'Bio-shroom Rejuvenating Serum',
              'reviews' => '5170 reviews'
          ],
          [
              'image' => './assets/images/product-09.jpg',
              'alt' => 'Coffee Bean Caffeine Eye Cream',
              'price_discounted' => '$29.00',
              'title' => 'Coffee Bean Caffeine Eye Cream',
              'reviews' => '5170 reviews'
          ],
          [
              'image' => './assets/images/product-10.jpg',
              'alt' => 'Facial cleanser',
              'price_discounted' => '$29.00',
              'title' => 'Facial cleanser',
              'reviews' => '5170 reviews'
          ],
          [
              'image' => './assets/images/product-11.jpg',
              'alt' => 'Coffee Bean Caffeine Eye Cream',
              'price_original' => '$39.00',
              'price_discounted' => '$29.00',
              'title' => 'Coffee Bean Caffeine Eye Cream',
              'reviews' => '5170 reviews',
              'badge' => '-20%'
          ]
      ];

      // Loop untuk menampilkan produk
      foreach ($products as $product): ?>
        <li class="scrollbar-item">
          <div class="shop-card">
            <div class="card-banner img-holder" style="--width: 540; --height: 720;">
              <a href="details.php?product=<?php echo urlencode($product['title']); ?>">
                <img src="<?php echo htmlspecialchars($product['image']); ?>" width="540" height="720" loading="lazy" alt="<?php echo htmlspecialchars($product['alt']); ?>" class="img-cover">
              </a>
              <?php if (isset($product['badge'])): ?>
                <span class="badge" aria-label="<?php echo htmlspecialchars($product['badge']); ?>"><?php echo htmlspecialchars($product['badge']); ?></span>
              <?php endif; ?>
              <div class="card-actions">
                <button class="action-btn" aria-label="add to cart">
                  <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                </button>
                <button class="action-btn" aria-label="add to whishlist">
                  <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                </button>
                <button class="action-btn" aria-label="compare">
                  <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                </button>
              </div>
            </div>
            <div class="card-content">
              <div class="price">
                <?php if (isset($product['price_original'])): ?>
                  <del class="del"><?php echo htmlspecialchars($product['price_original']); ?></del>
                <?php endif; ?>
                <span class="span"><?php echo htmlspecialchars($product['price_discounted']); ?></span>
              </div>
              <h3>
                <a href="details.php?product=<?php echo urlencode($product['title']); ?>" class="card-title"><?php echo htmlspecialchars($product['title']); ?></a>
              </h3>
              <div class="card-rating">
                <div class="rating-wrapper" aria-label="5 star rating">
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                  <ion-icon name="star" aria-hidden="true"></ion-icon>
                </div>
                <p class="rating-text"><?php echo htmlspecialchars($product['reviews']); ?></p>
              </div>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
