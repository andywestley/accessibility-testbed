<?php
$pageTitle = 'Home & Matrices';
$extraStyles = '
    <style>
        .red-text { color: red; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; vertical-align: top; }
        th { background-color: #f2f2f2; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .level-a { background-color: #ffe6e6; }
        .level-aa { background-color: #fff0e6; }
        .level-aaa { background-color: #e6f7ff; }
        .not-tested { color: #666; font-style: italic; }
        .nav-tabs { margin-top: 20px; }
        .tab-content { padding: 20px; border: 1px solid #dee2e6; border-top: none; }
    </style>
';
include 'includes/header.php';
?>

    <div style="font-size: 24px; font-weight: bold;">Welcome to the Inaccessible Site</div>
    <br>
    <div>
        This site intentionally demonstrates various accessibility barriers for testing purposes.
        <span class="red-text">Read the text in red for important info.</span>
    </div>

    <!-- Intro Content (Preserved Div Soup) -->
    <div style="font-size: 20px; font-weight: bold; margin-top: 20px;">Common Issues Demo</div>
    <div>
        Content for section 2. Use of divs for everything.
        <a href="#"></a> <!-- Empty link -->
    </div>
    <br>
    <div style="font-size: 20px; font-weight: bold;">Broken Images</div>
    <div>
        <img src="https://placehold.co/100x100"> <!-- Missing alt -->
    </div>
    <br>
    <div style="font-size: 20px; font-weight: bold;">Fake Interactive Elements</div>
    <div>
        <span onclick="alert('click')">Click me (div button)</span>
    </div>
    <br>

    <hr style="margin: 40px 0;">

    <h1>Accessibility Compliance Matrices</h1>
    <p>Select a tab below to view compliance against different standards and rule sets.</p>

    <!-- Bootstrap Tabs -->
    <ul class="nav nav-tabs" id="matrixTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="wcag-tab" data-bs-toggle="tab" data-bs-target="#wcag" type="button" role="tab" aria-controls="wcag" aria-selected="true">WCAG 2.2</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="section508-tab" data-bs-toggle="tab" data-bs-target="#section508" type="button" role="tab" aria-controls="section508" aria-selected="false">Section 508 (Legacy)</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="bestpractice-tab" data-bs-toggle="tab" data-bs-target="#bestpractice" type="button" role="tab" aria-controls="bestpractice" aria-selected="false">Axe Best Practices</button>
        </li>
    </ul>

    <div class="tab-content" id="matrixTabsContent">
        
        <!-- Tab 1: WCAG 2.2 Matrix -->
        <div class="tab-pane fade show active" id="wcag" role="tabpanel" aria-labelledby="wcag-tab">
            <h2>WCAG 2.2 Compliance Matrix (Full AAA)</h2>
            <p>This table lists all WCAG 2.2 criteria up to Level AAA.</p>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Criterion</th>
                        <th>Level</th>
                        <th>Description</th>
                        <th>Example Violation Page(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Included simplified rows for brevity, focusing on linking pages -->
                    <!-- Principle 1: Perceivable -->
                    <tr class="level-a"><td>1.1.1 Non-text Content</td><td>A</td><td>Text alternatives.</td><td><a href="images.php">images.php</a></td></tr>
                    <tr class="level-a"><td>1.2.1 Audio-only/Video-only</td><td>A</td><td>Alternatives.</td><td class="not-tested">-</td></tr>
                    <tr class="level-a"><td>1.2.2 Captions (Prerecorded)</td><td>A</td><td>Captions.</td><td><a href="media.php">media.php</a></td></tr>
                    <tr class="level-a"><td>1.3.1 Info and Relationships</td><td>A</td><td>Structure.</td><td><a href="structure.php">structure.php</a>, <a href="tables.php">tables.php</a></td></tr>
                    <tr class="level-a"><td>1.3.2 Meaningful Sequence</td><td>A</td><td>Reading sequence.</td><td><a href="focus_order.php">focus_order.php</a></td></tr>
                    <tr class="level-a"><td>1.3.3 Sensory Characteristics</td><td>A</td><td>Shape/Color.</td><td><a href="forms_advanced.php">forms_advanced.php</a></td></tr>
                    <tr class="level-aa"><td>1.3.4 Orientation</td><td>AA</td><td>Portrait/Landscape.</td><td><a href="orientation.php">orientation.php</a></td></tr>
                    <tr class="level-aa"><td>1.3.5 Identify Input Purpose</td><td>AA</td><td>Autocomplete.</td><td><a href="forms_advanced.php">forms_advanced.php</a></td></tr>
                    <tr class="level-a"><td>1.4.1 Use of Color</td><td>A</td><td>Color only.</td><td><a href="contrast.php">contrast.php</a></td></tr>
                    <tr class="level-a"><td>1.4.2 Audio Control</td><td>A</td><td>Autoplay pause.</td><td><a href="media.php">media.php</a></td></tr>
                    <tr class="level-aa"><td>1.4.3 Contrast (Minimum)</td><td>AA</td><td>4.5:1 ratio.</td><td><a href="contrast.php">contrast.php</a></td></tr>
                    <tr class="level-aa"><td>1.4.4 Resize text</td><td>AA</td><td>200% zoom.</td><td><a href="zoom_responsive.php">zoom_responsive.php</a></td></tr>
                    <tr class="level-aa"><td>1.4.5 Images of Text</td><td>AA</td><td>No text images.</td><td><a href="typography.php">typography.php</a></td></tr>
                    <tr class="level-aaa"><td>1.4.6 Contrast (Enhanced)</td><td>AAA</td><td>7:1 ratio.</td><td><a href="contrast.php">contrast.php</a></td></tr>
                    <tr class="level-aaa"><td>1.4.8 Visual Presentation</td><td>AAA</td><td>Spacing/Colors.</td><td><a href="typography.php">typography.php</a></td></tr>
                    <tr class="level-aa"><td>1.4.10 Reflow</td><td>AA</td><td>400% zoom.</td><td><a href="zoom_responsive.php">zoom_responsive.php</a></td></tr>
                    <tr class="level-aa"><td>1.4.11 Non-text Contrast</td><td>AA</td><td>3:1 UI components.</td><td><a href="contrast.php">contrast.php</a></td></tr>
                    <tr class="level-aa"><td>1.4.12 Text Spacing</td><td>AA</td><td>Line height/spacing.</td><td><a href="typography.php">typography.php</a></td></tr>
                    <tr class="level-aa"><td>1.4.13 Content on Hover/Focus</td><td>AA</td><td>Dismissible content.</td><td><a href="interactive.php">interactive.php</a></td></tr>

                    <!-- Principle 2: Operable -->
                    <tr class="level-a"><td>2.1.1 Keyboard</td><td>A</td><td>Keyboard accessible.</td><td><a href="interactive.php">interactive.php</a></td></tr>
                    <tr class="level-a"><td>2.1.2 No Keyboard Trap</td><td>A</td><td>No traps.</td><td><a href="keyboard_traps.php">keyboard_traps.php</a></td></tr>
                    <tr class="level-a"><td>2.1.4 Character Key Shortcuts</td><td>A</td><td>Remap shortcuts.</td><td><a href="keyboard_traps.php">keyboard_traps.php</a></td></tr>
                    <tr class="level-a"><td>2.2.1 Timing Adjustable</td><td>A</td><td>Time limits.</td><td><a href="flashing.php">flashing.php</a></td></tr>
                    <tr class="level-a"><td>2.2.2 Pause, Stop, Hide</td><td>A</td><td>Moving content.</td><td><a href="flashing.php">flashing.php</a></td></tr>
                    <tr class="level-a"><td>2.3.1 Three Flashes</td><td>A</td><td>No seizure risk.</td><td><a href="flashing.php">flashing.php</a></td></tr>
                    <tr class="level-aaa"><td>2.3.3 Animation from Interactions</td><td>AAA</td><td>Disable motion.</td><td><a href="flashing.php">flashing.php</a></td></tr>
                    <tr class="level-a"><td>2.4.1 Bypass Blocks</td><td>A</td><td>Skip link.</td><td><a href="index.php">index.php</a></td></tr>
                    <tr class="level-a"><td>2.4.2 Page Titled</td><td>A</td><td>Unique titles.</td><td><a href="index.php">index.php</a></td></tr>
                    <tr class="level-a"><td>2.4.3 Focus Order</td><td>A</td><td>Logical order.</td><td><a href="focus_order.php">focus_order.php</a></td></tr>
                    <tr class="level-a"><td>2.4.4 Link Purpose (In Context)</td><td>A</td><td>Link text.</td><td><a href="links.php">links.php</a></td></tr>
                    <tr class="level-aa"><td>2.4.6 Headings and Labels</td><td>AA</td><td>Descriptive labels.</td><td><a href="structure.php">structure.php</a></td></tr>
                    <tr class="level-aa"><td>2.4.7 Focus Visible</td><td>AA</td><td>Visible indicator.</td><td><a href="focus_order.php">focus_order.php</a></td></tr>
                    <tr class="level-aaa"><td>2.4.9 Link Purpose (Link Only)</td><td>AAA</td><td>No context needed.</td><td><a href="links.php">links.php</a></td></tr>
                    <tr class="level-aaa"><td>2.4.10 Section Headings</td><td>AAA</td><td>Organized content.</td><td><a href="structure.php">structure.php</a></td></tr>
                    <tr class="level-aa"><td>2.4.11 Focus Not Obscured (Min)</td><td>AA</td><td>Focus visible.</td><td><a href="focus_order.php">focus_order.php</a></td></tr>
                    <tr class="level-a"><td>2.5.1 Pointer Gestures</td><td>A</td><td>No path gestures.</td><td><a href="interactive.php">interactive.php</a></td></tr>
                    <tr class="level-a"><td>2.5.2 Pointer Cancellation</td><td>A</td><td>Up-event trigger.</td><td><a href="interactive.php">interactive.php</a></td></tr>
                    <tr class="level-a"><td>2.5.3 Label in Name</td><td>A</td><td>Visible label matches accessible.</td><td><a href="interactive.php">interactive.php</a></td></tr>
                    <tr class="level-a"><td>2.5.4 Motion Actuation</td><td>A</td><td>No shaking needed.</td><td><a href="orientation.php">orientation.php</a></td></tr>
                    <tr class="level-aaa"><td>2.5.5 Target Size</td><td>AAA</td><td>44x44px.</td><td><a href="typography.php">typography.php</a></td></tr>

                    <!-- Principle 3: Understandable -->
                    <tr class="level-a"><td>3.1.1 Language of Page</td><td>A</td><td>HTML Lang attribute.</td><td><a href="language.php">language.php</a></td></tr>
                    <tr class="level-aaa"><td>3.1.3 Unusual Words</td><td>AAA</td><td>Definitions.</td><td><a href="language.php">language.php</a></td></tr>
                    <tr class="level-aaa"><td>3.1.4 Abbreviations</td><td>AAA</td><td>Expanded form.</td><td><a href="language.php">language.php</a></td></tr>
                    <tr class="level-aaa"><td>3.1.5 Reading Level</td><td>AAA</td><td>Lower reading level.</td><td><a href="language.php">language.php</a></td></tr>
                    <tr class="level-a"><td>3.2.1 On Focus</td><td>A</td><td>No context change.</td><td><a href="keyboard_traps.php">keyboard_traps.php</a></td></tr>
                    <tr class="level-a"><td>3.2.2 On Input</td><td>A</td><td>No automatic change.</td><td><a href="forms_advanced.php">forms_advanced.php</a></td></tr>
                    <tr class="level-a"><td>3.3.1 Error Identification</td><td>A</td><td>Describe errors.</td><td><a href="forms_advanced.php">forms_advanced.php</a></td></tr>
                    <tr class="level-a"><td>3.3.2 Labels or Instructions</td><td>A</td><td>Form labels.</td><td><a href="forms_basic.php">forms_basic.php</a></td></tr>
                    <tr class="level-aa"><td>3.3.3 Error Suggestion</td><td>AA</td><td>Suggest fixes.</td><td><a href="forms_advanced.php">forms_advanced.php</a></td></tr>
                    <tr class="level-aa"><td>3.3.4 Error Prevention</td><td>AA</td><td>Confirm/Reverse.</td><td><a href="forms_advanced.php">forms_advanced.php</a></td></tr>
                    <tr class="level-a"><td>3.3.7 Redundant Entry</td><td>A</td><td>No re-entry.</td><td><a href="forms_advanced.php">forms_advanced.php</a></td></tr>
                    <tr class="level-aa"><td>3.3.8 Accessible Authentication</td><td>AA</td><td>No cognitive tests.</td><td><a href="forms_advanced.php">forms_advanced.php</a></td></tr>

                    <!-- Principle 4: Robust -->
                    <tr class="level-a"><td>4.1.1 Parsing</td><td>A</td><td>Unique IDs.</td><td><a href="parsing.php">parsing.php</a></td></tr>
                    <tr class="level-a"><td>4.1.2 Name, Role, Value</td><td>A</td><td>ARIA/Standard roles.</td><td><a href="aria_bad.php">aria_bad.php</a></td></tr>
                    <tr class="level-aa"><td>4.1.3 Status Messages</td><td>AA</td><td>Live regions.</td><td><a href="aria_bad.php">aria_bad.php</a></td></tr>
                </tbody>
            </table>
        </div>

        <!-- Tab 2: Section 508 Matrix -->
        <div class="tab-pane fade" id="section508" role="tabpanel" aria-labelledby="section508-tab">
            <h2>Section 508 Compliance Matrix (1194.22)</h2>
            <p>Mapping of Old Section 508 paragraphs to testbed pages.</p>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Paragraph</th>
                        <th>Requirement</th>
                        <th>Violation Page</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>(a)</td><td>Text equivalents for non-text elements.</td><td><a href="images.php">images.php</a></td></tr>
                    <tr><td>(b)</td><td>Multimedia presentations synchronized.</td><td><a href="media.php">media.php</a></td></tr>
                    <tr><td>(c)</td><td>Web pages designed so all info conveyed without color.</td><td><a href="contrast.php">contrast.php</a></td></tr>
                    <tr><td>(d)</td><td>Documents readable without stylesheets.</td><td><a href="structure.php">structure.php</a></td></tr>
                    <tr><td>(e)</td><td>Redundant text links for server-side maps.</td><td><a href="best_practices.php">best_practices.php</a></td></tr>
                    <tr><td>(f)</td><td>Client-side image maps used instead of server-side.</td><td><a href="images.php">images.php</a></td></tr>
                    <tr><td>(g)</td><td>Row and column headers identified for data tables.</td><td><a href="tables.php">tables.php</a></td></tr>
                    <tr><td>(h)</td><td>Markup for complex data table association.</td><td><a href="tables.php">tables.php</a></td></tr>
                    <tr><td>(i)</td><td>Frames titled with text.</td><td><a href="iframes.php">iframes.php</a></td></tr>
                    <tr><td>(j)</td><td>Pages avoid causing screen flicker > 2Hz and < 55Hz.</td><td><a href="flashing.php">flashing.php</a></td></tr>
                    <tr><td>(k)</td><td>Text-only page option.</td><td>(Not Implied)</td></tr>
                    <tr><td>(l)</td><td>Scripts must be accessible with assistive tech.</td><td><a href="interactive.php">interactive.php</a></td></tr>
                    <tr><td>(m)</td><td>Applets/Plug-ins required link.</td><td>(Obsolete)</td></tr>
                    <tr><td>(n)</td><td>Electronic forms allow completion with assistive tech.</td><td><a href="forms_basic.php">forms_basic.php</a></td></tr>
                    <tr><td>(o)</td><td>Method to skip repetitive navigation links.</td><td><a href="index.php">index.php</a></td></tr>
                    <tr><td>(p)</td><td>Timed response limits alert user.</td><td><a href="flashing.php">flashing.php</a></td></tr>
                </tbody>
            </table>
        </div>

        <!-- Tab 3: Best Practices Matrix -->
        <div class="tab-pane fade" id="bestpractice" role="tabpanel" aria-labelledby="bestpractice-tab">
            <h2>Axe-Core Best Practices Matrix</h2>
            <p>Common best practice rules identified by Axe-Core.</p>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Rule ID</th>
                        <th>Description</th>
                        <th>Violation Page</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td><code>accesskeys</code></td><td>Accesskeys should be unique.</td><td><a href="best_practices.php">best_practices.php</a></td></tr>
                    <tr><td><code>meta-viewport</code></td><td>User should be able to zoom (user-scalable!=no).</td><td><a href="best_practices.php">best_practices.php</a></td></tr>
                    <tr><td><code>deprecated-html</code></td><td>Avoid deprecated tags (&lt;center&gt;, &lt;font&gt;).</td><td><a href="best_practices.php">best_practices.php</a></td></tr>
                    <tr><td><code>landmark-one-main</code></td><td>Page should have one main landmark.</td><td><a href="best_practices.php">best_practices.php</a></td></tr>
                    <tr><td><code>region</code></td><td>All page content should be contained by landmarks.</td><td><a href="best_practices.php">best_practices.php</a></td></tr>
                    <tr><td><code>tabindex</code></td><td>Avoid positive tabindex.</td><td><a href="focus_order.php">focus_order.php</a></td></tr>
                    <tr><td><code>landmark-no-duplicate-banner</code></td><td>Page should have only one banner landmark.</td><td><a href="structure.php">structure.php</a></td></tr>
                    <tr><td><code>label-title-only</code></td><td>Form field should not rely on title attribute only.</td><td><a href="forms_basic.php">forms_basic.php</a></td></tr>
                </tbody>
            </table>
        </div>

    </div>

<?php include 'includes/footer.php'; ?>