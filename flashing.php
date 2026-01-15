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
        
        .parallax {
            height: 200px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("https://placehold.co/800x400/orange/white?text=Parallax+Animation");
            margin-top: 20px;
        }

        /* 2.3.3 Animation from Interactions - Motion that cannot be disabled */
        .mouse-follower {
            width: 50px;
            height: 50px;
            background: blue;
            position: absolute;
            transition: all 0.1s;
            pointer-events: none;
            opacity: 0.5;
            z-index: 9999;
        }
    </style>';
// Violation: 2.2.1 Timing Adjustable - Meta Refresh used (automatic reload)
$extraStyles .= '<meta http-equiv="refresh" content="10">';
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

    <h2>Motion Animation (2.3.3)</h2>
    <div class="parallax">
        PARALLAX SCROLLING (Cannot be disabled)
    </div>

    <!-- Mouse follower script -->
    <div id="follower" class="mouse-follower"></div>
    <script>
        document.addEventListener('mousemove', function(e) {
            const follower = document.getElementById('follower');
            follower.style.left = e.pageX + 'px';
            follower.style.top = e.pageY + 'px';
        });
    </script>

<?php include 'includes/footer.php'; ?>