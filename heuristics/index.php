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
        <div class="card h-100 border-danger">
            <div class="card-body">
                <h5 class="card-title text-danger">Invisible Focus Indicator</h5>
                <p class="card-text">Hides default browser focus rings on all interactive elements.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Observation:</strong> Tab through the page. Can you see where you are?<br>
                    <strong>Key Issue:</strong> WCAG 2.4.7 (Focus Visible)
                </small>
                <a href="focus_hidden.php" class="btn btn-danger mt-3">Test Focus Visibility</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Focus Management Failure</h5>
                <p class="card-text">Simulates focus loss during AJAX updates (e.g. "Load More").</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Observation:</strong> Click "Load More". Does focus reset to the top?<br>
                    <strong>Key Issue:</strong> WCAG 2.4.3 (Focus Order)
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
                    <strong>Observation:</strong> Verify visual change. Check for `aria-live` announcements.<br>
                    <strong>Key Issue:</strong> WCAG 4.1.3 (Status Messages)
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
                    <strong>Observation:</strong> Does `aria-expanded` toggle correctly?<br>
                    <strong>Key Issue:</strong> WCAG 4.1.2 (Name, Role, Value)
                </small>
                <a href="state_mismatch.php" class="btn btn-warning mt-3">Test ARIA State</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 border-warning">
            <div class="card-body">
                <h5 class="card-title text-warning">Meaning by Color Alone</h5>
                <p class="card-text">A dashboard where status is indicated only by colored circles.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Observation:</strong> Distinguish states without color information.<br>
                    <strong>Key Issue:</strong> WCAG 1.4.1 (Use of Color)
                </small>
                <a href="color_only.php" class="btn btn-warning mt-3">Test Color Dependency</a>
            </div>
        </div>
    </div>
</div>

<h2 class="mt-5">Advanced Heuristics</h2>
<p>Test cases for complex behavioral and layout issues.</p>

<div class="row mt-4">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Keyboard Trap</h5>
                <p class="card-text">A custom scroll widget that captures tab focus.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Observation:</strong> Attempt to Tab out of the scroll box.<br>
                    <strong>Key Issue:</strong> WCAG 2.1.2 (No Keyboard Trap)
                </small>
                <a href="keyboard_trap.php" class="btn btn-danger mt-3">Enter Trap</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 border-info">
            <div class="card-body">
                <h5 class="card-title text-info">The Sticky Tooltip</h5>
                <p class="card-text">A tooltip that obscures content and is hard to dismiss.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Observation:</strong> Dismiss with keyboard or hover precisely.<br>
                    <strong>Key Issue:</strong> WCAG 1.4.13 (Content on Hover/Focus)
                </small>
                <a href="sticky_tooltip.php" class="btn btn-info mt-3">Test Tooltip Persistence</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Layout Shift (CLS)</h5>
                <p class="card-text">Content loads asynchronously without reserved space.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Observation:</strong> Watch text jump when image loads.<br>
                    <strong>Key Issue:</strong> Core Web Vitals (CLS)
                </small>
                <a href="layout_shift.php" class="btn btn-info mt-3">Trigger Shift</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card h-100 border-danger">
            <div class="card-body">
                <h5 class="card-title text-danger">Motion Actuation Failure</h5>
                <p class="card-text">Requires device "shaking" to reset form with no button.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Observation:</strong> Can you reset the form without physical motion?<br>
                    <strong>Key Issue:</strong> WCAG 2.5.4 (Motion Actuation)
                </small>
                <a href="shake_fail.php" class="btn btn-danger mt-3">Test Motion Requirement</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card h-100 border-warning">
            <div class="card-body">
                <h5 class="card-title text-warning">Complex Pointer Gestures</h5>
                <p class="card-text">Requires a path-based unlock pattern for submission.</p>
                <hr>
                <small class="text-muted d-block mb-2">
                    <strong>Observation:</strong> Complete action using single clicks only.<br>
                    <strong>Key Issue:</strong> WCAG 2.5.1 (Pointer Gestures)
                </small>
                <a href="complex_gestures.php" class="btn btn-warning mt-3">Test Gesture Complexity</a>
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
                <p class="card-text">A dialog overlay that fails to trap focus.</p>
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
                <p class="card-text">Security checks with no alternative.</p>
                <hr>
                <a href="captcha_visual.php" class="btn btn-dark mt-3">Verify Human</a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
