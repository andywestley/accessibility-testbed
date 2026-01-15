<?php
$pageTitle = 'Sitemap';
$extraStyles = '
    <style>
        .red-text {
            color: red;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .level-a {
            background-color: #ffe6e6;
            /* Light red for A */
        }

        .level-aa {
            background-color: #fff0e6;
            /* Light orange for AA */
        }

        .level-aaa {
            background-color: #e6f7ff;
            /* Light blue for AAA */
        }

        .not-tested {
            color: #666;
            font-style: italic;
        }
    </style>
';
include 'includes/header.php';
?>

    <!-- Div soup instead of headings or landmarks -->
    <div style="font-size: 24px; font-weight: bold;">Welcome to the Inaccessible Site</div>
    <br>
    <div>
        This site is designed to demonstrate various accessibility barriers.
        <span class="red-text">Read the text in red for important info.</span>
    </div>
    <br>
    <div>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>

    <!-- More div soup duplicated -->
    <div style="font-size: 20px; font-weight: bold; margin-top: 20px;">Section 2 (Visual Heading)</div>
    <div>
        Content for section 2. Use of divs for everything.
        <a href="#"></a> <!-- Empty link -->
    </div>
    <br>
    <div style="font-size: 20px; font-weight: bold;">Section 3 (Visual Heading)</div>
    <div>
        Content for section 3.
        <img src="https://placehold.co/100x100"> <!-- Missing alt -->
    </div>
    <br>
    <div style="font-size: 20px; font-weight: bold;">Section 4 (Visual Heading)</div>
    <div>
        Content for section 4.
        <span onclick="alert('click')">Click me (div button)</span>
    </div>
    <br>
    <!-- Justified text block -->
    <div style="text-align: justify; width: 300px;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
    </div>


    <hr style="margin: 40px 0;">

    <h1>WCAG 2.2 Compliance Matrix (Full AAA)</h1>
    <p>This table lists all WCAG 2.2 criteria up to Level AAA and maps them to specific pages in this testbed that
        demonstrate violations. Items marked "-" are not explicitly tested in this microsite.</p>

    <table>
        <thead>
            <tr>
                <th>Criterion</th>
                <th>Level</th>
                <th>Description</th>
                <th>Example Violation Page(s)</th>
            </tr>
        </thead>
        <tbody>
            <!-- Principle 1: Perceivable -->
            <tr class="level-a">
                <td>1.1.1 Non-text Content</td>
                <td>A</td>
                <td>Text alternatives for non-text content.</td>
                <td><a href="images.php">images.php</a> (Missing/Bad Alt Text)</td>
            </tr>
            <tr class="level-a">
                <td>1.2.1 Audio-only and Video-only (Prerecorded)</td>
                <td>A</td>
                <td>Alternatives for time-based media.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-a">
                <td>1.2.2 Captions (Prerecorded)</td>
                <td>A</td>
                <td>Captions for prerecorded audio content.</td>
                <td><a href="media.php">media.php</a> (Missing Captions)</td>
            </tr>
            <tr class="level-a">
                <td>1.2.3 Audio Description or Media Alternative (Prerecorded)</td>
                <td>A</td>
                <td>Audio description or alternative for video.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aa">
                <td>1.2.4 Captions (Live)</td>
                <td>AA</td>
                <td>Captions for live audio content.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aa">
                <td>1.2.5 Audio Description (Prerecorded)</td>
                <td>AA</td>
                <td>Audio description for video content.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>1.2.6 Sign Language (Prerecorded)</td>
                <td>AAA</td>
                <td>Sign language interpretation for audio.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>1.2.7 Extended Audio Description (Prerecorded)</td>
                <td>AAA</td>
                <td>Extended audio description if paused video is insufficient.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>1.2.8 Media Alternative (Prerecorded)</td>
                <td>AAA</td>
                <td>Alternative for time-based media (prerecorded).</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>1.2.9 Audio-only (Live)</td>
                <td>AAA</td>
                <td>Alternative for live audio-only content.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-a">
                <td>1.3.1 Info and Relationships</td>
                <td>A</td>
                <td>Information, structure, and relationships conveyed through presentation.</td>
                <td>
                    <a href="structure.php">structure.php</a> (Headings, Lists)<br>
                    <a href="tables.php">tables.php</a> (Layout Tables)<br>
                    <a href="forms_basic.php">forms_basic.php</a> (Missing Labels)
                </td>
            </tr>
            <tr class="level-a">
                <td>1.3.2 Meaningful Sequence</td>
                <td>A</td>
                <td>Correct reading sequence can be programmatically determined.</td>
                <td><a href="focus_order.php">focus_order.php</a> (Flexbox vs DOM Order)</td>
            </tr>
            <tr class="level-a">
                <td>1.3.3 Sensory Characteristics</td>
                <td>A</td>
                <td>Instructions do not rely solely on sensory characteristics.</td>
                <td><a href="forms_advanced.php">forms_advanced.php</a> (Color required asterisks)</td>
            </tr>
            <tr class="level-aa">
                <td>1.3.4 Orientation</td>
                <td>AA</td>
                <td>Content does not restrict its view and operation to a single display orientation.</td>
                <td><a href="orientation.php">orientation.php</a></td>
            </tr>
            <tr class="level-aa">
                <td>1.3.5 Identify Input Purpose</td>
                <td>AA</td>
                <td>Purpose of input fields can be programmatically determined (Autocomplete).</td>
                <td><a href="forms_advanced.php">forms_advanced.php</a> (Missing autocomplete)</td>
            </tr>
            <tr class="level-aaa">
                <td>1.3.6 Identify Purpose</td>
                <td>AAA</td>
                <td>Purpose of UI components/regions can be determined.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-a">
                <td>1.4.1 Use of Color</td>
                <td>A</td>
                <td>Color is not used as the only visual means of conveying information.</td>
                <td>
                    <a href="contrast.php">contrast.php</a> (Links color only)<br>
                    <a href="forms_advanced.php">forms_advanced.php</a> (Color only errors)
                </td>
            </tr>
            <tr class="level-a">
                <td>1.4.2 Audio Control</td>
                <td>A</td>
                <td>Mechanism to pause or stop audio that plays automatically.</td>
                <td><a href="media.php">media.php</a> (Autoplay)</td>
            </tr>
            <tr class="level-aa">
                <td>1.4.3 Contrast (Minimum)</td>
                <td>AA</td>
                <td>Contrast ratio of at least 4.5:1.</td>
                <td><a href="contrast.php">contrast.php</a> (Low contrast text)</td>
            </tr>
            <tr class="level-aa">
                <td>1.4.4 Resize text</td>
                <td>AA</td>
                <td>Text can be resized without assistive technology up to 200%.</td>
                <td><a href="zoom_responsive.php">zoom_responsive.php</a> (Fixed heights causing overlap)</td>
            </tr>
            <tr class="level-aa">
                <td>1.4.5 Images of Text</td>
                <td>AA</td>
                <td>Text is used to convey information rather than images of text.</td>
                <td><a href="typography.php">typography.php</a> (Image of text)</td>
            </tr>
            <tr class="level-aaa">
                <td>1.4.6 Contrast (Enhanced)</td>
                <td>AAA</td>
                <td>Contrast ratio of at least 7:1.</td>
                <td><a href="contrast.php">contrast.php</a> (Fails AAA standards)</td>
            </tr>
            <tr class="level-aaa">
                <td>1.4.7 Low or No Background Audio</td>
                <td>AAA</td>
                <td>Audio content has low or no background noise.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>1.4.8 Visual Presentation</td>
                <td>AAA</td>
                <td>Mechanism to select foreground/background colors, width, etc.</td>
                <td><a href="typography.php">typography.php</a> (Justified text)</td>
            </tr>
            <tr class="level-aaa">
                <td>1.4.9 Images of Text (No Exception)</td>
                <td>AAA</td>
                <td>Images of text are only used for pure decoration.</td>
                <td><a href="typography.php">typography.php</a></td>
            </tr>
            <tr class="level-aa">
                <td>1.4.10 Reflow</td>
                <td>AA</td>
                <td>Content can be presented without loss of information at 400% zoom.</td>
                <td><a href="zoom_responsive.php">zoom_responsive.php</a> (Horizontal scrolling)</td>
            </tr>
            <tr class="level-aa">
                <td>1.4.11 Non-text Contrast</td>
                <td>AA</td>
                <td>Contrast ratio of at least 3:1 for UI components/graphics.</td>
                <td><a href="contrast.php">contrast.php</a> (UI borders/icons)</td>
            </tr>
            <tr class="level-aa">
                <td>1.4.12 Text Spacing</td>
                <td>AA</td>
                <td>Content supports increased text spacing without loss of content.</td>
                <td><a href="typography.php">typography.php</a> (Fixed heights)</td>
            </tr>
            <tr class="level-aa">
                <td>1.4.13 Content on Hover or Focus</td>
                <td>AA</td>
                <td>Additional content is dismissible, hoverable, and persistent.</td>
                <td><a href="interactive.php">interactive.php</a> (Mouseover only info)</td>
            </tr>

            <!-- Principle 2: Operable -->
            <tr class="level-a">
                <td>2.1.1 Keyboard</td>
                <td>A</td>
                <td>All functionality is operable through a keyboard interface.</td>
                <td>
                    <a href="interactive.php">interactive.php</a> (Mouse-only events)<br>
                    <a href="keyboard_traps.php">keyboard_traps.php</a>
                </td>
            </tr>
            <tr class="level-a">
                <td>2.1.2 No Keyboard Trap</td>
                <td>A</td>
                <td>No keyboard trap.</td>
                <td><a href="keyboard_traps.php">keyboard_traps.php</a></td>
            </tr>
            <tr class="level-aaa">
                <td>2.1.3 Keyboard (No Exception)</td>
                <td>AAA</td>
                <td>All functionality is operable through a keyboard interface (no exceptions).</td>
                <td><a href="interactive.php">interactive.php</a></td>
            </tr>
            <tr class="level-a">
                <td>2.1.4 Character Key Shortcuts</td>
                <td>A</td>
                <td>Mechanism to turn off, remap, or activate shortcuts.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-a">
                <td>2.2.1 Timing Adjustable</td>
                <td>A</td>
                <td>Mechanism to turn off, adjust, or extend time limits.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-a">
                <td>2.2.2 Pause, Stop, Hide</td>
                <td>A</td>
                <td>Mechanism to pause, stop, or hide moving/blinking content.</td>
                <td><a href="flashing.php">flashing.php</a> (Marquee, Moving text)</td>
            </tr>
            <tr class="level-aaa">
                <td>2.2.3 No Timing</td>
                <td>AAA</td>
                <td>No timing is an essential part of the event.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>2.2.4 Interruptions</td>
                <td>AAA</td>
                <td>Interruptions can be postponed or suppressed.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>2.2.5 Re-authenticating</td>
                <td>AAA</td>
                <td>Session expiration data preserved.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>2.2.6 Timeouts</td>
                <td>AAA</td>
                <td>Users warned of inactivity duration.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-a">
                <td>2.3.1 Three Flashes or Below Threshold</td>
                <td>A</td>
                <td>No more than three flashes in any one second period.</td>
                <td><a href="flashing.php">flashing.php</a></td>
            </tr>
            <tr class="level-aaa">
                <td>2.3.2 Three Flashes</td>
                <td>AAA</td>
                <td>Web pages do not contain anything that flashes more than three times.</td>
                <td><a href="flashing.php">flashing.php</a></td>
            </tr>
            <tr class="level-aaa">
                <td>2.3.3 Animation from Interactions</td>
                <td>AAA</td>
                <td>Motion animation triggered by interaction can be disabled.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-a">
                <td>2.4.1 Bypass Blocks</td>
                <td>A</td>
                <td>Mechanism to bypass blocks of repeated content.</td>
                <td><a href="index.php">index.php</a> (Missing Skip Link)</td>
            </tr>
            <tr class="level-a">
                <td>2.4.2 Page Titled</td>
                <td>A</td>
                <td>Web pages have titles that describe topic or purpose.</td>
                <td><a href="index.php">index.php</a> (Bad Title)</td>
            </tr>
            <tr class="level-a">
                <td>2.4.3 Focus Order</td>
                <td>A</td>
                <td>Focusable components receive focus in an order that preserves meaning.</td>
                <td><a href="focus_order.php">focus_order.php</a></td>
            </tr>
            <tr class="level-a">
                <td>2.4.4 Link Purpose (In Context)</td>
                <td>A</td>
                <td>Purpose of each link can be determined from the link text alone or context.</td>
                <td><a href="links.php">links.php</a> ("Click Here")</td>
            </tr>
            <tr class="level-aa">
                <td>2.4.5 Multiple Ways</td>
                <td>AA</td>
                <td>More than one way is available to locate a Web page.</td>
                <td>(Sitemap and Nav provided - Passes)</td>
            </tr>
            <tr class="level-aa">
                <td>2.4.6 Headings and Labels</td>
                <td>AA</td>
                <td>Headings and labels describe topic or purpose.</td>
                <td><a href="structure.php">structure.php</a> (Fake Headings)</td>
            </tr>
            <tr class="level-aa">
                <td>2.4.7 Focus Visible</td>
                <td>AA</td>
                <td>Keyboard focus indicator is visible.</td>
                <td><a href="focus_order.php">focus_order.php</a> (Outline: none)</td>
            </tr>
            <tr class="level-aaa">
                <td>2.4.8 Location</td>
                <td>AAA</td>
                <td>Information about the user's location within the Web pages.</td>
                <td>(Simple Breadcrumbs not strictly implemented)</td>
            </tr>
            <tr class="level-aaa">
                <td>2.4.9 Link Purpose (Link Only)</td>
                <td>AAA</td>
                <td>Purpose of each link identified from link text alone.</td>
                <td><a href="links.php">links.php</a> ("Click Here" fails this)</td>
            </tr>
            <tr class="level-aaa">
                <td>2.4.10 Section Headings</td>
                <td>AAA</td>
                <td>Section headings are used to organize the content.</td>
                <td><a href="structure.php">structure.php</a> (Missing headings)</td>
            </tr>
            <tr class="level-aa">
                <td>2.4.11 Focus Not Obscured (Minimum)</td>
                <td>AA</td>
                <td>Focus is not fully obscured by other content.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>2.4.12 Focus Not Obscured (Enhanced)</td>
                <td>AAA</td>
                <td>Focus is not obscured by other content.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>2.4.13 Focus Appearance</td>
                <td>AAA</td>
                <td>Focus indicator has sufficient size and contrast.</td>
                <td><a href="focus_order.php">focus_order.php</a> (Outline: none)</td>
            </tr>
            <tr class="level-a">
                <td>2.5.1 Pointer Gestures</td>
                <td>A</td>
                <td>All functionality operable with single pointer without path-based gestures.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-a">
                <td>2.5.2 Pointer Cancellation</td>
                <td>A</td>
                <td>Completion of function is on the up-event.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-a">
                <td>2.5.3 Label in Name</td>
                <td>A</td>
                <td>Label includes text presented visually.</td>
                <td><a href="interactive.php">interactive.php</a> (Implied labels)</td>
            </tr>
            <tr class="level-a">
                <td>2.5.4 Motion Actuation</td>
                <td>A</td>
                <td>Functionality not dependent on device motion.</td>
                <td><a href="orientation.php">orientation.php</a> (Simulated motion lock/shake)</td>
            </tr>
            <tr class="level-aaa">
                <td>2.5.5 Target Size</td>
                <td>AAA</td>
                <td>Target size is at least 44x44 CSS pixels.</td>
                <td><a href="typography.php">typography.php</a> (Tiny text links)</td>
            </tr>
            <tr class="level-aaa">
                <td>2.5.6 Concurrent Input Mechanisms</td>
                <td>AAA</td>
                <td>Web content does not restrict use of input modalities.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aa">
                <td>2.5.7 Dragging Movements</td>
                <td>AA</td>
                <td>Dragging movements have single pointer alternative.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aa">
                <td>2.5.8 Target Size (Minimum)</td>
                <td>AA</td>
                <td>Target size is at least 24x24 CSS pixels.</td>
                <td><a href="typography.php">typography.php</a></td>
            </tr>

            <!-- Principle 3: Understandable -->
            <tr class="level-a">
                <td>3.1.1 Language of Page</td>
                <td>A</td>
                <td>Default human language is programmatically determined.</td>
                <td><a href="language.php">language.php</a></td>
            </tr>
            <tr class="level-aa">
                <td>3.1.2 Language of Parts</td>
                <td>AA</td>
                <td>Human language of parts can be programmatically determined.</td>
                <td><a href="language.php">language.php</a></td>
            </tr>
            <tr class="level-aaa">
                <td>3.1.3 Unusual Words</td>
                <td>AAA</td>
                <td>Mechanism for identifying specific definitions.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>3.1.4 Abbreviations</td>
                <td>AAA</td>
                <td>Mechanism for identifying expanded form.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>3.1.5 Reading Level</td>
                <td>AAA</td>
                <td>Version requiring lower reading ability available.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>3.1.6 Pronunciation</td>
                <td>AAA</td>
                <td>Mechanism for identifying specific pronunciation.</td>
                <td class="not-tested">-</td>
            </tr>
             <tr class="level-a">
                <td>3.2.1 On Focus</td>
                <td>A</td>
                <td>Component does not initiate a change of context on focus.</td>
                <td><a href="keyboard_traps.php">keyboard_traps.php</a> (Focus trap/loop)</td>
            </tr>
            <tr class="level-a">
                <td>3.2.2 On Input</td>
                <td>A</td>
                <td>Changing setting does not automatically cause change of context.</td>
                <td><a href="forms_advanced.php">forms_advanced.php</a> (Context change not explicitly mocked but
                    common in advanced forms)</td>
            </tr>
            <tr class="level-aa">
                <td>3.2.3 Consistent Navigation</td>
                <td>AA</td>
                <td>Navigation mechanisms occur in same relative order.</td>
                <td>(Navigation is consistent - Passes)</td>
            </tr>
            <tr class="level-aa">
                <td>3.2.4 Consistent Identification</td>
                <td>AA</td>
                <td>Components with same functionality are identified consistently.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>3.2.5 Change on Request</td>
                <td>AAA</td>
                <td>Changes of context are initiated only by user request.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-a">
                <td>3.2.6 Consistent Help</td>
                <td>A</td>
                <td>If help is available, it is in same relative location.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-a">
                <td>3.3.1 Error Identification</td>
                <td>A</td>
                <td>Input error is identified and described in text.</td>
                <td><a href="forms_advanced.php">forms_advanced.php</a> (Disconnected errors)</td>
            </tr>
            <tr class="level-a">
                <td>3.3.2 Labels or Instructions</td>
                <td>A</td>
                <td>Labels or instructions are provided.</td>
                <td><a href="forms_basic.php">forms_basic.php</a></td>
            </tr>
            <tr class="level-aa">
                <td>3.3.3 Error Suggestion</td>
                <td>AA</td>
                <td>Suggestions for correction are provided.</td>
                <td><a href="forms_advanced.php">forms_advanced.php</a> (Poor error messages)</td>
            </tr>
            <tr class="level-aa">
                <td>3.3.4 Error Prevention (Legal, Financial, Data)</td>
                <td>AA</td>
                <td>Reversible, checked, or confirmed.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>3.3.5 Help</td>
                <td>AAA</td>
                <td>Context-sensitive help is available.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>3.3.6 Error Prevention (All)</td>
                <td>AAA</td>
                <td>Reversible, checked, or confirmed (all data).</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-a">
                <td>3.3.7 Redundant Entry</td>
                <td>A</td>
                <td>Information previously entered is auto-populated or available.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aa">
                <td>3.3.8 Accessible Authentication (Minimum)</td>
                <td>AA</td>
                <td>Cognitive function test not required or alternative available.</td>
                <td class="not-tested">-</td>
            </tr>
            <tr class="level-aaa">
                <td>3.3.9 Accessible Authentication (Enhanced)</td>
                <td>AAA</td>
                <td>No cognitive function test required.</td>
                <td class="not-tested">-</td>
            </tr>

            <!-- Principle 4: Robust -->
            <tr class="level-a">
                <td>4.1.1 Parsing (Obsolete)</td>
                <td>A</td>
                <td>(Note: Obsolete in WCAG 2.2) Elements have complete start and end tags, correct nesting, etc.</td>
                <td><a href="parsing.php">parsing.php</a></td>
            </tr>
            <tr class="level-a">
                <td>4.1.2 Name, Role, Value</td>
                <td>A</td>
                <td>Name and role can be programmatically determined.</td>
                <td><a href="aria_bad.php">aria_bad.php</a></td>
            </tr>
            <tr class="level-aa">
                <td>4.1.3 Status Messages</td>
                <td>AA</td>
                <td>Status messages can be programmatically determined without focus.</td>
                <td class="not-tested">-</td>
            </tr>
        </tbody>
    </table>

<?php include 'includes/footer.php'; ?>