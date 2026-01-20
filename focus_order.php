<?php
$pageTitle = 'Focus Order';
$extraStyles = '<style>
        

        

        .flex-container {
            display: flex;
            flex-direction: row;
        }

        .order-1 {
            order: 3;
        }

        .order-2 {
            order: 1;
        }

        .order-3 {
            order: 2;
        }
    </style>';
include 'includes/header.php';
?>


    <h1>Focus Order Issues</h1>

    <h2>Positive Tabindex</h2>
    <!-- Tabindex > 0 disrupts natural flow -->
    <a href="#" tabindex="4">Link 4 (Last)</a><br>
    <a href="#" tabindex="1">Link 1 (First)</a><br>
    <a href="#" tabindex="3">Link 3 (Third)</a><br>
    <a href="#" tabindex="2">Link 2 (Second)</a><br>
    <a href="#" tabindex="0">Link 0 (Normal flow, but comes after positives usually)</a>

    <h3>More Positive Tabindex Chaos</h3>
    <button tabindex="10">Order 10</button>
    <button tabindex="5">Order 5</button>
    <button tabindex="9">Order 9</button>
    <button tabindex="6">Order 6</button>
    <button tabindex="8">Order 8</button>
    <button tabindex="7">Order 7</button>

    <h2>More Flex Visual Order</h2>
    <div class="flex-container" style="flex-direction: row-reverse;">
        <button>Item A (Visual Last, DOM First)</button>
        <button>Item B (Visual Middle, DOM Second)</button>
        <button>Item C (Visual First, DOM Third)</button>
    </div>

    <h2>Visual Order vs DOM Order (Flexbox)</h2>
    <div class="flex-container">
        <!-- Visual order: Item 2, Item 3, Item 1 -->
        <!-- DOM Focus order: Item 1, Item 2, Item 3 -->
        <button class="order-1">Item 1 (DOM first, Visual last)</button>
        <button class="order-2">Item 2 (DOM second, Visual first)</button>
        <button class="order-3">Item 3 (DOM third, Visual second)</button>
    </div>

    <h2>No Focus Indicator</h2>
    <style>
        .no-focus:focus {
            outline: none;
        }
    </style>
    <button class="no-focus">Button with outline: none</button>

    <h2>Focus Obscured (2.4.11)</h2>
    <p>Scroll down. The sticky banner below will cover focused elements at the bottom of the viewport.</p>
    <a href="#">Link 1 (Might be covered)</a><br>
    <a href="#">Link 2 (Might be covered)</a><br>
    <a href="#">Link 3 (Might be covered)</a><br>
    <br><br><br>

    <div style="position: fixed; bottom: 0; left: 0; width: 100%; height: 100px; background: rgba(0,0,0,0.9); color: white; padding: 20px; z-index: 9999;">
        <h3>Sticky Banner (Obscures Content)</h3>
        <button>Close (Not working)</button>
    </div>

    <br><br><br><br>

    <h2>Focus Appearance (AAA)</h2>

    <h3>2.4.12 Focus Not Obscured (Enhanced) (AAA)</h3>
    <p>While AA allows partial obscurement, AAA requires the focused item to be <strong>fully</strong> visible. The sticky banner above fails both if it covers the whole link, but even partial coverage is a fail here.</p>

    <h3>2.4.13 Focus Appearance (AAA)</h3>
    <p>The standard browser focus ring often passes AA. AAA requires a focus indicator of sufficient size and contrast (specifically at least 2px thick with 3:1 contrast against background AND the focused component).</p>
    <style>
        .bad-focus-aaa:focus {
            outline: 1px dotted #888; /* Too thin, low contrast */
            outline-offset: 1px;
        }
    </style>
    <button class="bad-focus-aaa">Weak Focus Indicator (AAA Fail)</button>
    <p>The button above has a 1px dotted gray outline. This fails AAA which usually requires a more solid, thicker area of contrast.</p>

<?php include 'includes/footer.php'; ?>