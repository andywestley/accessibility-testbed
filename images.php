<?php
$pageTitle = 'Non-Text Content & Images';include 'includes/header.php';

$currentCriterion = [
    'rule' => 'WCAG 1.1.1',
    'name' => 'Non-Text Content & Images',
    'level' => 'A',
    'citation' => 'WCAG 2.2 SC 1.1.1: All non-text content presented to the user has a text alternative that serves the equivalent purpose.',
    'trigger_summary' => 'Missing alt attributes, file names as alt text, redundant phrases ("image of"), and missing image map area labels.'
];
include 'includes/diagnostic_header.php';
?>
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.1.1 Non-text Content - Missing Alt Text</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- Missing alt attribute entirely -->
    <img src="https://placehold.co/200x200" />
    <img src="https://placehold.co/201x200" />
    <img src="https://placehold.co/202x200" />
    <img src="https://placehold.co/203x200" />
    <img src="https://placehold.co/204x200" /> <!-- 5 missing alts -->
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.1.1 Non-text Content - More Bad Alt Text</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <img src="https://placehold.co/300x300/jpg" alt="photo.jpg" />
    <img src="https://placehold.co/301x300/png" alt="image.png" />
    <img src="https://placehold.co/302x300" alt="picture" />
    <img src="https://placehold.co/303x300" alt="graphic" />
    <img src="https://placehold.co/304x300" alt="bullet point" />
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.1.1 Non-text Content - Bad Alt Text</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- file name as alt -->
    <img src="https://placehold.co/200x200/png" alt="image.png" />

    <!-- "image of" redundancy -->
    <img src="https://placehold.co/200x200" alt="Image of a placeholder" />
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.1.1 Non-text Content - Decorative Image with Alt</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- Decorative image should have empty alt, but has description -->
    <img src="https://placehold.co/10x10" alt="Spacer" />
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.1.1 Non-text Content - Complex Image without Description</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- Chart placeholder without long description -->
    <img src="https://placehold.co/400x300?text=Complex+Chart" alt="Bar chart showing Q1 growth" />
    <p>The chart above shows data.</p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.1.1 Non-text Content - Image Map Missing Alt</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <img src="https://placehold.co/300x100" usemap="#examplemap" alt="Map" />
    <map name="examplemap">
        <area shape="rect" coords="0,0,100,100" href="#" /> <!-- Missing alt -->
    </map>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
