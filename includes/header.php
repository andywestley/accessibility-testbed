<!DOCTYPE html>
<html lang="en">
<head>
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
    
    <!-- Non-semantic navigation maintained -->
    <div class="d-flex flex-wrap gap-2 p-3 mb-4 bg-light border-bottom shadow-sm align-items-center justify-content-center">
        <div><a href="index.php" class="btn btn-primary">Home</a></div>
        <div><a href="images.php" class="btn btn-outline-secondary btn-sm">Images</a></div>
        <div><a href="structure.php" class="btn btn-outline-secondary btn-sm">Structure</a></div>
        <div><a href="tables.php" class="btn btn-outline-secondary btn-sm">Tables</a></div>
        <div><a href="links.php" class="btn btn-outline-secondary btn-sm">Links</a></div>
        <div><a href="media.php" class="btn btn-outline-secondary btn-sm">Media</a></div>
        <div><a href="typography.php" class="btn btn-outline-secondary btn-sm">Typography</a></div>
        <div><a href="forms_basic.php" class="btn btn-outline-secondary btn-sm">Basic Forms</a></div>
        <div><a href="forms_advanced.php" class="btn btn-outline-secondary btn-sm">Advanced Forms</a></div>
        <div><a href="keyboard_traps.php" class="btn btn-outline-secondary btn-sm">Keyboard Traps</a></div>
        <div><a href="focus_order.php" class="btn btn-outline-secondary btn-sm">Focus Order</a></div>
        <div><a href="interactive.php" class="btn btn-outline-secondary btn-sm">Interactive</a></div>
        <div><a href="contrast.php" class="btn btn-outline-secondary btn-sm">Contrast</a></div>
        <div><a href="zoom_responsive.php" class="btn btn-outline-secondary btn-sm">Zoom/Responsive</a></div>
        <div><a href="flashing.php" class="btn btn-outline-secondary btn-sm">Flashing</a></div>
        <div><a href="orientation.php" class="btn btn-outline-secondary btn-sm">Orientation</a></div>
        <div><a href="aria_bad.php" class="btn btn-outline-secondary btn-sm">Bad ARIA</a></div>
        <div><a href="parsing.php" class="btn btn-outline-secondary btn-sm">Parsing</a></div>
        <div><a href="language.php" class="btn btn-outline-secondary btn-sm">Language</a></div>
        <div><a href="iframes.php" class="btn btn-outline-secondary btn-sm">Iframes</a></div>
    </div>

    <!-- Main Content Container -->
    <div class="container my-5">
