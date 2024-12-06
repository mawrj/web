
<!-- 
  - #OFFER
-->

<section class="section offer" id="offer" aria-label="offer" data-section>
  <div class="container">

    <figure class="offer-banner">
      <img src="./assets/images/offer-banner-1.jpg" width="305" height="408" loading="lazy" alt="offer products" class="w-100">
      <img src="./assets/images/offer-banner-2.jpg" width="450" height="625" loading="lazy" alt="offer products" class="w-100">
    </figure>

    <div class="offer-content">

      <p class="offer-subtitle">
        <span class="span">Special Offer</span>
        <span class="badge" aria-label="20% off">-20%</span>
      </p>

      <h2 class="h2-large section-title">Mountain Pine Bath Oil</h2>

      <p class="section-text">
        Made using clean, non-toxic ingredients, our products are designed for everyone.
      </p>

      <div class="countdown">
        <?php
        // Array containing countdown values
        $countdown = [
            'days' => '15',
            'hours' => '21',
            'minutes' => '46',
            'seconds' => '08'
        ];
        ?>
        <?php foreach ($countdown as $unit => $value): ?>
          <span class="time" aria-label="<?php echo htmlspecialchars($unit); ?>"><?php echo htmlspecialchars($value); ?></span>
        <?php endforeach; ?>
      </div>

      <a href="#" class="btn btn-primary">Get Only $39.00</a>

    </div>

  </div>
</section>

