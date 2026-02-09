<?php
$pageTitle = 'Heuristics & Interaction';
$basePath = '../';
include '../includes/header.php';
?>

<h1>Heuristics & Interaction</h1>
<p class="lead">Test cases for dynamic content, state management, complex behavioral and layout issues.</p>

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

<h2 class="mt-5">User Hostile Patterns</h2>
<p>Common dark patterns and complex widget failures.</p>

<div class="row mt-4">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">The "Ghost" Modal</h5>
                <p class="card-text">A dialog overlay that fails to trap focus or obscure background access.</p>
                <hr>
                <a href="ghost_modal.php" class="btn btn-dark mt-3">Open Modal</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Unstoppable Carousel</h5>
                <p class="card-text">Auto-rotating content with no pause control.</p>
                <hr>
                <a href="carousel_autoplay.php" class="btn btn-dark mt-3">Watch It Spin</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">The Vanishing Toast</h5>
                <p class="card-text">Status messages that disappear too quickly.</p>
                <hr>
                <a href="vanishing_toast.php" class="btn btn-dark mt-3">Trigger Toast</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Mouse-Only Sortable</h5>
                <p class="card-text">Drag-and-drop list inaccessible to keyboard users.</p>
                <hr>
                <a href="sortable_list.php" class="btn btn-dark mt-3">Try Sorting</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Timed Session Expiry</h5>
                <p class="card-text">A focus-trapping timeout warning.</p>
                <hr>
                <a href="session_expiry.php" class="btn btn-dark mt-3">Start Timer</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Accordion "Yo-Yo"</h5>
                <p class="card-text">Content layout shifts that disrupt reading.</p>
                <hr>
                <a href="accordion_yoyo.php" class="btn btn-dark mt-3">Play Yo-Yo</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Complex Date Picker</h5>
                <p class="card-text">A table-based calendar that traps focus.</p>
                <hr>
                <a href="datepicker_trap.php" class="btn btn-dark mt-3">Pick Date</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Visual-Only CAPTCHA</h5>
                <p class="card-text">Security checks with no non-visual alternative.</p>
                <hr>
                <a href="captcha_visual.php" class="btn btn-dark mt-3">Verify Human</a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
