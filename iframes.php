<?php
$pageTitle = 'Frames and Iframes';

include 'includes/header.php';
?>


    <h1>Iframes Issues</h1>

    <h2>4.1.2 Name, Role, Value - Iframe Missing Title</h2>
    <iframe src="index.html" height="200" width="300"></iframe>

    <h2>4.1.2 Name, Role, Value - Empty Iframe (Tracking Pixel?)</h2>
    <!-- No title, no aria-hidden -->
    <iframe src="" height="1" width="1"></iframe>

    <h2>4.1.2 Name, Role, Value - More Missing Titles</h2>
    <iframe src="about:blank" height="100" width="100"></iframe>
    <iframe src="about:blank" height="100" width="100"></iframe>
    <iframe src="about:blank" height="100" width="100"></iframe>
    <iframe src="http://example.com" height="200" width="300"></iframe>
    <iframe src="http://example.org" height="200" width="300"></iframe>

<?php include 'includes/footer.php'; ?>