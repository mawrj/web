

<!-- 
  - #BANNER
-->

<section class="section banner" aria-label="banner" data-section>
  <div class="container">

    <ul class="banner-list">
      <?php
      // Array untuk banner
      $banners = [
          [
              'subtitle' => 'New Collection',
              'title' => 'Discover Our Autumn Skincare',
              'button_text' => 'Explore More',
              'image' => './assets/images/banner-1.jpg'
          ],
          [
              'title' => '25% off Everything',
              'text' => 'Makeup with extended range in colors for every human.',
              'button_text' => 'Shop Sale',
              'image' => './assets/images/banner-2.jpg'
          ]
      ];

      // Loop untuk menampilkan banner
      foreach ($banners as $banner): ?>
        <li>
          <div class="banner-card has-before hover:shine">
            <?php if (isset($banner['subtitle'])): ?>
              <p class="card-subtitle"><?php echo htmlspecialchars($banner['subtitle']); ?></p>
            <?php endif; ?>

            <h2 class="h2 card-title"><?php echo htmlspecialchars($banner['title']); ?></h2>

            <?php if (isset($banner['text'])): ?>
              <p class="card-text"><?php echo htmlspecialchars($banner['text']); ?></p>
            <?php endif; ?>

            <a href="#" class="btn btn-secondary"><?php echo htmlspecialchars($banner['button_text']); ?></a>

            <div class="has-bg-image" style="background-image: url('<?php echo htmlspecialchars($banner['image']); ?>')"></div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>

  </div>
</section>

<!-- 
  - #FEATURE
-->

<section class="section feature" aria-label="feature" data-section>
  <div class="container">

    <h2 class="h2-large section-title">Why Shop with Glowing?</h2>

    <ul class="flex-list">
      <?php
      // Array untuk fitur
      $features = [
          [
              'icon' => './assets/images/feature-1.jpg',
              'title' => 'Guaranteed PURE',
              'text' => 'All Grace formulations adhere to strict purity standards and will never contain harsh or toxic ingredients.'
          ],
          [
              'icon' => './assets/images/feature-2.jpg',
              'title' => 'Completely Cruelty-Free',
              'text' => 'All Grace formulations adhere to strict purity standards and will never contain harsh or toxic ingredients.'
          ],
          [
              'icon' => './assets/images/feature-3.jpg',
              'title' => 'Ingredient Sourcing',
              'text' => 'All Grace formulations adhere to strict purity standards and will never contain harsh or toxic ingredients.'
          ]
      ];

      // Loop untuk menampilkan fitur
      foreach ($features as $feature): ?>
        <li class="flex-item">
          <div class="feature-card">
            <img src="<?php echo htmlspecialchars($feature['icon']); ?>" width="204" height="236" loading="lazy" alt="<?php echo htmlspecialchars($feature['title']); ?>" class="card-icon">
            <h3 class="h3 card-title"><?php echo htmlspecialchars($feature['title']); ?></h3>
            <p class="card-text"><?php echo htmlspecialchars($feature['text']); ?></p>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>

  </div>
</section>
