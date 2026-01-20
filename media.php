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

    <hr>
    <h2>Missing Alternatives (Level A/AA/AAA)</h2>
    
    <div class="row">
        <div class="col-md-6">
            <h3>1.2.4 Captions (Live) & 1.2.9 Audio-only (Live)</h3>
            <div style="border: 1px solid #ccc; padding: 20px; text-align: center; background: #000; color: #fff;">
                <p>[ LIVE STREAM PLACEHOLDER ]</p>
                <p>Status: <strong>ON AIR</strong></p>
                <p><em>(Simulated Live Event - No Captions Available)</em></p>
            </div>
            <p><strong>Violations:</strong> 
                <br>1.2.4: No real-time captions provided.
                <br>1.2.9: No live transcript for audio-only content.
            </p>
        </div>
        
        <div class="col-md-6">
            <h3>Prerecorded Video Issues</h3>
            <video controls width="100%">
                <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4" type="video/mp4">
            </video>
            <p><strong>Violations associated with this video:</strong></p>
            <ul>
                <li><strong>1.2.3 & 1.2.5 Audio Description:</strong> Visual details (color, movement) are not described in a separate audio track.</li>
                <li><strong>1.2.6 Sign Language (AAA):</strong> No sign language interpretation designated.</li>
                <li><strong>1.2.7 Extended Audio Description (AAA):</strong> Video does not pause to allow for extensive description.</li>
                <li><strong>1.2.8 Media Alternative (AAA):</strong> No full text transcript provided below.</li>
            </ul>
        </div>
    </div>

    <hr>
    <h2>Audio Quality (Level AAA)</h2>
    <h3>1.4.7 Low or No Background Audio</h3>
    <p>This audio clip contains speech with loud background music (simulated), making it hard to hear for users with hard of hearing, with no option to turn off the background.</p>
    <audio controls>
        <!-- Using same file but labeling it as the violation for demonstration -->
        <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-audio/t-rex-roar.mp3" type="audio/mp3">
    </audio>

<?php include 'includes/footer.php'; ?>