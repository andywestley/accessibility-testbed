<?php
$pageTitle = 'Structure';
$extraStyles = '<style>
        

        

        .fake-heading {
            font-size: 2em;
            font-weight: bold;
            display: block;
            margin-top: 1em;
            margin-bottom: 0.5em;
        }
    </style>';
include 'includes/header.php';
?>


    <!-- H1 missing -->

    <h2>Skipped Headings</h2>
    <p>Starting with H2, then skipping to H4.</p>

    <h4>Subsection (H4)</h4>
    <p>Content here.</p>

    <!-- Visual heading not semantic -->
    <div class="fake-heading">Visual Heading (Not H tag)</div>
    <p>The text above looks like a heading but is a div.</p>

    <h2>Misused Blockquote</h2>
    <blockquote>
        This is not a quote, just indented text for visual style.
    </blockquote>

    <h2>Misused Definition List</h2>
    <dl>
        <dt>Term 1</dt>
        <dd>Definition 1</dd>
        <!-- Missing DD -->
        <dt>Term 2</dt>

        <!-- Missing DT -->
        <dd>Definition for nothing</dd>
    </dl>

    <h2>Ordered List Visual Only</h2>
    <p>
        1. Item one<br>
        2. Item two<br>
        3. Item three
    </p>

    <h2>More Skipped Headings</h2>
    <h5>Skipping H3 and H4</h5>
    <p>Content under H5.</p>
    <h6>Skipping even more</h6>
    <p>Content under H6.</p>

    <!-- Deep nesting -->
    <div id="wrapper">
        <div class="container">
            <div class="content-area">
                <div class="main-body">
                    <div class="article-wrapper">
                        <div class="text-block">
                            Deeply nested content without landmarks.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2>Misused List Elements</h2>
    <!-- LI outside UL/OL -->
    <li>Orphan item 1</li>
    <li>Orphan item 2</li>

    <div>
        <li>Item in div</li>
        <li>Item in div</li>
    </div>

    <!-- P acting as header -->
    <p style="font-weight: bold; font-size: 1.5em; margin-bottom: 0;">Bad Heading 1</p>
    <p>Content for bad heading.</p>
    <p style="font-weight: bold; font-size: 1.5em; margin-bottom: 0;">Bad Heading 2</p>
    <p>Content for bad heading.</p>


<?php include 'includes/footer.php'; ?>