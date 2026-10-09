<?php
$pageTitle = 'Name, Role, Value & ARIA Misuse';include 'includes/header.php';

$currentCriterion = [
    'rule' => 'WCAG 4.1.2',
    'name' => 'Name, Role, Value & ARIA Misuse',
    'level' => 'A',
    'citation' => 'WCAG 2.2 SC 4.1.2: For all user interface components, the name and role can be programmatically determined and states/values can be set.',
    'trigger_summary' => 'Invalid or conflicting ARIA roles (e.g. role="button" on a div without keyboard support), missing required ARIA attributes.'
];
include 'includes/diagnostic_header.php';
?>
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.2 Name, Role, Value - ARIA Hidden on Focusable Element</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>The button below is hidden from screen readers but focusable by keyboard.</p>
    <button aria-hidden="true">You can tab to me but I am silent</button>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.3.1 Info and Relationships - Presentation Role on Semantic Container</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>The list below has role presentation, removing list semantics.</p>
    <ul role="presentation">
        <li>Item 1</li>
        <li>Item 2</li>
    </ul>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.2 Name, Role, Value - Invalid Role</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <div role="foo">This role does not exist.</div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.2 Name, Role, Value - Conflicting Attributes</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <div role="checkbox" aria-checked="true" aria-disabled="true">
        I am a disabled checkbox.
    </div>
    <!-- Progress bar with min > max -->
    <div role="progressbar" aria-valuenow="50" aria-valuemin="100" aria-valuemax="0">
        Broken progress bar
    </div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">ARIA Best Practice - Redundant ARIA</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <button role="button">I am a button with role=button</button>
    <div role="heading" aria-level="2">I am a div with role heading</div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.2 Name, Role, Value - More ARIA Hidden Focusables</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <a href="#" aria-hidden="true">Hidden Link 1</a><br>
    <a href="#" aria-hidden="true">Hidden Link 2</a><br>
    <input type="text" aria-hidden="true" value="Hidden Input" />
    <button aria-hidden="true" onclick="alert('hidden')">Hidden Button</button>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.2 Name, Role, Value - More Invalid Roles</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <div role="note">Role note is valid but often misused</div>
    <div role="container">Invalid role 'container'</div>
    <div role="text">Role 'text' is not standard</div>
    <div role="imag">Misspelled role 'image' (imag)</div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.2 Name, Role, Value - More Conflicting Attributes</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <button aria-disabled="true">Active Button labeled disabled</button>
    <div role="radio" aria-checked="mixed">Radio can't be mixed</div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">Status Messages (4.1.3)</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- Content updates dynamically but screen readers are not notified -->
    <div style="border: 1px solid #ccc; padding: 10px;">
        <button onclick="document.getElementById('results').innerHTML = 'Results found: 5 items.'">Search</button>
        <div id="results" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
