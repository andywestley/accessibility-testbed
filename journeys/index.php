<?php
$pageTitle = 'User Journeys';
$basePath = '../';
include '../includes/header.php';
?>

<h1>User Journeys</h1>
<p class="lead">Select a journey below to simulate common user flows. These flows contain intentional accessibility errors for testing purposes.</p>

<div class="row mt-4">
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Login Flow</h5>
                <p class="card-text">A standard email and password login form. Issues include poor contrast, missing labels, and lack of autocomplete.</p>
                <a href="login.php" class="btn btn-primary">Start Login Flow</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Multi-step Survey</h5>
                <p class="card-text">A multi-page data collection wizard. Issues include inaccessible progress bars, keyboard traps, and fake buttons.</p>
                <a href="survey_step1.php" class="btn btn-primary">Start Survey Flow</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Blocked Registration</h5>
                <p class="card-text">A registration form with inaccessible Javascript validation. Errors are indicated only by color, and focus is not managed.</p>
                <a href="blocked_form.php" class="btn btn-danger">Start Blocked Flow</a>
            </div>
        </div>
    </div>
</div>

<h2 class="mt-5">Phase 2 & 3: Advanced Interactions</h2>
<p>Test cases for dynamic content, focus management, and layout stability.</p>

<div class="row mt-4">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Focus Management Failure</h5>
                <p class="card-text">Simulates focus loss during AJAX updates (e.g. "Load More"). Focus resets to top of page.</p>
                <a href="focus_failure.php" class="btn btn-warning">Test Focus Logic</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Silent Status Updates</h5>
                <p class="card-text">Dynamic content updates without ARIA properties. Screen readers miss the change.</p>
                <a href="silent_update.php" class="btn btn-warning">Test Live Regions</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">State Mismatch</h5>
                <p class="card-text">Component where visual state does not match ARIA attributes (e.g. <code>aria-expanded="false"</code> always).</p>
                <a href="state_mismatch.php" class="btn btn-warning">Test ARIA State</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Keyboard Trap</h5>
                <p class="card-text">A custom scroll widget that captures tab focus and prevents the user from leaving.</p>
                <a href="keyboard_trap.php" class="btn btn-danger">Enter Trap</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Layout Shift (CLS)</h5>
                <p class="card-text">Content that loads asynchronously without reserved space, shifting text while reading.</p>
                <a href="layout_shift.php" class="btn btn-info">Trigger Shift</a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
