# Michael del Negro's Portfolio

Welcome to my personal portfolio showcasing my journey as an Application Development Apprentice based in Austria. This site highlights my projects, skills, and continuous learning in web development.

---

## Table of Contents

1. [About This Project](#about-this-project)
2. [Installation & Setup](#installation--setup)
3. [Technologies Used](#technologies-used)
4. [Project Structure](#project-structure)
5. [Features](#features)
6. [Accessibility](#accessibility)
7. [Deployment Configuration](#deployment-configuration)
8. [Contact](#contact)
9. [License](#license)

---

## About This Project

This portfolio is part of my apprenticeship in Application Development. It is responsive, supports Dark/Light mode, and includes:

- **Home Page**: A personal introduction
- **About Page**: Information about my background, vision, and learning path
- **Projects Page**: Showcases my JavaScript, game, portfolio, and app experiments with lightbox image previews
- **Contact Page**: A form with validation, GDPR-compliant privacy acceptance, debug logging, and email notifications
- **Imprint** and **Privacy Policy** pages to ensure legal and data protection compliance

The site is built using HTML5, CSS3 (Flexbox, Grid, Custom Properties), PHP for backend processing, and Vanilla JavaScript for dynamic features.

---

## Installation & Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/Fenr1er/portfolio.git
   cd portfolio
   ```
2. **Prepare local server**
   - Install XAMPP, MAMP, or LAMP
   - Place the `portfolio` folder in your server's `htdocs` or `www` directory
   - Start Apache (and MySQL if needed)
3. **Access in browser**
   ```
   http://localhost/portfolio
   ```

> **Note:** For the contact form to send emails locally, configure `SMTP` and `smtp_port` in your `php.ini` file or remove debug logging in production.

---

## Technologies Used

- **HTML5 & CSS3** (Variables, Flexbox, Grid)
- **JetBrains Mono** font
- **PHP** for form handling and email delivery
- **JavaScript (Vanilla)** for Dark/Light mode toggle and lightbox
- **Git & GitHub** for version control

---

## Project Structure

```
portfolio/
├── assets/           # Images, fonts, CSS
│   ├── css/
│   ├── fonts/
│   └── images/
│
├── components/       # PHP partials
│   ├── header.php
│   ├── footer.php
│   ├── projectList.php
│   └── skillList.php
│
├── debug/            # Local debug logs (delete before production)
│   └── contact_log.txt
│
├── index.php         # Home page
├── about.php         # About me
├── projects.php      # Projects listing
├── contact.php       # Contact form
├── imprint.php       # Imprint/legal
└── privacypolicy.php # Privacy policy
```

---

## Features

- **Responsive Design**: Fluid layouts for all device widths
- **Dark/Light Mode**: Toggle with preference saved in `localStorage`
- **Lightbox**: Enlarged image previews with overlay
- **Accessibility**: Semantic HTML, alt texts, focus styles, WCAG-compliant contrast
- **Contact Form**: Required fields, privacy acceptance, server-side validation, debug logging, timestamped emails

---

## Accessibility

- Uses semantic elements (`<header>`, `<nav>`, `<main>`, `<footer>`, `<section>`, `<article>`)
- Provides `alt` attributes on all images
- Keyboard navigable and visible focus indicators
- Sufficient color contrast in both themes (WCAG AA)
- Properly associated form labels

---

## Deployment Configuration

Before deploying to production:

1. **Remove debug logging** section in `contact.php`
2. **Configure a real SMTP server** in `php.ini` (provided by your hosting)
3. **Delete** or remove write permissions on the `debug/` directory

---

## Contact

Feel free to reach out:

- **Email**: [michael-koller@outlook.com](mailto:michael-koller@outlook.com)
- **GitHub**: [Fenr1er](https://github.com/Fenr1er)

---

## License

This project is licensed under the **MIT License**. See [LICENSE](LICENSE) for details.
