<?php
// Array to hold navigation links and their respective IDs
$currentPath = basename($_SERVER['REQUEST_URI']); // Get current page
$navItems = [
    ['href' => 'index.php#home', 'label' => 'Home', 'class' => $currentPath == 'index.php' ? 'active' : ''],
    ['href' => 'index.php#collection', 'label' => 'Collection', 'class' => $currentPath == 'index.php#collection' ? 'active' : ''],
    ['href' => 'index.php#shop', 'label' => 'Shop', 'class' => $currentPath == 'index.php#shop' ? 'active' : ''],
    ['href' => 'index.php#offer', 'label' => 'Offer', 'class' => $currentPath == 'index.php#offer' ? 'active' : ''],
    ['href' => 'index.php#blog', 'label' => 'Blog', 'class' => $currentPath == 'index.php#blog' ? 'active' : '']
];
?>

<!-- MOBILE NAVBAR -->
<div class="sidebar">
    <div class="mobile-navbar" data-navbar>
        <div class="wrapper">
            <a href="#" class="logo">
                <img src="./assets/images/logo.png" width="179" height="26" alt="Glowing">
            </a>

            <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>
        </div>

        <ul class="navbar-list">
            <?php foreach ($navItems as $item): ?>
                <li>
                    <a href="<?php echo htmlspecialchars($item['href']); ?>" class="navbar-link <?php echo htmlspecialchars($item['class']); ?>" data-nav-link>
                        <?php echo htmlspecialchars($item['label']); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="overlay" data-nav-toggler data-overlay></div>
</div>
