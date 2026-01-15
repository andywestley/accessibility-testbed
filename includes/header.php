<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Accessibility Testbed'; ?></title>
    <style>
        body {
            font-family: sans-serif;
        }

        .nav div {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
    <?php if (isset($extraStyles)) echo $extraStyles; ?>
</head>
<body>
    <div class="nav" style="border: 1px solid black; padding: 10px; margin-bottom: 20px;">
        <div><a href="index.php">Home</a></div>
        <div><a href="images.php">Images</a></div>
        <div><a href="structure.php">Structure</a></div>
        <div><a href="tables.php">Tables</a></div>
        <div><a href="links.php">Links</a></div>
        <div><a href="media.php">Media</a></div>
        <div><a href="typography.php">Typography</a></div>
        <div><a href="forms_basic.php">Basic Forms</a></div>
        <div><a href="forms_advanced.php">Advanced Forms</a></div>
        <div><a href="keyboard_traps.php">Keyboard Traps</a></div>
        <div><a href="focus_order.php">Focus Order</a></div>
        <div><a href="interactive.php">Interactive</a></div>
        <div><a href="contrast.php">Contrast</a></div>
        <div><a href="zoom_responsive.php">Zoom/Responsive</a></div>
        <div><a href="flashing.php">Flashing</a></div>
        <div><a href="orientation.php">Orientation</a></div>
        <div><a href="aria_bad.php">Bad ARIA</a></div>
        <div><a href="parsing.php">Parsing</a></div>
        <div><a href="language.php">Language</a></div>
        <div><a href="iframes.php">Iframes</a></div>
    </div>
