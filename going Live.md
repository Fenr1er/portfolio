# ----------------------------------------------------------------------------

# contact.php

# ----------------------------------------------------------------------------

´´´php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Autoloader (via Composer)
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
// SMTP-Konfiguration
$mail->isSMTP();
$mail->Host = 'smtp.deinprovider.com';
$mail->SMTPAuth = true;
$mail->Username = 'user@deinedomain.tld';
$mail->Password = 'DEIN-PASSWORT';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

    // Absender / Empfänger
    $mail->setFrom("$cleanName <$email>");
    $mail->addAddress('michael-koller@outlook.com');

    // Inhalt
    $mail->Subject = $subject;
    $mail->Body    = $body;

    $mail->send();
    $feedback = '<p class="success">Thank you, your message has been sent!</p>';

} catch (Exception $e) {
$feedback = '<p class="error">Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '</p>';
}
´´´

Führe composer require phpmailer/phpmailer im Projektordner aus.

Ersetze deinen mail()-Block durch obigen PHPMailer-Block.

Kurz-Checkliste für “Live”:
🔥 Entferne den gesamten Debug-Logging-Bereich.

🔒 Stelle sicher, dass display_errors auf Off steht in der Live-php.ini, und nutze error_log statt Anzeige.

📧 Teste auf dem Live-Server, ob mail() funktioniert. Wenn nicht, konfiguriere SMTP (siehe oben) oder nutze PHPMailer.

✅ Veröffentlichen – fertig!

So bleibt dein Code sauber und deine Besucher bekommen reibungslos Kontakt-Mails.

# ----------------------------------------------------------------------------

# -----

# ----------------------------------------------------------------------------

1. Code & Debugging
   Entferne alle Debug-Logs (z. B. file_put_contents im Kontaktformular).

Setze display_errors = Off und logge Fehler in eine Datei (error_log) in der Produktiv-php.ini.

Deaktiviere alle Entwicklungs-Tools (Xdebug, var_dump(), Dump-Keys etc.).

2. Sicherheit
   Validiere und desinfiziere weiterhin alle Nutzereingaben (schon erledigt).

Schütze deine components/-Ordner per .htaccess oder Web-Server-Config, sodass sie nicht direkt browsbar sind.

Verwende HTTPS: Lade ein SSL-Zertifikat (Let’s Encrypt o. Ä.) und erzwinge per Redirect.

Header-Security: Setze HSTS, X-Frame-Options, Content-Security-Policy, X-Content-Type-Options via Web-Server.

3. Performance
   Minify CSS/JS und kombiniere Dateien, um Requests zu reduzieren.

Bilder optimieren: WebP, responsive srcset und Lazy-Loading.

Cache-Control: Statische Assets (CSS/JS/Bilder) mit langen max-age, JSON-Manifeste oder Service-Workers.

Optional: CDN für Assets.

4. SEO & Analytics
   Meta-Tags: <title>, <meta name="description">, Open Graph, Twitter Cards.

Sitemap (sitemap.xml) generieren und in der Google Search Console einreichen.

robots.txt prüfen (kein Disallow: /).

Google Analytics oder Privacy-friendly Analytics (z. B. Plausible) einbinden.

Canonical Tags auf Mehrfach-URLs setzen.

5. Datenschutz & Rechtliches
   Impressum und Datenschutzerklärung verlinken (bereits vorhanden).

Cookie-Banner oder Consent-Manager, wenn du Tracking nutzt.

Beim Kontaktformular auf DSGVO-Konformität achten (E-Mails verschlüsseln, Logs nur temporär, kein unnötiges Speichern).

6. Deployment & Server
   Datei- und Verzeichnis-Rechte: PHP-Dateien 644, Verzeichnisse 755.

Umgebungsvariablen für sensible Daten (E-Mail-Credentials) statt hardcodierter Passwörter.

Automatisierte Backups (Datenbank, uploads, code).

Monitoring & Uptime-Checks (z. B. UptimeRobot).

Fallback-404-Seite konfigurieren.

7. Testing & Go-Live
   Teste auf Staging, nicht direkt auf Production.

Cross-Browser-Tests (Chrome, Firefox, Edge, Safari) und Responsiveness prüfen (DevTools, BrowserStack).

Formular-Tests: tatsächliches Abschicken, E-Mail-Empfang, Spam-Filter-Verhalten.

Letzter Check: Broken Links (z. B. mit Screaming Frog).
