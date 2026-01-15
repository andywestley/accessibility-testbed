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

<?php include 'includes/footer.php'; ?>