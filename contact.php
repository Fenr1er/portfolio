<?php

/**
 * contact.php
 * -----------
 * Displays a comprehensive contact form, validates input, logs submissions, and sends an email.
 *
 * NOTE: Remove the DEBUG LOGGING section before going live to production.
 */

$pageTitle = 'Contact';
include 'components/header.php';

// Initialize feedback and form fields
$feedback    = '';
$name        = '';
$company     = '';
$email       = '';
$phone       = '';
$message     = '';
$accepted    = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name        = trim($_POST['name'] ?? '');
    $company     = trim($_POST['company'] ?? '');
    $email       = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $phone       = trim($_POST['phone'] ?? '');
    $message     = trim($_POST['message'] ?? '');
    $accepted    = isset($_POST['privacy']);

    // Create timestamp for email and log
    $timestamp   = date('Y-m-d H:i:s');

    // Validate required inputs
    if (empty($name) || !$email || empty($message) || !$accepted) {
        $feedback = '<p class="error">Please complete all required fields and accept the privacy policy.</p>';
    } else {
        // Prevent header injection
        $cleanName    = str_replace(["\r", "\n"], '', $name);
        $cleanCompany = str_replace(["\r", "\n"], '', $company);

        // Build email subject
        $subject = "Contact Form Submission from $cleanName";
        if (!empty($cleanCompany)) {
            $subject .= ", $cleanCompany";
        }

        // Build email body including timestamp
        $body  = "Sent at: $timestamp\r\n\r\n";
        $body .= "Name: $cleanName\r\n"
            . "Company: $cleanCompany\r\n"
            . "Email: $email\r\n"
            . "Phone: $phone\r\n\r\n"
            . "Message:\r\n$message";

        // Set email headers
        $headers = "From: $cleanName <$email>\r\n"
            . "Reply-To: $email\r\n"
            . "X-Mailer: PHP/" . phpversion();

        /* ==================================================================== */
        /* DEBUG LOGGING SECTION - REMOVE BEFORE PRODUCTION */
        /* ==================================================================== */
        $logDir  = __DIR__ . '/debug';
        if (!is_dir($logDir)) {
            mkdir($logDir, 0755, true);
        }
        $logFile = $logDir . '/contact_log.txt';

        $logEntry  = "[$timestamp] Subject: $subject\n";
        $logEntry .= str_replace("\r\n", "\n", $body) . "\n";
        $logEntry .= str_repeat('-', 60) . "\n";

        file_put_contents($logFile, $logEntry, FILE_APPEND);
        /* ==================================================================== */
        /* END DEBUG LOGGING SECTION */
        /* ==================================================================== */

        // Send email
        if (mail('michael-koller@outlook.com', $subject, $body, $headers)) {
            $feedback = '<p class="success">Thank you, your message has been sent!</p>';
            // Reset form values
            $name = $company = $email = $phone = $message = '';
            $accepted = false;
        } else {
            $feedback = '<p class="error">Oops, something went wrong. Please try again later.</p>';
        }
    }
}
?>

<main id="main">
    <section class="contact-section">
        <h2>Contact Me</h2>

        <!-- === Feedback mit role="alert" für Barrierefreiheit === -->
        <?php if ($feedback): ?>
        <div
            class="<?= strpos($feedback, 'error') !== false ? 'error' : 'success' ?>"
            role="alert">
            <?= $feedback ?>
        </div>
        <?php endif; ?>
        <!-- === Ende Feedback === -->

        <form method="post" class="contact-form" novalidate>
            <label for="name">Name <span class="required">*</span></label>
            <input
                type="text"
                id="name"
                name="name"
                value="<?= htmlspecialchars($name) ?>"
                required>

            <label for="company">Company</label>
            <input
                type="text"
                id="company"
                name="company"
                value="<?= htmlspecialchars($company) ?>">

            <label for="email">Email <span class="required">*</span></label>
            <input
                type="email"
                id="email"
                name="email"
                value="<?= htmlspecialchars($email) ?>"
                required>

            <label for="phone">Phone</label>
            <input
                type="tel"
                id="phone"
                name="phone"
                value="<?= htmlspecialchars($phone) ?>">

            <label for="message">Message <span class="required">*</span></label>
            <textarea
                id="message"
                name="message"
                rows="6"
                required><?= htmlspecialchars($message) ?></textarea>

            <div class="privacy">
                <input
                    type="checkbox"
                    id="privacy"
                    name="privacy"
                    <?= $accepted ? 'checked' : '' ?>
                    required>
                <label for="privacy">
                    I have read and accept the <a href="/privacy.php">privacy policy</a>
                    <span class="required">*</span>
                </label>
            </div>

            <button type="submit">Send Message</button>
        </form>
    </section>
</main>

<?php include 'components/footer.php'; ?>