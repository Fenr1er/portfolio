<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Official portfolio of Michael del Negro – apprentice in application development (coding). Passionate about modern, privacy-compliant web development using JavaScript, PHP and accessibility-first design. Follow the journey.">
    <link rel="stylesheet" href="css\style.css">
    <title><?= isset($pageTitle) ? $pageTitle . " | Portfolio Michael del Negro" : "Portfolio Michael del Negro" ?></title>
</head>

<body>
    <!-- Skip to content für Screenreader & Tastatur -->
    <a class="skip-link" href="#main">Skip to main content</a>

    <nav class="nav-main" role="navigation" aria-label="Main Navigation">
        <div class="nav-logo">
            <img src="assets\images\MdN_Logo.png" alt="Michael del Negros Portfolio Logo">
        </div>
        <div class="nav-links">
            <a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) === 'index.php' ? 'active' : '' ?>">Home</a>
            <a href="about.php" class="<?= basename($_SERVER['PHP_SELF']) === 'about.php' ? 'active' : '' ?>">About Me</a>
            <a href="project.php" class="<?= basename($_SERVER['PHP_SELF']) === 'project.php' ? 'active' : '' ?>">Projects</a>
            <a href="contact.php" class="<?= basename($_SERVER['PHP_SELF']) === 'contact.php' ? 'active' : '' ?>">Contact</a>
        </div>
        <div class="mode-switch">
            <button name="modebtn" aria-label="Toggle light / dark mode" id="modebtn"></button>
        </div>
    </nav>