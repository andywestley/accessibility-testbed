<?php
$pageTitle = 'HTML Parsing & Duplicate IDs';
$extraStyles = '<style>
        

        

        .error {
            color: red;
        }
    </style>';
include 'includes/header.php';

$currentCriterion = [
    'rule' => 'WCAG 4.1.1',
    'name' => 'HTML Parsing & Duplicate IDs',
    'level' => 'A',
    'citation' => 'WCAG 2.2 SC 4.1.1: Elements have complete start and end tags, elements are nested according to specification, and IDs are unique.',
    'trigger_summary' => 'Duplicate DOM IDs in form elements, unclosed structural tags, and invalid nesting.'
];
include 'includes/diagnostic_header.php';
?>
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.1 Parsing (Obsolete) - Duplicate IDs</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <div id="duplicate">First div with id 'duplicate'</div>
    <div id="duplicate">Second div with id 'duplicate'</div>
    <button id="duplicate">Button with id 'duplicate'</button>
    <span id="duplicate">Span with id 'duplicate'</span>
    <input id="duplicate" value="Input duplicate">
    <a href="#" id="duplicate">Link duplicate</a>
    <img src="#" id="duplicate" alt="Img duplicate">
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">Heading duplicate</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p id="duplicate">Paragraph duplicate</p>
    <div id="duplicate">Another div duplicate</div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.1 Parsing (Obsolete) - Unclosed Tags</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>This paragraph is not closed properly
    <div>And here is a div</div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.1 Parsing (Obsolete) - Improper Nesting</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>Paragraph start
    <div>Div inside paragraph (invalid)</div> Paragraph end.</p>
    <b>Bold start <i>Italic inside</b> Italic end (overlapping tags)</i>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.1 Parsing (Obsolete) - Attribute Errors</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <input type="text" disabled="disabled="> <!-- Malformed value -->
    <img src="foo.jpg" alt="foo" width="100" height="100" />
    <!-- Self closing slash on non-void element in HTML5 usually ignored but sometimes flagged depending on doctype strictness, though valid in HTML5. Let's try explicit deprecated attributes -->
    <div align="center">Deprecated align attribute</div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
