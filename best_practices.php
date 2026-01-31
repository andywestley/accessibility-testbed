<?php
$pageTitle = 'Best Practices & 508';
$extraStyles = '<style>
        .deprecated-center {
            text-align: center; 
        }
        /* Violation: Viewport lock */
        /* Note: In a real scenario this goes in <head>, injecting here for demonstation */
    </style>
    <meta name="viewport" content="width=device-width, user-scalable=no">';

include 'includes/header.php';
?>

    <h1>Best Practices & Section 508</h1>

    <div role="region">
        <!-- Violation: Region without label -->
        <h2>Best Practice - Landmarks & Regions</h2>
        <p>This section is wrapped in a <code>role="region"</code> but has no <code>aria-label</code> or <code>aria-labelledby</code>.</p>
    </div>

    <main>
        <h2>Best Practice - Duplicate Main</h2>
        <p>This is a second <code>&lt;main&gt;</code> element on the page (the first is in the header/layout), which is a violation.</p>
    </main>

    <h2>Best Practice - Duplicate Accesskeys</h2>
    <p>Both buttons below share the same accesskey 's'.</p>
    <button accesskey="s" onclick="alert('Button 1')">Save (Accesskey 's')</button>
    <button accesskey="s" onclick="alert('Button 2')">Search (Accesskey 's')</button>

    <h2>Best Practice - Deprecated Tags</h2>
    <!-- Violation: Uses deprecated HTML tags -->
    <center>
        <font size="5" color="red">This is centered text using &lt;center&gt; and &lt;font&gt; tags.</font>
    </center>
    <br>
    <marquee>This is a marquee tag (also fails WCAG moving content).</marquee>

    <h2>Section 508 (1194.22) - Redundant Links</h2>
    <p>The image link and text link below go to the same place but are separate links.</p>
    <a href="index.php">
        <img src="https://placehold.co/50x50" alt="Home">
    </a>
    <a href="index.php">Home</a>

    <h2>Best Practice - Orphaned Content</h2>
    <p>This content is outside of any landmarks (if we hadn't wrapped the whole body in main/header in the template).</p>

    <h2>Consistent Help (3.2.6) (Level A)</h2>
    <p>If you have help (like a contact link or chatbot) on multiple pages, it must be in the same location. On this page, we've put the "Help" link in a weird spot compared to the footer.</p>
    <div style="position: absolute; top: 50px; left: 0; border: 1px solid red; padding: 5px;">
        <a href="#">Help Center (Inconsistent Location)</a>
    </div>

<?php include 'includes/footer.php'; ?>
