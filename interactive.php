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

<?php include 'includes/footer.php'; ?>