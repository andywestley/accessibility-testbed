<?php
$pageTitle = 'Images';

include 'includes/header.php';
?>


    <h1>Image Accessibility Issues</h1>

    <h2>Missing Alt Text</h2>
    <!-- Missing alt attribute entirely -->
    <img src="https://placehold.co/200x200" />
    <img src="https://placehold.co/201x200" />
    <img src="https://placehold.co/202x200" />
    <img src="https://placehold.co/203x200" />
    <img src="https://placehold.co/204x200" /> <!-- 5 missing alts -->

    <h2>More Bad Alt Text</h2>
    <img src="https://placehold.co/300x300/jpg" alt="photo.jpg" />
    <img src="https://placehold.co/301x300/png" alt="image.png" />
    <img src="https://placehold.co/302x300" alt="picture" />
    <img src="https://placehold.co/303x300" alt="graphic" />
    <img src="https://placehold.co/304x300" alt="bullet point" />

    <h2>Bad Alt Text</h2>
    <!-- file name as alt -->
    <img src="https://placehold.co/200x200/png" alt="image.png" />

    <!-- "image of" redundancy -->
    <img src="https://placehold.co/200x200" alt="Image of a placeholder" />

    <h2>Decorative Image with Alt</h2>
    <!-- Decorative image should have empty alt, but has description -->
    <img src="https://placehold.co/10x10" alt="Spacer" />

    <h2>Complex Image without Description</h2>
    <!-- Chart placeholder without long description -->
    <img src="https://placehold.co/400x300?text=Complex+Chart" alt="Bar chart showing Q1 growth" />
    <p>The chart above shows data.</p>

    <h2>Image Map Missing Alt</h2>
    <img src="https://placehold.co/300x100" usemap="#examplemap" alt="Map" />
    <map name="examplemap">
        <area shape="rect" coords="0,0,100,100" href="#" /> <!-- Missing alt -->
    </map>

<?php include 'includes/footer.php'; ?>