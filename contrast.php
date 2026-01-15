<?php
$pageTitle = 'Contrast and Color';
$extraStyles = '<style>
        

        

        .low-contrast {
            color: #999;
            background-color: #fff;
        }

        /* 2.85:1, fail AA */
        .very-low-contrast {
            color: #ccc;
            background-color: #fff;
        }

        /* 1.6:1, fail A */
        .color-info {
            font-weight: bold;
        }

        .bg-image-text {
            background-image: url("https://placehold.co/300x100/000000/ffffff?text=Busy");
            color: white;
            padding: 20px;
        }
    </style>';
include 'includes/header.php';
?>


    <h1>Contrast and Color Issues</h1>

    <h2>Low Contrast Text</h2>
    <p class="low-contrast">This text has a contrast ratio of about 2.85:1, which fails WCAG AA.</p>
    <p class="very-low-contrast">This text is extremely hard to read (1.6:1).</p>

    <h2>More Low Contrast Examples</h2>
    <p style="color: #bbb; background: white;">Gray on White (Too light)</p>
    <p style="color: #aaa; background: white;">Gray on White (Too light)</p>
    <p style="color: #888; background: #333;">Gray on Dark Gray (Fail)</p>
    <p style="color: red; background: blue;">Red on Blue (Vibrating, hard to read)</p>
    <p style="color: #00ff00; background: #ffffff;">Light Green on White</p>
    <p style="color: #ffff00; background: #ffffff;">Yellow on White (Impossible)</p>
    <p style="color: #00ffff; background: #ffffff;">Cyan on White</p>
    <p style="color: #ff00ff; background: #ffffff;">Magenta on White</p>
    <p style="color: #e0e0e0; background: #ffffff;">Very Light Gray on White</p>

    <h2>Color as Information</h2>
    <p>To accept the agreement, press the <span style="color: green; font-weight: bold;">green</span> button.</p>
    <div>
        <button style="background: green; color: white;">Accept</button>
        <button style="background: red; color: white;">Decline</button>
    </div>

    <h2>Text Over Busy Background</h2>
    <div class="bg-image-text">
        Text over a background image that makes it hard to read.
    </div>

    <h2>Link Color Only</h2>
    <p>Links are distinguished only by color (no underline) and have low contrast with surrounding text.</p>
    <style>
        a.bad-link {
            text-decoration: none;
            color: #337ab7;
        }

        .text-surround {
            color: #333;
        }
    </style>
    <p class="text-surround">Please visit <a href="#" class="bad-link">our website</a> for more.</p>

<?php include 'includes/footer.php'; ?>