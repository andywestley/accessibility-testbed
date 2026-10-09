<?php
$pageTitle = 'Color Contrast (Text & UI)';
$extraStyles = '<style>
        

        

        .low-contrast {
            color: #999;
            background-color: #fff;
        }

        /* 2.85:1, fail AA */
        .very-low-contrast {
            color: #ccc;
            background-color: #fff;
        }

        /* 1.6:1, fail A */
        .color-info {
            font-weight: bold;
        }

        .bg-image-text {
            background-image: url("https://placehold.co/300x100/000000/ffffff?text=Busy");
            color: white;
            padding: 20px;
        }
    </style>';
include 'includes/header.php';

$currentCriterion = [
    'rule' => 'WCAG 1.4.3 / 1.4.11',
    'name' => 'Color Contrast (Text & UI)',
    'level' => 'AA',
    'citation' => 'WCAG 2.2 SC 1.4.3 & 1.4.11: Visual presentation of text and images of text has a contrast ratio of at least 4.5:1 (3:1 for large text & UI components).',
    'trigger_summary' => 'Sub-threshold text contrast (< 4.5:1), color used as sole information conveyance, and low-contrast text over busy backgrounds.'
];
include 'includes/diagnostic_header.php';
?>
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.4.3 Contrast (Minimum) - Low Contrast Text</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p class="low-contrast">This text has a contrast ratio of about 2.85:1, which fails WCAG AA.</p>
    <p class="very-low-contrast">This text is extremely hard to read (1.6:1).</p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.4.3 Contrast (Minimum) - More Low Contrast Examples</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p style="color: #bbb; background: white;">Gray on White (Too light)</p>
    <p style="color: #aaa; background: white;">Gray on White (Too light)</p>
    <p style="color: #888; background: #333;">Gray on Dark Gray (Fail)</p>
    <p style="color: red; background: blue;">Red on Blue (Vibrating, hard to read)</p>
    <p style="color: #00ff00; background: #ffffff;">Light Green on White</p>
    <p style="color: #ffff00; background: #ffffff;">Yellow on White (Impossible)</p>
    <p style="color: #00ffff; background: #ffffff;">Cyan on White</p>
    <p style="color: #ff00ff; background: #ffffff;">Magenta on White</p>
    <p style="color: #e0e0e0; background: #ffffff;">Very Light Gray on White</p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.4.1 Use of Color - Color as Information</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>To accept the agreement, press the <span style="color: green; font-weight: bold;">green</span> button.</p>
    <div>
        <button style="background: green; color: white;">Accept</button>
        <button style="background: red; color: white;">Decline</button>
    </div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.4.3 Contrast (Minimum) - Text Over Busy Background</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <div class="bg-image-text">
        Text over a background image that makes it hard to read.
    </div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.4.1 Use of Color - Link Color Only</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>Links are distinguished only by color (no underline) and have low contrast with surrounding text.</p>
    <style>
        a.bad-link {
            text-decoration: none;
            color: #337ab7;
        }

        .text-surround {
            color: #333;
        }
    </style>
    <p class="text-surround">Please visit <a href="#" class="bad-link">our website</a> for more.</p>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
