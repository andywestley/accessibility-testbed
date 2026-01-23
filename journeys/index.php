<?php
$pageTitle = 'Journeys & Interactivity';
$basePath = '../';
include '../includes/header.php';
?>

<h1>Journeys & Interactivity</h1>
<p class="lead">Select a journey below to simulate common user flows. These flows contain intentional accessibility errors for testing purposes.</p>

<div class="row mt-4">
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Login Flow</h5>
                <p class="card-text">A standard email and password login form followed by a success page.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Demonstrates:</strong> High-impact barriers to entry.<br>
                    <strong>Observation:</strong> Try to identify fields without using visual labels. Check tab order.<br>
                    <strong>Key Issues:</strong>
                    <ul class="pl-3 mb-0">
                        <li>WCAG 1.4.3 (Contrast)</li>
                        <li>WCAG 3.3.2 (Labels)</li>
                        <li>WCAG 1.3.5 (Autocomplete)</li>
                    </ul>
                </small>
                <a href="login.php" class="btn btn-primary mt-3">Start Login Flow</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Multi-step Survey</h5>
                <p class="card-text">A multi-page data collection wizard with complex inputs.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Demonstrates:</strong> Cumulative frustration in long flows.<br>
                    <strong>Observation:</strong> Attempt to navigate using only keyboard. Note progress bar announcements.<br>
                    <strong>Key Issues:</strong>
                    <ul class="pl-3 mb-0">
                        <li>WCAG 2.1.2 (Keyboard Trap)</li>
                        <li>WCAG 4.1.2 (Name, Role, Value)</li>
                        <li>WCAG 2.4.6 (Headings/Labels)</li>
                    </ul>
                </small>
                <a href="survey_step1.php" class="btn btn-primary mt-3">Start Survey Flow</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Blocked Registration</h5>
                <p class="card-text">A form with inaccessible Javascript validation.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Demonstrates:</strong> Error handling failures.<br>
                    <strong>Observation:</strong> Submit empty form. Note if focus moves to errors or if errors are read out.<br>
                    <strong>Key Issues:</strong>
                    <ul class="pl-3 mb-0">
                        <li>WCAG 3.3.1 (Error Identification)</li>
                        <li>WCAG 3.3.3 (Error Suggestion)</li>
                        <li>WCAG 4.1.3 (Status Messages)</li>
                    </ul>
                </small>
                <a href="blocked_form.php" class="btn btn-danger mt-3">Start Blocked Flow</a>
            </div>
        </div>
    </div>
</div>

<h2 class="mt-5">Interaction Dynamics</h2>
<p>Test cases for dynamic content, state management, and focus logic.</p>

<div class="row mt-4">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Focus Management Failure</h5>
                <p class="card-text">Simulates focus loss during AJAX updates (e.g. "Load More").</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Demonstrates:</strong> Disorienting focus resets.<br>
                    <strong>Observation:</strong> Click "Load More". Press Tab. Does focus resume at the new item or restart at the top?<br>
                    <strong>Key Issues:</strong>
                    <ul class="pl-3 mb-0">
                        <li>WCAG 2.4.3 (Focus Order)</li>
                        <li>Best Practice (Manage Focus)</li>
                    </ul>
                </small>
                <a href="focus_failure.php" class="btn btn-warning mt-3">Test Focus Logic</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Silent Status Updates</h5>
                <p class="card-text">Dynamic content updates without ARIA properties.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Demonstrates:</strong> Missing non-visual feedback.<br>
                    <strong>Observation:</strong> Click "Add". Verify visual change. Check code for `aria-live` regions.<br>
                    <strong>Key Issues:</strong>
                    <ul class="pl-3 mb-0">
                        <li>WCAG 4.1.3 (Status Messages)</li>
                        <li>WCAG 3.3.1 (Error Identification)</li>
                    </ul>
                </small>
                <a href="silent_update.php" class="btn btn-warning mt-3">Test Live Regions</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">State Mismatch</h5>
                <p class="card-text">Visual state does not match ARIA attributes.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Demonstrates:</strong> Broken semantics in custom widgets.<br>
                    <strong>Observation:</strong> Toggle accordion. Inspect button. Does `aria-expanded` toggle true/false?<br>
                    <strong>Key Issues:</strong>
                    <ul class="pl-3 mb-0">
                        <li>WCAG 4.1.2 (Name, Role, Value)</li>
                        <li>ARIA Best Practices</li>
                    </ul>
                </small>
                <a href="state_mismatch.php" class="btn btn-warning mt-3">Test ARIA State</a>
            </div>
        </div>
    </div>
</div>

<h2 class="mt-5">Advanced Heuristics</h2>
<p>Test cases for complex behavioral and layout issues.</p>

<div class="row mt-4">
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Keyboard Trap</h5>
                <p class="card-text">A custom scroll widget that captures tab focus.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Demonstrates:</strong> "Black hole" for keyboard users.<br>
                    <strong>Observation:</strong> Tab into the scroll box. Attempt to Tab out to the next form field. Verify if stuck.<br>
                    <strong>Key Issues:</strong>
                    <ul class="pl-3 mb-0">
                        <li>WCAG 2.1.2 (No Keyboard Trap)</li>
                    </ul>
                </small>
                <a href="keyboard_trap.php" class="btn btn-danger mt-3">Enter Trap</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Layout Shift (CLS)</h5>
                <p class="card-text">Content loads asynchronously without reserved space.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Demonstrates:</strong> Visual instability and reading disruption.<br>
                    <strong>Observation:</strong> Click to load image. Watch text jump. Verify no placeholder height on container.<br>
                    <strong>Key Issues:</strong>
                    <ul class="pl-3 mb-0">
                        <li>Core Web Vitals (CLS)</li>
                        <li>UX / Reading Continuity</li>
                    </ul>
                </small>
                <a href="layout_shift.php" class="btn btn-info mt-3">Trigger Shift</a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
