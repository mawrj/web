<?php
// Array to hold hero items' data
$heroItems = [
    [
        'image' => './assets/images/hero-banner-1.jpg',
        'title' => 'Reveal The <br> Beauty of Skin',
        'text' => 'Made using clean, non-toxic ingredients, our products are designed for everyone.',
        'price' => 'Starting at $7.99'
    ],
    [
        'image' => './assets/images/hero-banner-2.jpg',
        'title' => 'Reveal The <br> Beauty of Skin',
        'text' => 'Made using clean, non-toxic ingredients, our products are designed for everyone.',
        'price' => 'Starting at $7.99'
    ],
    [
        'image' => './assets/images/hero-banner-3.jpg',
        'title' => 'Reveal The <br> Beauty of Skin',
        'text' => 'Made using clean, non-toxic ingredients, our products are designed for everyone.',
        'price' => 'Starting at $7.99'
    ]
];
?>

<!-- HERO SECTION -->
<section class="section hero" id="home" aria-label="hero" data-section>
    <div class="container">
        <ul class="has-scrollbar">
            <?php foreach ($heroItems as $item): ?>
                <li class="scrollbar-item">
                    <div class="hero-card has-bg-image" style="background-image: url('<?php echo htmlspecialchars($item['image']); ?>')">
                        <div class="card-content">
                            <h1 class="h1 hero-title">
                                <?php echo $item['title']; ?>
                            </h1>
                            <p class="hero-text">
                                <?php echo $item['text']; ?>
                            </p>
                            <p class="price"><?php echo $item['price']; ?></p>
                            <a href="#" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
