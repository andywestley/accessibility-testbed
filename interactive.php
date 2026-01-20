<?php
$pageTitle = 'Interactive Elements';
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
?>


    <h1>Interactive Element Issues</h1>

    <h2>Div Button (No Role, No Tabindex)</h2>
    <!-- Not accessible by keyboard, screen reader ignores -->
    <div class="fake-btn" onclick="alert('Clicked!')">Click Me via Mouse Only</div>

    <h2>Span Link</h2>
    <!-- Not reachable by keyboard -->
    <span style="color: blue; text-decoration: underline; cursor: pointer;" onclick="alert('Link clicked')">
        This is a span link
    </span>

    <h2>Div Button (Role Button, No Keyboard Handler)</h2>
    <!-- Screen reader knows it's a button, but Enter/Space won't work -->
    <div role="button" tabindex="0" class="fake-btn" onclick="alert('Clicked!')">
        Focusable but no Keyboard Event
    </div>

    <h2>Custom Checkbox (No State)</h2>
    <!-- Visual checkbox, no aria-checked -->
    <div role="checkbox" tabindex="0" onclick="this.innerHTML = this.innerHTML === '[x]' ? '[ ]' : '[x]'">
        [ ] Check me
    </div>

    <h2>More Div Buttons</h2>
    <div class="fake-btn" onclick="console.log('click')">Div Button 1</div>
    <div class="fake-btn" onclick="console.log('click')">Div Button 2</div>
    <div class="fake-btn" onclick="console.log('click')">Div Button 3</div>

    <h2>More Span Actions</h2>
    <span onclick="alert('span')">[Span Action 1]</span> |
    <span onclick="alert('span')">[Span Action 2]</span> |
    <span onclick="alert('span')">[Span Action 3]</span>

    <h2>Mouseover Only Info</h2>
    <div onmouseover="document.getElementById('info').style.display='block'"
        onmouseout="document.getElementById('info').style.display='none'">
        Hover me (Keyboard users can't see info)
    </div>
    <div id="info" style="display:none; color: green;">Secret Info</div>

    <h2>Pointer Gestures (2.5.1)</h2>
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

    <h2>Pointer Cancellation (2.5.2)</h2>
    <!-- Triggers on mousedown, not click (up event) -->
    <button onmousedown="alert('Violation: Triggered on Down-Event! Should be Up-Event.')">
        Danger Button (Triggers on Mouse Down)
    </button>

    <hr>
    <h2>New WCAG 2.2 / AAA Interactive Issues</h2>

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

<?php include 'includes/footer.php'; ?>