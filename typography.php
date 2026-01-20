<?php
$pageTitle = 'Typography';
$extraStyles = '<style>
        

        

        .tiny-text {
            font-size: 10px;
        }

        .fixed-units {
            font-size: 14px;
            line-height: 14px;
            width: 500px;
        }

        .justified {
            text-align: justify;
        }

        .all-caps {
            text-transform: uppercase;
        }

        .line-height-bad {
            line-height: 0.8;
        }
    </style>';
include 'includes/header.php';
?>


    <h1>Typography Issues</h1>

    <h2>1.4.3 Contrast (Minimum) / 1.4.12 - Tiny Text</h2>
    <p class="tiny-text">This text is 10px, which is too small for many users to read comfortably.</p>
    <p class="tiny-text">Another tiny paragraph. Hard to read.</p>
    <p style="font-size: 8px;">Even smaller text (8px). Very bad.</p>
    <p style="font-size: 9px; color: #666;">Tiny gray text. Contrast and size fail.</p>

    <h2>1.4.4 Resize text - Fixed Units Container</h2>
    <div class="fixed-units" style="border: 1px solid red;">
        This container has a fixed width of 500px and font size in px. It won't adapt to user settings.
        If the user sets a larger default font, this might break.
    </div>
    <div class="fixed-units" style="width: 800px; border: 1px solid blue; margin-top: 10px;">
        Another wide fixed container (800px).
    </div>

    <h2>1.4.8 Visual Presentation (AAA) - Justified Text</h2>
    <p class="justified" style="width: 300px;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>

    <h2>1.4.12 Text Spacing - Bad Line Height</h2>
    <p class="line-height-bad">
        This text has a line-height of 0.8. The lines will crush into each other and become unreadable.
        Ascenders and descenders will overlap significantly.
    </p>

    <h2>1.4.8 Visual Presentation (AAA) - All Caps</h2>
    <p class="all-caps">This text is in all caps, which can be harder to read for people with dyslexia.</p>

    <h2>1.4.5 Images of Text - Text As Image</h2>
    <img src="https://placehold.co/300x50?text=This+is+text+in+image" alt="This is text in image" />
    
    <h3>1.4.9 Images of Text (No Exception) (AAA)</h3>
    <p>This criterion restricts the use of images of text even more than AA (which allows it if customizable). The image below contains text that could be CSS, used for a heading.</p>
    <img src="https://placehold.co/400x60?text=ACCESSIBILITY+TESTBED" alt="Accessibility Testbed" style="max-width: 100%;">
    <p class="small text-muted">Violation: Using an image for the main heading text instead of web fonts.</p>

<?php include 'includes/footer.php'; ?>