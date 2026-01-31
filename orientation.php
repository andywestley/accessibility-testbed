<?php
$pageTitle = 'Orientation';
$extraStyles = '<style>
        

        

        /* Force landscape visually */
        @media (orientation: portrait) {
            body {
                transform: rotate(90deg);
                transform-origin: bottom left;
                position: absolute;
                top: -100vw;
                left: 0;
                height: 100vw;
                width: 100vh;
                overflow: hidden;
            }

            .warning {
                display: block;
                background: red;
                color: white;
                padding: 20px;
                font-weight: bold;
            }
        }

        .warning {
            display: none;
        }
    </style>';
include 'includes/header.php';
?>


    <h1>Orientation Issues</h1>

    <h2>1.3.4 Orientation - Portrait/Landscape Restriction</h2>
    <div class="warning">
        Please rotate your device to Landscape mode to view this site properly. We do not support Portrait.
    </div>

    <p>This page restricts orientation by transforming the content or showing a warning message if the user is in
        portrait mode.</p>
    <p>(Note: Pure CSS lock is tricky, but often this violation is checking for the instruction "Please rotate" or apps
        that are locked).</p>

    <h2>1.3.4 Orientation - Content Hidden by Orientation</h2>
    <div class="landscape-only">
        This content is only visible in landscape mode.
    </div>
    <style>
        @media (orientation: portrait) {
            .landscape-only {
                display: none;
            }
        }
    </style>

<?php include 'includes/footer.php'; ?>