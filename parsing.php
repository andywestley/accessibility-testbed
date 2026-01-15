<?php
$pageTitle = 'Parsing Issues';
$extraStyles = '<style>
        

        

        .error {
            color: red;
        }
    </style>';
include 'includes/header.php';
?>


    <h1>Parsing and HTML Spec Issues</h1>

    <h2>Duplicate IDs</h2>
    <div id="duplicate">First div with id 'duplicate'</div>
    <div id="duplicate">Second div with id 'duplicate'</div>
    <button id="duplicate">Button with id 'duplicate'</button>
    <span id="duplicate">Span with id 'duplicate'</span>
    <input id="duplicate" value="Input duplicate">
    <a href="#" id="duplicate">Link duplicate</a>
    <img src="#" id="duplicate" alt="Img duplicate">
    <h2 id="duplicate">Heading duplicate</h2>
    <p id="duplicate">Paragraph duplicate</p>
    <div id="duplicate">Another div duplicate</div>

    <h2>Unclosed Tags</h2>
    <p>This paragraph is not closed properly
    <div>And here is a div</div>

    <h2>Improper Nesting</h2>
    <p>Paragraph start
    <div>Div inside paragraph (invalid)</div> Paragraph end.</p>
    <b>Bold start <i>Italic inside</b> Italic end (overlapping tags)</i>

    <h2>Attribute Errors</h2>
    <input type="text" disabled="disabled="> <!-- Malformed value -->
    <img src="foo.jpg" alt="foo" width="100" height="100" />
    <!-- Self closing slash on non-void element in HTML5 usually ignored but sometimes flagged depending on doctype strictness, though valid in HTML5. Let's try explicit deprecated attributes -->
    <div align="center">Deprecated align attribute</div>

<?php include 'includes/footer.php'; ?>