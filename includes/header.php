<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NP5NQ7ZS');</script>
    <!-- End Google Tag Manager -->
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Accessibility Testbed'; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Keep any custom overrides if necessary, but prefer Bootstrap classes */
        .red-text { color: red; }
    </style>
    <?php if (isset($extraStyles)) echo $extraStyles; ?>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NP5NQ7ZS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <!-- Non-semantic navigation maintained -->
    <?php $bp = isset($basePath) ? $basePath : ''; ?>
    <div class="d-flex flex-wrap gap-2 p-3 mb-4 bg-light border-bottom shadow-sm align-items-center justify-content-center">
        <div><a href="<?php echo $bp; ?>index.php" class="btn btn-primary">Home</a></div>
        <div><a href="<?php echo $bp; ?>journeys/index.php" class="btn btn-success">Journeys & Interactivity</a></div>
        <div><a href="<?php echo $bp; ?>best_practices.php" class="btn btn-outline-secondary btn-sm">Best Practices</a></div>
        <div><a href="<?php echo $bp; ?>images.php" class="btn btn-outline-secondary btn-sm">Images</a></div>
        <div><a href="<?php echo $bp; ?>structure.php" class="btn btn-outline-secondary btn-sm">Structure</a></div>
        <div><a href="<?php echo $bp; ?>tables.php" class="btn btn-outline-secondary btn-sm">Tables</a></div>
        <div><a href="<?php echo $bp; ?>links.php" class="btn btn-outline-secondary btn-sm">Links</a></div>
        <div><a href="<?php echo $bp; ?>media.php" class="btn btn-outline-secondary btn-sm">Media</a></div>
        <div><a href="<?php echo $bp; ?>typography.php" class="btn btn-outline-secondary btn-sm">Typography</a></div>
        <div><a href="<?php echo $bp; ?>forms_basic.php" class="btn btn-outline-secondary btn-sm">Basic Forms</a></div>
        <div><a href="<?php echo $bp; ?>forms_advanced.php" class="btn btn-outline-secondary btn-sm">Advanced Forms</a></div>
        <div><a href="<?php echo $bp; ?>keyboard_traps.php" class="btn btn-outline-secondary btn-sm">Keyboard Traps</a></div>
        <div><a href="<?php echo $bp; ?>focus_order.php" class="btn btn-outline-secondary btn-sm">Focus Order</a></div>
        <div><a href="<?php echo $bp; ?>interactive.php" class="btn btn-outline-secondary btn-sm">Interactive</a></div>
        <div><a href="<?php echo $bp; ?>contrast.php" class="btn btn-outline-secondary btn-sm">Contrast</a></div>
        <div><a href="<?php echo $bp; ?>zoom_responsive.php" class="btn btn-outline-secondary btn-sm">Zoom/Responsive</a></div>
        <div><a href="<?php echo $bp; ?>flashing.php" class="btn btn-outline-secondary btn-sm">Flashing</a></div>
        <div><a href="<?php echo $bp; ?>orientation.php" class="btn btn-outline-secondary btn-sm">Orientation</a></div>
        <div><a href="<?php echo $bp; ?>aria_bad.php" class="btn btn-outline-secondary btn-sm">Bad ARIA</a></div>
        <div><a href="<?php echo $bp; ?>parsing.php" class="btn btn-outline-secondary btn-sm">Parsing</a></div>
        <div><a href="<?php echo $bp; ?>language.php" class="btn btn-outline-secondary btn-sm">Language</a></div>
        <div><a href="<?php echo $bp; ?>iframes.php" class="btn btn-outline-secondary btn-sm">Iframes</a></div>
    </div>

    <!-- Main Content Container -->
    <div class="container my-5">
