<?php
// Definiere deine Skills und deren Level in Prozent
$skills = [
    'JavaScript'    => 45,
    'TypeScript'    => 35,
    'PHP'           => 50,
    'HTML & CSS'    => 70,
    'Git & GitHub'  => 55,
];

// Render die Skill-Bars
foreach ($skills as $skill => $percent): ?>
    <article class="skill-bar">
        <span class="skill-name"><?= htmlspecialchars($skill) ?></span>
        <div class="bar">
            <div class="fill" style="width: <?= $percent ?>%;"></div>
        </div>
        <span class="skill-percent"><?= $percent ?>%</span>
    </article>
<?php endforeach; ?>