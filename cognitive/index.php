<?php
$pageTitle = 'Cognitive Accessibility';
$basePath = '../';
include '../includes/header.php';
?>

<h1>Cognitive Accessibility</h1>
<p class="lead">Demonstrations of barriers encountered by people with cognitive, learning, and neurological disabilities.</p>

<h2 class="mt-5">Time & Memory</h2>
<p>Test cases for managing session limits and reducing the mental effort required to recall information.</p>

<div class="row mt-4">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Timeouts without Warning</h5>
                <p class="card-text">Sudden session expiration that doesn't allow users to extend their time.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Observation:</strong> Watch for the sudden redirection or logout without notice.<br>
                    <strong>Key Issue:</strong> WCAG 2.2.1 (Timing Adjustable)
                </small>
                <a href="timeout_no_warning.php" class="btn btn-secondary mt-3">Test Timeout</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Memory Burden Wizard</h5>
                <p class="card-text">Forms that require remembering data from previous steps without a summary.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Observation:</strong> Complete Step 3. Do you remember your reference code from Step 1?<br>
                    <strong>Key Issue:</strong> COGA Best Practice (Reduce Memory Load)
                </small>
                <a href="memory_burden.php" class="btn btn-secondary mt-3">Test Memory Load</a>
            </div>
        </div>
    </div>
</div>

<h2 class="mt-5">Attention & Focus</h2>
<p>Issues where sensory overload or distracting elements disrupt the user's ability to focus on primary tasks.</p>

<div class="row mt-4">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Overwhelming Visuals</h5>
                <p class="card-text">Cluttered layouts and auto-playing animations that distract from tasks.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Observation:</strong> Try to fill out the form while the background is moving.<br>
                    <strong>Key Issue:</strong> WCAG 2.2.2 (Pause, Stop, Hide)
                </small>
                <a href="overwhelming_visuals.php" class="btn btn-secondary mt-3">Test Focus Control</a>
            </div>
        </div>
    </div>
</div>

<h2 class="mt-5">Clear Communication</h2>
<p>Barriers related to the complexity of language and the clarity of system feedback.</p>

<div class="row mt-4">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Complex Language & Jargon</h5>
                <p class="card-text">Content that uses unnecessarily advanced vocabulary and acronyms.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Observation:</strong> Try to understand the instructions without a dictionary.<br>
                    <strong>Key Issue:</strong> WCAG 3.1.5 (Reading Level)
                </small>
                <a href="complex_jargon.php" class="btn btn-secondary mt-3">Test Readability</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Cryptic Error Messages</h5>
                <p class="card-text">Technical jargon or vague error codes instead of helpful instructions.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Observation:</strong> Submit the form and try to fix the error based on the feedback.<br>
                    <strong>Key Issue:</strong> WCAG 3.3.3 (Error Suggestion)
                </small>
                <a href="cryptic_errors.php" class="btn btn-secondary mt-3">Test Error Clarity</a>
            </div>
        </div>
    </div>
</div>

<h2 class="mt-5">Consistency & Predictability</h2>
<p>Issues occurring when user interface elements or interactive patterns behave in an irregular way.</p>

<div class="row mt-4">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Inconsistent Navigation</h5>
                <p class="card-text">Navigation elements that change position or style across pages.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Observation:</strong> Notice how the "Submit" and "Back" buttons move around.<br>
                    <strong>Key Issue:</strong> WCAG 3.2.3 (Consistent Navigation)
                </small>
                <a href="inconsistent_nav.php" class="btn btn-secondary mt-3">Test Predictability</a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
