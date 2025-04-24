<?php

$pageTitle = "About me";

include 'components/header.php';

?>

<main>
    <section class="about">
        <h1>About Me</h1>
        <p>Hi, I'm Michael del Negro – an apprentice in Application Development (Coding) from Austria. I'm passionate about full-stack web development, JavaScript, PHP, and building accessible, privacy-focused websites from the ground up.</p>
        <p>I'm not perfect, and I'm not done learning. But I show up every day with curiosity, energy, and the will to improve – step by step, error by error. This site is part of my learning journey, and I'm proud to share it with you.</p>

        <figure class="about-img">
            <img src="assets/images/profile_image2.PNG" alt="Portrait of Michael del Negro">
            <figcaption>Learning by doing – and breaking stuff along the way 😄</figcaption>
        </figure>

        <section class="learning">
            <h2>What I'm Learning</h2>

            <ul>
                <li>💻 HTML, CSS, JavaScript</li>
                <li>🐘 PHP & MySQL</li>
                <li>⚙️ Object-Oriented Programming (OOP)</li>
                <li>📦 Version Control with Git & GitHub</li>
                <li>🌐 Building responsive & accessible web interfaces</li>
            </ul>
        </section>

        <section class="vision">
            <h3>Where I Want to Go</h3>
            <p>My goal is to become a full-stack developer with a strong focus on usability, accessibility and data privacy (GDPR). I want to build tools and interfaces that not only look good but solve real problems.</p>
            <p>Eventually, I'd love to contribute to open-source projects, work in a team that supports junior developers, and keep learning every single day.</p>
        </section>

    </section>

    <aside class="fun-facts">
        <h2>Fun Facts</h2>
        <ul>
            <li>🎮 Gamer by heart – I love RPGs, horror games, and tactical strategy</li>
            <li>🐈 Proud cat dad of two adorable monsters</li>
            <li>🧠 Fascinated by psychology, paranormal stories & mysteries</li>
            <li>🧪 Favorite dev moment? When something finally works after 3 hours of debugging</li>
        </ul>
    </aside>

    <article class="call">
        <p>If you want to work with me, have advice, or just want to say hi – feel free to <a href="/contact.php">get in touch</a>. I'm always happy to connect with like-minded people.</p>
    </article>

</main>

<?php

include "components/footer.php";

?>