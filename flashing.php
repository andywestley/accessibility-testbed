<?php
$pageTitle = 'Flashing and Animation';
$extraStyles = '<style>
        

        

        .blink {
            animation: blinker 0.5s linear infinite;
            color: red;
            font-weight: bold;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

        .moving-text {
            position: relative;
            animation: move 2s infinite alternate;
        }

        @keyframes move {
            from {
                left: 0;
            }

            to {
                left: 100px;
            }
        }
    </style>';
include 'includes/header.php';
?>


    <h1>Flashing and Animation Issues</h1>

    <h2>Blinking Content</h2>
    <p class="blink">WARNING: This text is blinking properly fast!</p>
    <div class="blink" style="background: yellow; color: black; padding: 10px;">
        HUGE BLINKING BANNER
    </div>
    <span class="blink" style="border: 2px solid red;">Blinking Border</span>

    <h2>More Marquees</h2>
    <marquee scrollamount="20">Fast scrolling marquee</marquee>
    <marquee direction="up">Vertical scrolling marquee</marquee>

    <h2>Marquee (Deprecated but works)</h2>
    <marquee>This is a marquee tag. It scrolls automatically and cannot be paused.</marquee>

    <h2>Moving Content (No Pause)</h2>
    <div class="moving-text">
        I am moving back and forth and you can't stop me.
    </div>

    <p>Since there are no controls to pause, stop, or hide the moving content above, it fails the Pause, Stop, Hide
        criterion.</p>

<?php include 'includes/footer.php'; ?>