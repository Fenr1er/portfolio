<?php

/**
 * imprint.php
 * -----------
 * Legal notice (Impressum) page for Michael del Negro's portfolio.
 */

$pageTitle = 'Imprint';
include 'components/header.php';
?>

<main class="imprint">
    <section>
        <h1>Imprint</h1>
        <p><strong>Effective as of:</strong> <?= date('F j, Y') ?></p>
    </section>

    <section>
        <h2>1. Provider Identification</h2>
        <p>
            Michael del Negro<br>
            Mureckerstraße 30<br>
            A‑8083 Sankt Stefan im Rosental<br>
            Austria
        </p>
    </section>

    <section>
        <h2>2. Contact Information</h2>
        <p>
            Phone: <a href="tel:+436641639128">+43 664 1639128</a><br>
            Email: <a href="mailto:michael-koller@outlook.com">michael-koller@outlook.com</a>
        </p>
    </section>

    <section>
        <h2>3. Commercial Register</h2>
        <p>Not applicable.</p>
    </section>

    <section>
        <h2>4. VAT Identification Number</h2>
        <p>Not applicable.</p>
    </section>

    <section>
        <h2>5. Liability for Content</h2>
        <p>
            As the service provider, I am responsible for my own content on this site under
            the general laws. However, I am not obliged to monitor transmitted or stored
            third-party information or to research circumstances indicating illegal activity.
        </p>
        <p>
            Obligations to remove or block the use of information under general laws
            remain unaffected. Any liability in this respect is, however, only incurred
            from the moment of knowledge of a specific infringement.
        </p>
    </section>

    <section>
        <h2>6. Liability for Links</h2>
        <p>
            My offer contains links to external websites of third parties on whose contents
            I have no influence. Therefore, I cannot assume any liability for these external
            contents. The respective provider or operator of the pages is always responsible
            for the contents of the linked pages.
        </p>
        <p>
            The linked pages were checked for possible legal violations at the time of linking.
            Illegal contents were not recognizable at the time of linking. A permanent control
            of the contents of the linked pages is, however, not reasonable without concrete
            evidence of a violation of the law. If I become aware of any infringements, I will
            remove such links immediately.
        </p>
    </section>

    <section>
        <h2>7. Copyright</h2>
        <p>
            The content and works on these pages created by the site operators are subject to
            Austrian copyright law. The duplication, processing, distribution, or any form of
            commercialization of such material beyond the scope of the copyright law shall
            require the prior written consent of its respective author or creator.
        </p>
    </section>

    <section>
        <h2>8. Online Dispute Resolution</h2>
        <p>
            The European Commission provides a platform for online dispute resolution
            (ODR): <a href="https://ec.europa.eu/consumers/odr/" target="_blank" rel="noopener">
                https://ec.europa.eu/consumers/odr/
            </a>
        </p>
        <p>
            I am neither willing nor obliged to participate in dispute resolution proceedings
            before a consumer arbitration board.
        </p>
    </section>
</main>

<?php include 'components/footer.php'; ?>