<?php
// Definiere deine Skills und deren Level in Prozent
$skills = [
    'HTML'                              => 80,
    'CSS'                               => 70,
    'Responsive Webdesign'              => 65,
    'JavaScript (Vanilla)'              => 60,
    'PHP & MySQL'                       => 55,
    'OOP (PHP/JS)'                      => 50,
    'Git & GitHub'                      => 60,
    'Accessibility (Barrierefreiheit)'  => 50,
    'Debugging & Fehlersuche'           => 55,
    'Projekt- & Selbstmanagement'       => 65,
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