<?php

/**
 * privacypolicy.php
 * -----------------
 * GDPR-compliant privacy policy page for Michael del Negro's portfolio.
 */

$pageTitle = 'Privacy Policy';
include 'components/header.php';
?>

<main class="privacy-policy">
    <section>
        <h1>Privacy Policy</h1>
        <p>Effective date: <?= date('F j, Y') ?></p>
    </section>

    <section>
        <h2>1. Who We Are</h2>
        <p>Michael del Negro ("we", "us" or "our") operates <strong>this portfolio website</strong> to showcase projects and allow visitors to contact me. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website.</p>
    </section>

    <section>
        <h2>2. Data We Collect</h2>
        <h3>a. Contact Form</h3>
        <ul>
            <li><strong>Name</strong></li>
            <li><strong>Company</strong> (optional)</li>
            <li><strong>Email address</strong></li>
            <li><strong>Phone number</strong> (optional)</li>
            <li><strong>Message</strong></li>
            <li><strong>Consent to Privacy Policy</strong></li>
        </ul>
        <p>All data is voluntarily provided to respond to your inquiry. We retain contact form submissions for up to 1 year for record-keeping and legal compliance.</p>

        <h3>b. Log Data</h3>
        <p>When you access the website, we automatically collect certain information including your IP address, browser type, operating system, referring URLs, and pages visited. This helps us improve our site and analyze traffic.</p>

        <h3>c. Cookies & Tracking</h3>
        <p>We use minimal cookies for theme preference (light/dark mode). No third-party tracking scripts are used. You can disable cookies in your browser, but some features may not function properly.</p>

        <h3>d. Analytics</h3>
        <p>We may use a privacy-friendly analytics service (e.g., Plausible) that does not collect personal data. No Google Analytics or similar is implemented.</p>
    </section>

    <section>
        <h2>3. How We Use Your Data</h2>
        <ul>
            <li>To respond to your inquiries via the contact form.</li>
            <li>To improve and maintain our website.</li>
            <li>To comply with legal obligations.</li>
        </ul>
    </section>

    <section>
        <h2>4. Legal Basis</h2>
        <p>Under the GDPR, our legal basis for collecting and using your personal data is your consent (Article 6(1)(a)) and our legitimate interest in operating and improving the website (Article 6(1)(f)).</p>
    </section>

    <section>
        <h2>5. Your Rights</h2>
        <ul>
            <li><strong>Access:</strong> You have the right to request a copy of the personal data we hold about you.</li>
            <li><strong>Rectification:</strong> You can ask us to correct inaccurate or incomplete data.</li>
            <li><strong>Erasure:</strong> You may request deletion of your personal data when it is no longer needed.</li>
            <li><strong>Restriction:</strong> You can request restriction of processing under certain circumstances.</li>
            <li><strong>Objection:</strong> You have the right to object to our processing of your data.</li>
            <li><strong>Data portability:</strong> You may request transfer of your data to another controller.</li>
        </ul>
        <p>To exercise any of these rights, please <a href="contact.php">contact us</a>.</p>
    </section>

    <section>
        <h2>6. Data Security</h2>
        <p>We implement appropriate technical and organizational measures to protect your personal data. However, please be aware that no internet transmission is completely secure.</p>
    </section>

    <section>
        <h2>7. Changes to This Privacy Policy</h2>
        <p>We may update this policy occasionally. Changes will be posted here with an updated effective date.</p>
    </section>

    <section>
        <h2>8. Contact Information</h2>
        <p>If you have questions or concerns about this policy, you can reach us at:</p>
        <address>
            Michael del Negro<br>
            Mureckerstraße 30<br>
            A-8083 Sankt Stefan im Rosental<br>
            Email: <a href="mailto:michael-koller@outlook.com">michael-koller@outlook.com</a>
        </address>
    </section>
</main>

<?php include 'components/footer.php'; ?>