<?php
$pageTitle = 'Keyboard Accessibility & Hover Content';
$extraStyles = '<style>
        

        

        .fake-btn {
            background: #ddd;
            padding: 5px 10px;
            border: 1px solid #999;
            display: inline-block;
            cursor: pointer;
        }
    </style>';
include 'includes/header.php';

$currentCriterion = [
    'rule' => 'WCAG 2.1.1 / 1.4.13',
    'name' => 'Keyboard Accessibility & Hover Content',
    'level' => 'A',
    'citation' => 'WCAG 2.2 SC 2.1.1 & 1.4.13: All functionality is operable through a keyboard interface without requiring specific timings for individual keystrokes.',
    'trigger_summary' => 'Mouse-only click handlers on divs/spans without tabindex or keydown events, and hover tooltips that disappear when mousing over.'
];
include 'includes/diagnostic_header.php';
?>
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">2.1.1 Keyboard - Div Button (No Role, No Tabindex)</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- Not accessible by keyboard, screen reader ignores -->
    <div class="fake-btn" onclick="alert('Clicked!')">Click Me via Mouse Only</div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">2.1.1 Keyboard - Span Link</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- Not reachable by keyboard -->
    <span style="color: blue; text-decoration: underline; cursor: pointer;" onclick="alert('Link clicked')">
        This is a span link
    </span>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">2.1.1 Keyboard - Div Button (Role Button, No Keyboard Handler)</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- Screen reader knows it's a button, but Enter/Space won't work -->
    <div role="button" tabindex="0" class="fake-btn" onclick="alert('Clicked!')">
        Focusable but no Keyboard Event
    </div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.2 Name, Role, Value - Custom Checkbox (No State)</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- Visual checkbox, no aria-checked -->
    <div role="checkbox" tabindex="0" onclick="this.innerHTML = this.innerHTML === '[x]' ? '[ ]' : '[x]'">
        [ ] Check me
    </div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">2.1.1 Keyboard - More Div Buttons</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <div class="fake-btn" onclick="console.log('click')">Div Button 1</div>
    <div class="fake-btn" onclick="console.log('click')">Div Button 2</div>
    <div class="fake-btn" onclick="console.log('click')">Div Button 3</div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">2.1.1 Keyboard - More Span Actions</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <span onclick="alert('span')">[Span Action 1]</span> |
    <span onclick="alert('span')">[Span Action 2]</span> |
    <span onclick="alert('span')">[Span Action 3]</span>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.4.13 Content on Hover/Focus - Mouseover Only Info</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <div onmouseover="document.getElementById('info').style.display='block'"
        onmouseout="document.getElementById('info').style.display='none'">
        Hover me (Keyboard users can't see info)
    </div>
    <div id="info" style="display:none; color: green;">Secret Info</div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">2.5.1 Pointer Gestures - Slider (Path-based)</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <div style="border: 1px solid #ccc; padding: 20px; width: 300px;">
        <p>Slide to Unlock (Path-based gesture with no alternative)</p>
        <input type="range" min="0" max="100" value="0" id="slider" style="width: 100%;">
        <p id="unlocked" style="display:none; color:green;">UNLOCKED!</p>
        <script>
            document.getElementById('slider').addEventListener('input', function(e) {
                if (e.target.value == 100) {
                    document.getElementById('unlocked').style.display = 'block';
                }
            });
        </script>
    </div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">2.5.2 Pointer Cancellation - Trigger on Down</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- Triggers on mousedown, not click (up event) -->
    <button onmousedown="alert('Violation: Triggered on Down-Event! Should be Up-Event.')">
        Danger Button (Triggers on Mouse Down)
    </button>

    <hr>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">New WCAG 2.2 / AAA Interactive Issues</h2>
        <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 px-2 py-1"><i class="bi bi-info-circle-fill me-1"></i> Level AAA Trigger</span>
    </div>
    <div class="card-body">
        <h3>2.1.3 Keyboard (No Exception) (AAA)</h3>
    <p>This drawing canvas works only with a mouse. Even though "freehand drawing" might be considered an exception for 2.1.1, 2.1.3 removes that exception.</p>
    <div style="width: 200px; height: 100px; border: 1px solid black; position: relative;" onmousemove="if(event.buttons===1) { this.innerHTML += '.'; }">
        [ Draw Here (Mouse Only) ]
    </div>

    <h3>2.5.6 Concurrent Input Mechanisms (AAA)</h3>
    <p>This field disables mouse interaction if it detects touch, or vice versa (simulated restriction).</p>
    <button onclick="if(window.matchMedia('(pointer: coarse)').matches) { alert('Mouse blocked because you seem to be on a touch device'); } else { alert('Clicked'); }">
        Restrictive Input Button
    </button>

    <h3>2.5.7 Dragging Movements (AA)</h3>
    <p>A draggable item that <strong>requires</strong> dragging to move, with no single-pointer (tap/click) alternative.</p>
    <div id="drag-container" style="padding: 10px; background: #eee;">
        <div id="dragger" draggable="true" style="width: 50px; height: 50px; background: blue; color: white; cursor: move; display: flex; align-items: center; justify-content: center;">
            Drag
        </div>
        <div id="dropzone" style="margin-top: 10px; width: 100px; height: 100px; border: 2px dashed #999;">
            Drop Here
        </div>
    </div>
    <script>
        const dragger = document.getElementById('dragger');
        const dropzone = document.getElementById('dropzone');
        dragger.addEventListener('dragstart', e => e.dataTransfer.setData('text', 'dragged'));
        dropzone.addEventListener('dragover', e => e.preventDefault());
        dropzone.addEventListener('drop', e => {
            e.preventDefault();
            dropzone.appendChild(dragger);
        });
    </script>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
