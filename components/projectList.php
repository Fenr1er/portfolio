<?php

// Define the project data
$projects = [
    'js' => [
        [
            'title'       => 'Shopando24',
            'img'         => './assets/images/project/600x400.svg',
            'description' => 'An API project to connect E-recht24 with Shopando CMS',
            'link'        => 'https://github.com/Fenr1er'
        ],
    ],
    'games' => [
        [
            'title'       => 'Dragonball Battler',
            'img'         => './assets/images/project/dragonball_game_SS.png',
            'description' => 'This is an exciting turn-based battle game inspired by the popular Dragon Ball series.',
            'link'        => 'https://github.com/Fenr1er/dragonball_game'
        ],
        [
            'title'       => 'DnD DM Helper',
            'img'         => './assets/images/project/600x400.svg',
            'description' => 'A Dungeons and Dragons DM Tool for Battles and Loot.',
            'link'        => 'https://github.com/Fenr1er?tab=repositories'
        ],
    ],
    'portfolio' => [
        [
            'title'       => 'Portfolio Code',
            'img'         => './assets/images/project/portfolio_SS.png',
            'description' => 'Get my Portfolio Code',
            'link'        => 'https://github.com/Fenr1er?tab=repositories'
        ],
    ],
    'apps' => [
        [
            'title'       => 'Finanz Tracker',
            'img'         => './assets/images/project/600x400.svg',
            'description' => 'A small app to track your finances with tips.',
            'link'        => 'https://github.com/Fenr1er/FinanzTracker'
        ],
    ],
];

// Map category keys to human-readable titles
$categories = [
    'js'        => 'JavaScript Experiments',
    'games'     => 'Game Experiments',
    'portfolio' => 'My Portfolio Code',
    'apps'      => 'App Experiments',
];

// Render each category and its projects
foreach ($categories as $key => $title) : ?>

    <section class="project-category <?= $key ?>">
        <h3><?= htmlspecialchars($title) ?></h3>
        <div class="project-grid">
            <?php foreach ($projects[$key] as $proj) : ?>
                <article class="project-card">
                    <img src="<?= htmlspecialchars($proj['img']) ?>" alt="<?= htmlspecialchars($proj['title']) ?> Screenshot">
                    <h4><?= htmlspecialchars($proj['title']) ?></h4>
                    <p><?= htmlspecialchars($proj['description']) ?></p>
                    <a href="<?= htmlspecialchars($proj['link']) ?>" target="_blank" rel="noopener">View →</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

<?php endforeach; ?>