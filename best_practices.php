<?php
$pageTitle = 'Axe & Engine Best Practices';
$extraStyles = '<style>
        .deprecated-center {
            text-align: center; 
        }
        /* Violation: Viewport lock */
        /* Note: In a real scenario this goes in <head>, injecting here for demonstation */
    </style>
    <meta name="viewport" content="width=device-width, user-scalable=no">';
include 'includes/header.php';

$currentCriterion = [
    'rule' => 'Best Practice',
    'name' => 'Axe & Engine Best Practices',
    'level' => 'AAA',
    'citation' => 'Section 508 & Axe-Core Engine: Recommended industry best practices for accessibility and clean semantic markup.',
    'trigger_summary' => 'Outdated meta tags, target="_blank" missing security attributes, and non-standard layout techniques.'
];
include 'includes/diagnostic_header.php';
?>
<div role="region">
        <!-- Violation: Region without label -->


<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">Best Practice - Landmarks & Regions</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>This section is wrapped in a <code>role="region"</code> but has no <code>aria-label</code> or <code>aria-labelledby</code>.</p>
    </div>

    <main>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">Best Practice - Duplicate Main</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>This is a second <code>&lt;main&gt;</code> element on the page (the first is in the header/layout), which is a violation.</p>
    </main>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">Best Practice - Duplicate Accesskeys</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>Both buttons below share the same accesskey 's'.</p>
    <button accesskey="s" onclick="alert('Button 1')">Save (Accesskey 's')</button>
    <button accesskey="s" onclick="alert('Button 2')">Search (Accesskey 's')</button>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">Best Practice - Deprecated Tags</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- Violation: Uses deprecated HTML tags -->
    <center>
        <font size="5" color="red">This is centered text using &lt;center&gt; and &lt;font&gt; tags.</font>
    </center>
    <br>
    <marquee>This is a marquee tag (also fails WCAG moving content).</marquee>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">Section 508 (1194.22) - Redundant Links</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>The image link and text link below go to the same place but are separate links.</p>
    <a href="index.php">
        <img src="https://placehold.co/50x50" alt="Home">
    </a>
    <a href="index.php">Home</a>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">Best Practice - Orphaned Content</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>This content is outside of any landmarks (if we hadn't wrapped the whole body in main/header in the template).</p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">Consistent Help (3.2.6) (Level A)</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>If you have help (like a contact link or chatbot) on multiple pages, it must be in the same location. On this page, we've put the "Help" link in a weird spot compared to the footer.</p>
    <div style="position: absolute; top: 50px; left: 0; border: 1px solid red; padding: 5px;">
        <a href="#">Help Center (Inconsistent Location)</a>
    </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
