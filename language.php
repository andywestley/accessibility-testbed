<?php
$pageTitle = 'Language Issues';

include 'includes/header.php';
?>


    <h1>Language Declaration Issues</h1>

    <h2>Missing Lang Attribute</h2>
    <p>The <code>html</code> tag of this page has no <code>lang</code> attribute.</p>

    <h2>Wrong Lang Code</h2>
    <p lang="xx">This paragraph has an invalid language code 'xx'.</p>

    <h2>Language Parts Change Not Marked</h2>
    <p>
        The following text is in French but is not marked up as such:
        Bonjour tout le monde. Je suis un paragraphe en français.
    </p>

    <h2>Wrong Language Marked</h2>
    <p lang="es">This text is in English but marked as Spanish.</p>

    <h2>More Unmarked Languages</h2>
    <p>
        Dies ist ein deutscher Satz ohne Sprachauszeichnung. (German)
    </p>
    <p>
        Este es un párrafo en español sin etiqueta de idioma. (Spanish)
    </p>
    <p>
        Questo è un testo in italiano. (Italian)
    </p>

    <h2>More Mixed Content</h2>
    <p>
        Welcome to our site. <span lang="fr">Bienvenue</span> users. <!-- Correct -->
        But this part in <span lang="de">English</span> is wrong. <!-- Wrong lang code for content -->
    </p>

<?php include 'includes/footer.php'; ?>