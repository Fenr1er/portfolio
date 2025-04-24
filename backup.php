/* ------------------------------ projects.php ------------------------------ */

<section class="projects">

    <h2>My Projects</h2>
    <section class="project-category js">
        <h3>JavaScript Experiments</h3>
        <div class="project-grid">
            <?php foreach ($projects['js'] as $proj) : ?>
                <article class="project-card">
                    <img src="<?= $proj['img'] ?>" alt="<?= htmlspecialchars($proj['title']) ?> Screenshot">
                    <h4><?= htmlspecialchars($proj['title']) ?></h4>
                    <p><?= htmlspecialchars($proj['description']) ?></p>
                    <a href="<?= $proj['link'] ?>">View</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="project-category games">
        <h3>Game Experiments</h3>
        <div class="project-grid">
            <?php foreach ($projecs['games'] as $proj) : ?>
                <article class="project-card">
                    <img src="<?= $proj['img'] ?>" alt="<?= htmlspecialchars($proj['title']) ?> Screenshot">
                    <h4><?= htmlspecialchars($proj['title']) ?></h4>
                    <p><?= htmlspecialchars($proj['description']) ?></p>
                    <a href="<?= $proj['link'] ?>">View</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="project-category portfolio">
        <h3>My Portfolio Code</h3>
        <div class="project-grid">
            <?php foreach ($projects['portfolio'] as $proj) : ?>
                <article class="project-card">
                    <img src="<?= $proj['img'] ?>" alt="<?= htmlspecialchars($proj['title']) ?> Screenshot">
                    <h4><?= htmlspecialchars($proj['title']) ?></h4>
                    <p><?= htmlspecialchars($proj['description']) ?></p>
                    <a href="<?= $proj['link'] ?>">View</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="project-category apps">
        <h3>App Experiments</h3>
        <div class="project-grid">
            <?php foreach ($projects['apps'] as $proj) : ?>
                <article class="project-card">
                    <img src="<?= $proj['img'] ?>" alt="<?= htmlspecialchars($proj['title']) ?> Screenshot">
                    <h4><?= htmlspecialchars($proj['title']) ?></h4>
                    <p><?= htmlspecialchars($proj['description']) ?></p>
                    <a href="<?= $proj['link'] ?>">View</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</section>