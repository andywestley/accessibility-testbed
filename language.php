<?php
$pageTitle = 'Language of Page & Parts';include 'includes/header.php';

$currentCriterion = [
    'rule' => 'WCAG 3.1.1 / 3.1.2',
    'name' => 'Language of Page & Parts',
    'level' => 'A',
    'citation' => 'WCAG 2.2 SC 3.1.1 & 3.1.2: The default human language of each Web page and passage can be programmatically determined via the lang attribute.',
    'trigger_summary' => 'Missing or invalid <html> lang attribute, and untagged multi-lingual foreign language phrases.'
];
include 'includes/diagnostic_header.php';
?>
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">3.1.1 Language of Page - Missing Lang Attribute</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>The <code>html</code> tag of this page has no <code>lang</code> attribute.</p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">3.1.1 Language of Page - Wrong Lang Code</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p lang="xx">This paragraph has an invalid language code 'xx'.</p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">3.1.2 Language of Parts - Language Parts Change Not Marked</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>
        The following text is in French but is not marked up as such:
        Bonjour tout le monde. Je suis un paragraphe en français.
    </p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">3.1.2 Language of Parts - Wrong Language Marked</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p lang="es">This text is in English but marked as Spanish.</p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">3.1.2 Language of Parts - More Unmarked Languages</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>
        Dies ist ein deutscher Satz ohne Sprachauszeichnung. (German)
    </p>
    <p>
        Este es un párrafo en español sin etiqueta de idioma. (Spanish)
    </p>
    <p>
        Questo è un testo in italiano. (Italian)
    </p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">3.1.2 Language of Parts - More Mixed Content</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>
        Welcome to our site. <span lang="fr">Bienvenue</span> users. <!-- Correct -->
        But this part in <span lang="de">English</span> is wrong. <!-- Wrong lang code for content -->
    </p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">AAA Violations (Reading Level & Definitions)</h2>
        <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 px-2 py-1"><i class="bi bi-info-circle-fill me-1"></i> Level AAA Trigger</span>
    </div>
    <div class="card-body">
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
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">Language of Parts (AA)</h2>
        <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-triangle-fill me-1"></i> Level AA Trigger</span>
    </div>
    <div class="card-body">
        <h3>3.1.2 Language of Parts</h3>
    <p>This paragraph contains multiple languages but lacks span tags to identify them.</p>
    <p>He said "Bonjour" and then "Guten Tag" before saying "Hello". Screen readers will read this all with the default voice accent.</p>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
