<?php
// Array to hold collection data
$collections = [
    [
        'title' => 'Summer Collection',
        'description' => 'Starting at $17.99',
        'button_text' => 'Shop Now',
        'image' => './assets/images/collection-1.jpg'
    ],
    [
        'title' => 'What’s New?',
        'description' => 'Get the glow',
        'button_text' => 'Discover Now',
        'image' => './assets/images/collection-2.jpg'
    ],
    [
        'title' => 'Buy 1 Get 1',
        'description' => 'Starting at $7.99',
        'button_text' => 'Discover Now',
        'image' => './assets/images/collection-3.jpg'
    ]
];
?>

<section class="section collection" id="collection" aria-label="collection" data-section>
    <div class="container">
        <ul class="collection-list">
            <?php foreach ($collections as $collection): ?>
                <li>
                    <div class="collection-card has-before hover:shine">
                        <h2 class="h2 card-title"><?php echo htmlspecialchars($collection['title']); ?></h2>
                        <p class="card-text"><?php echo htmlspecialchars($collection['description']); ?></p>
                        <a href="#" class="btn-link">
                            <span class="span"><?php echo htmlspecialchars($collection['button_text']); ?></span>
                            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                        </a>
                        <div class="has-bg-image" style="background-image: url('<?php echo htmlspecialchars($collection['image']); ?>')"></div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
