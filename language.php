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

    <h2>AAA Violations (Reading Level & Definitions)</h2>
    
    <h3>3.1.3 Unusual Words (No Definition)</h3>
    <p>The <strong>interregnum</strong> period was characterized by significant <strong>obfuscation</strong> of the <strong>zeitgeist</strong>.</p>

    <h3>3.1.4 Abbreviations (No Expansion)</h3>
    <p>We strictly follow <abbr>WCAG</abbr> and <abbr>ARIA</abbr> guidelines, but we never explain what they mean.</p>
    <p>Please refer to the SOP for more details on the KPI requirements.</p>

    <h3>3.1.5 Reading Level (Advanced)</h3>
    <p>
        The ontological status of the transcendental ego cannot be deduced from a purely empirical analysis of the phenomenological reduction, 
        necessitating a dialectical approach to the synthesis of the apriori manifolds of space and time.
    </p>

    <h3>3.1.6 Pronunciation (AAA)</h3>
    <p>Certain words are ambiguous without pronunciation context, but no guide is provided.</p>
    <p>
        "I will <strong>resume</strong> my work on the <strong>resume</strong>."
        <br>
        (No semantic indication of how to pronounce 'resume' differently in these two contexts).
    </p>

    <h2>Language of Parts (AA)</h2>
    <h3>3.1.2 Language of Parts</h3>
    <p>This paragraph contains multiple languages but lacks span tags to identify them.</p>
    <p>He said "Bonjour" and then "Guten Tag" before saying "Hello". Screen readers will read this all with the default voice accent.</p>

<?php include 'includes/footer.php'; ?>