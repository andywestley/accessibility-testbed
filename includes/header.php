<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    // Include configuration for GTM ID if it exists
    if (file_exists(__DIR__ . '/config.php')) {
        include __DIR__ . '/config.php';
    }
    ?>
    
    <?php if (!empty($gtmId)): ?>
    <script>
        // Initialize the dataLayer
        window.dataLayer = window.dataLayer || [];

        // Create the gtag function that pushes to the dataLayer
        function gtag() {
            dataLayer.push(arguments);
        }

        // Set consent defaults
        gtag('consent', 'default', {
            analytics_storage: localStorage.getItem('silktideCookieChoice_analytics') === 'true' ? 'granted' : 'denied',
            ad_storage: localStorage.getItem('silktideCookieChoice_marketing') === 'true' ? 'granted' : 'denied',
            ad_user_data: localStorage.getItem('silktideCookieChoice_marketing') === 'true' ? 'granted' : 'denied',
            ad_personalization: localStorage.getItem('silktideCookieChoice_marketing') === 'true' ? 'granted' : 'denied',
            functionality_storage: localStorage.getItem('silktideCookieChoice_necessary') === 'true' ? 'granted' : 'denied',
            security_storage: localStorage.getItem('silktideCookieChoice_necessary') === 'true' ? 'granted' : 'denied'
        });
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo $gtmId; ?>');</script>
    <!-- End Google Tag Manager -->
    <?php endif; ?>

    <title><?php echo isset($pageTitle) ? $pageTitle : 'Accessibility Testbed'; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Keep any custom overrides if necessary, but prefer Bootstrap classes */
        .red-text { color: red; }
    </style>
    <?php if (isset($extraStyles)) echo $extraStyles; ?>
</head>
<body>
    <?php if (!empty($gtmId)): ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $gtmId; ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php endif; ?>
    
    <!-- Non-semantic navigation maintained -->
    <?php $bp = isset($basePath) ? $basePath : ''; ?>
    <div class="d-flex flex-wrap gap-2 p-3 mb-4 bg-light border-bottom shadow-sm align-items-center justify-content-center">
        <div><a href="<?php echo $bp; ?>index.php" class="btn btn-primary">Home</a></div>
        <div><a href="<?php echo $bp; ?>journeys/index.php" class="btn btn-success">Journeys</a></div>
        <div><a href="<?php echo $bp; ?>cognitive/index.php" class="btn btn-info">Cognitive</a></div>
        <div><a href="<?php echo $bp; ?>heuristics/index.php" class="btn btn-warning">Heuristics</a></div>
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
        <!-- Testbed Family Suite Switcher -->
        <div class="dropdown">
            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="suiteDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-collection-fill me-1"></i> Testbed Suite
            </button>
            <ul class="dropdown-menu dropdown-menu-dark shadow" aria-labelledby="suiteDropdown">
                <li class="dropdown-header text-uppercase small fw-bold text-white-50">Testbed Family Ecosystem</li>
                <li><a class="dropdown-item active" href="https://inaccessible.andrewwestley.co.uk/"><i class="bi bi-universal-access text-primary me-2"></i>Accessibility Testbed (WCAG 2.2)</a></li>
                <li><a class="dropdown-item" href="https://coga-testbed.andrewwestley.co.uk/" target="_blank" rel="noopener"><i class="bi bi-person-fill-check text-info me-2"></i>COGA Cognitive Testbed</a></li>
                <li><a class="dropdown-item" href="https://content-testbed.andrewwestley.co.uk/" target="_blank" rel="noopener"><i class="bi bi-file-earmark-text-fill text-warning me-2"></i>Content &amp; Readability Testbed</a></li>
                <li><a class="dropdown-item" href="https://uxusability-testbed.andrewwestley.co.uk/" target="_blank" rel="noopener"><i class="bi bi-speedometer2 text-danger me-2"></i>UX &amp; Heuristics Testbed</a></li>
            </ul>
        </div>
    </div>

    <!-- Main Content Container -->
    <div class="container my-5">
