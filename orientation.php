<?php
$pageTitle = 'Orientation (Portrait/Landscape)';
$extraStyles = '<style>
        

        

        /* Force landscape visually */
        @media (orientation: portrait) {
            body {
                transform: rotate(90deg);
                transform-origin: bottom left;
                position: absolute;
                top: -100vw;
                left: 0;
                height: 100vw;
                width: 100vh;
                overflow: hidden;
            }

            .warning {
                display: block;
                background: red;
                color: white;
                padding: 20px;
                font-weight: bold;
            }
        }

        .warning {
            display: none;
        }
    </style>';
include 'includes/header.php';

$currentCriterion = [
    'rule' => 'WCAG 1.3.4',
    'name' => 'Orientation (Portrait/Landscape)',
    'level' => 'AA',
    'citation' => 'WCAG 2.2 SC 1.3.4: Content does not restrict its view and operation to a single display orientation, unless essential.',
    'trigger_summary' => 'CSS media queries and transform rules that lock viewport orientation or block landscape/portrait rendering.'
];
include 'includes/diagnostic_header.php';
?>
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.3.4 Orientation - Portrait/Landscape Restriction</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <div class="warning">
        Please rotate your device to Landscape mode to view this site properly. We do not support Portrait.
    </div>

    <p>This page restricts orientation by transforming the content or showing a warning message if the user is in
        portrait mode.</p>
    <p>(Note: Pure CSS lock is tricky, but often this violation is checking for the instruction "Please rotate" or apps
        that are locked).</p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.3.4 Orientation - Content Hidden by Orientation</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <div class="landscape-only">
        This content is only visible in landscape mode.
    </div>
    <style>
        @media (orientation: portrait) {
            .landscape-only {
                display: none;
            }
        }
    </style>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
