<footer class="footer" data-section>
  <div class="container">
    <div class="footer-top">

      <!-- Company Information -->
      <ul class="footer-list">
        <li>
          <p class="footer-list-title">Company</p>
        </li>
        <li>
          <p class="footer-list-text">
            Find a location nearest you. See <a href="#" class="link">Our Stores</a>
          </p>
        </li>
        <li>
          <p class="footer-list-text bold">+62 82324302841</p>
        </li>
        <li>
          <p class="footer-list-text">mawarjuliaku@gmail.com</p>
        </li>
      </ul>

      <!-- Useful Links -->
      <ul class="footer-list">
        <li>
          <p class="footer-list-title">Useful Links</p>
        </li>
        <?php
        $usefulLinks = ['New Products', 'Best Sellers', 'Bundle & Save', 'Online Gift Card'];
        foreach ($usefulLinks as $link): ?>
          <li>
            <a href="#" class="footer-link"><?php echo htmlspecialchars($link); ?></a>
          </li>
        <?php endforeach; ?>
      </ul>

      <!-- Information Links -->
      <ul class="footer-list">
        <li>
          <p class="footer-list-title">Information</p>
        </li>
        <?php
        $infoLinks = ['Start a Return', 'Contact Us', 'Shipping FAQ', 'Terms & Conditions', 'Privacy Policy'];
        foreach ($infoLinks as $link): ?>
          <li>
            <a href="#" class="footer-link"><?php echo htmlspecialchars($link); ?></a>
          </li>
        <?php endforeach; ?>
      </ul>

      <!-- Newsletter -->
      <div class="footer-list">
        <p class="newsletter-title">Good Emails</p>
        <p class="newsletter-text">
          Enter your email below to be the first to know about new collections and product launches.
        </p>
        <form action="" method="POST" class="newsletter-form">
          <input type="email" name="email_address" placeholder="Enter your email address" required class="email-field">
          <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
      </div>

    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">

      <!-- Copyright -->
      <div class="wrapper">
        <p class="copyright">
          &copy; 2024 Your Company Name. All rights reserved.
        </p>

        <!-- Social Media Links -->
        <ul class="social-list">
          <?php
          $socialLinks = [
            ['name' => 'logo-twitter', 'url' => '#'],
            ['name' => 'logo-facebook', 'url' => '#'],
            ['name' => 'logo-instagram', 'url' => '#'],
            ['name' => 'logo-youtube', 'url' => '#']
          ];
          foreach ($socialLinks as $social): ?>
            <li>
              <a href="<?php echo htmlspecialchars($social['url']); ?>" class="social-link">
                <ion-icon name="<?php echo htmlspecialchars($social['name']); ?>"></ion-icon>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Logo -->
      <a href="#" class="logo">
        <img src="./assets/images/logo.png" width="179" height="26" alt="Glowing Logo">
      </a>

      <!-- Payment Methods -->
      <img src="./assets/images/pay.png" width="313" height="28" alt="Available Payment Methods" class="w-100">
    </div>
  </div>
</footer>

<!-- Back to Top Button -->
<a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
  <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
</a>

<!-- Scripts -->
<script src="./assets/js/script.js" defer></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
