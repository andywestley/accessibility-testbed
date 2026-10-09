<?php
$pageTitle = 'Iframe Titles & Embedding';include 'includes/header.php';

$currentCriterion = [
    'rule' => 'WCAG 4.1.2',
    'name' => 'Iframe Titles & Embedding',
    'level' => 'A',
    'citation' => 'WCAG 2.2 SC 4.1.2: Frames and iframes must have accessible title attributes that describe their purpose and content.',
    'trigger_summary' => 'Embedded iframe elements missing title attributes or with generic placeholder titles ("frame", "untitled").'
];
include 'includes/diagnostic_header.php';
?>
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.2 Name, Role, Value - Iframe Missing Title</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <iframe src="index.html" height="200" width="300"></iframe>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.2 Name, Role, Value - Empty Iframe (Tracking Pixel?)</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- No title, no aria-hidden -->
    <iframe src="" height="1" width="1"></iframe>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.2 Name, Role, Value - More Missing Titles</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <iframe src="about:blank" height="100" width="100"></iframe>
    <iframe src="about:blank" height="100" width="100"></iframe>
    <iframe src="about:blank" height="100" width="100"></iframe>
    <iframe src="http://example.com" height="200" width="300"></iframe>
    <iframe src="http://example.org" height="200" width="300"></iframe>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
