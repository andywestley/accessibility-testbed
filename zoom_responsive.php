<?php
$pageTitle = 'Resize Text & Reflow (400% Zoom)';
$extraStyles = '<style>
        

        

        .fixed-container {
            width: 1200px;
            border: 1px solid blue;
            padding: 20px;
        }

        .overlap-container {
            height: 50px;
            overflow: hidden;
            border: 1px solid green;
        }
    </style>';
include 'includes/header.php';

$currentCriterion = [
    'rule' => 'WCAG 1.4.4 / 1.4.10',
    'name' => 'Resize Text & Reflow (400% Zoom)',
    'level' => 'AA',
    'citation' => 'WCAG 2.2 SC 1.4.4 & 1.4.10: Content can be zoomed to 200% without assistive technology and reflowed without two-dimensional scrolling at 400%.',
    'trigger_summary' => 'Fixed-pixel height containers causing text overflow clipping on 200% zoom, and fixed-width tables causing horizontal scrolling.'
];
include 'includes/diagnostic_header.php';
?>
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.4.4 Resize Text / 1.4.10 - Zoom Disabled</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>This page has <code>user-scalable=no</code> in the viewport meta tag, preventing pinch-to-zoom on mobile.</p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.4.10 Reflow - No Responsive Reflow (Horizontal Scroll)</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <div class="fixed-container">
        This container is fixed at 1200px width. On a small screen or when zoomed in, it will cause horizontal
        scrolling, violating Reflow criteria.
    </div>

    <div style="width: 1500px; background: #eee; padding: 20px;">
        Even wider fixed container (1500px).
    </div>

    <div style="width: 900px; margin-left: 500px; background: #ddd;">
        Fixed margin pushing content off screen on small devices.
    </div>

    <pre>
Fixed preformatted text that causes scroll
because it is very long and does not wrap.
    </pre>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.4.4 Resize Text - Content Overlap on Text Resize</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>The container below has a fixed height. If you increase font size, text will be cut off or overlap.</p>
    <div class="overlap-container">
        This text is inside a fixed height container. If you enlarge the font size, it should break out or be cut off,
        making it unreadable.
    </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
