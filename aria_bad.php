<?php
$pageTitle = 'Bad ARIA';

include 'includes/header.php';
?>


    <h1>ARIA Misuse</h1>

    <h2>ARIA Hidden on Focusable Element</h2>
    <p>The button below is hidden from screen readers but focusable by keyboard.</p>
    <button aria-hidden="true">You can tab to me but I am silent</button>

    <h2>Presentation Role on Semantic Container</h2>
    <p>The list below has role presentation, removing list semantics.</p>
    <ul role="presentation">
        <li>Item 1</li>
        <li>Item 2</li>
    </ul>

    <h2>Invalid Role</h2>
    <div role="foo">This role does not exist.</div>

    <h2>Conflicting Attributes</h2>
    <div role="checkbox" aria-checked="true" aria-disabled="true">
        I am a disabled checkbox.
    </div>
    <!-- Progress bar with min > max -->
    <div role="progressbar" aria-valuenow="50" aria-valuemin="100" aria-valuemax="0">
        Broken progress bar
    </div>

    <h2>Redundant ARIA</h2>
    <button role="button">I am a button with role=button</button>
    <div role="heading" aria-level="2">I am a div with role heading</div>

    <h2>More ARIA Hidden Focusables</h2>
    <a href="#" aria-hidden="true">Hidden Link 1</a><br>
    <a href="#" aria-hidden="true">Hidden Link 2</a><br>
    <input type="text" aria-hidden="true" value="Hidden Input" />
    <button aria-hidden="true" onclick="alert('hidden')">Hidden Button</button>

    <h2>More Invalid Roles</h2>
    <div role="note">Role note is valid but often misused</div>
    <div role="container">Invalid role 'container'</div>
    <div role="text">Role 'text' is not standard</div>
    <div role="imag">Misspelled role 'image' (imag)</div>

    <h2>More Conflicting Attributes</h2>
    <button aria-disabled="true">Active Button labeled disabled</button>
    <div role="radio" aria-checked="mixed">Radio can't be mixed</div>

<?php include 'includes/footer.php'; ?>