<?php
$pageTitle = 'Zoom and Responsive';
$extraStyles = '<style>
        

        

        .fixed-container {
            width: 1200px;
            border: 1px solid blue;
            padding: 20px;
        }

        .overlap-container {
            height: 50px;
            overflow: hidden;
            border: 1px solid green;
        }
    </style>';
include 'includes/header.php';
?>


    <h1>Zoom and Responsive Issues</h1>

    <h2>Zoom Disabled</h2>
    <p>This page has <code>user-scalable=no</code> in the viewport meta tag, preventing pinch-to-zoom on mobile.</p>

    <h2>No Responsive Reflow (Horizontal Scroll)</h2>
    <div class="fixed-container">
        This container is fixed at 1200px width. On a small screen or when zoomed in, it will cause horizontal
        scrolling, violating Reflow criteria.
    </div>

    <div style="width: 1500px; background: #eee; padding: 20px;">
        Even wider fixed container (1500px).
    </div>

    <div style="width: 900px; margin-left: 500px; background: #ddd;">
        Fixed margin pushing content off screen on small devices.
    </div>

    <pre>
Fixed preformatted text that causes scroll
because it is very long and does not wrap.
    </pre>

    <h2>Content Overlap on Text Resize</h2>
    <p>The container below has a fixed height. If you increase font size, text will be cut off or overlap.</p>
    <div class="overlap-container">
        This text is inside a fixed height container. If you enlarge the font size, it should break out or be cut off,
        making it unreadable.
    </div>

<?php include 'includes/footer.php'; ?>