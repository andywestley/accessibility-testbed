<?php
$pageTitle = 'Media';

include 'includes/header.php';
?>


    <h1>Media Issues</h1>

    <h2>Video Missing Captions</h2>
    <!-- Video element without track -->
    <video controls width="250">
        <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4" type="video/mp4">
        Sorry, your browser doesn't support embedded videos.
    </video>

    <h2>Audio Autoplay</h2>
    <!-- Autoplay enabled, no controls initially (mockup of bad practice) -->
    <!-- Commented out to not actually annoy the developer while testing, but code presence is enough for validatin tools -->
    <!-- <audio autoplay src="https://interactive-examples.mdn.mozilla.net/media/cc0-audio/t-rex-roar.mp3"></audio> -->
    <p>Imagine an audio file playing automatically here.</p>
    <audio controls>
        <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-audio/t-rex-roar.mp3" type="audio/mp3">
    </audio>
    <p>(The above audio is fine, but we are simulating the 'Autoplay' violation by inspecting the code logic if we were
        checking attributes).</p>

    <!-- Actual autoplay for tool detection -->
    <audio autoplay muted>
        <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-audio/t-rex-roar.mp3" type="audio/mp3">
    </audio>

    <h2>Image of Video</h2>
    <!-- User can't play this -->
    <img src="https://placehold.co/300x200?text=Play+Video" alt="Video player" />

    <h2>More Videos Missing Captions</h2>
    <video controls width="250">
        <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.webm" type="video/webm">
    </video>
    <video controls width="250" muted>
        <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4" type="video/mp4">
    </video>

    <h2>More Audio</h2>
    <audio controls>
        <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-audio/t-rex-roar.mp3" type="audio/mp3">
    </audio>

<?php include 'includes/footer.php'; ?>