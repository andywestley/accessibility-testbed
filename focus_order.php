<?php
$pageTitle = 'Focus Order & Visible Focus Indicator';
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

$currentCriterion = [
    'rule' => 'WCAG 2.4.3 / 2.4.7',
    'name' => 'Focus Order & Visible Focus Indicator',
    'level' => 'A',
    'citation' => 'WCAG 2.2 SC 2.4.3 & 2.4.7: If a Web page can be navigated sequentially, focusable components receive focus in an order that preserves meaning.',
    'trigger_summary' => 'Positive tabindex attributes disrupting natural tab order, and CSS outline:none stripping visible focus rings.'
];
include 'includes/diagnostic_header.php';
?>
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">2.4.3 Focus Order - Positive Tabindex</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
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
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.3.2 Meaningful Sequence - More Flex Visual Order</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <div class="flex-container" style="flex-direction: row-reverse;">
        <button>Item A (Visual Last, DOM First)</button>
        <button>Item B (Visual Middle, DOM Second)</button>
        <button>Item C (Visual First, DOM Third)</button>
    </div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.3.2 Meaningful Sequence - Visual Order vs DOM Order (Flexbox)</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <div class="flex-container">
        <!-- Visual order: Item 2, Item 3, Item 1 -->
        <!-- DOM Focus order: Item 1, Item 2, Item 3 -->
        <button class="order-1">Item 1 (DOM first, Visual last)</button>
        <button class="order-2">Item 2 (DOM second, Visual first)</button>
        <button class="order-3">Item 3 (DOM third, Visual second)</button>
    </div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">2.4.7 Focus Visible - No Focus Indicator</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <style>
        .no-focus:focus {
            outline: none;
        }
    </style>
    <button class="no-focus">Button with outline: none</button>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">2.4.11 Focus Not Obscured (Minimum) - Sticky Banner</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
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
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">Focus Appearance (AAA)</h2>
        <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 px-2 py-1"><i class="bi bi-info-circle-fill me-1"></i> Level AAA Trigger</span>
    </div>
    <div class="card-body">
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
    </div>
</div>


<?php include 'includes/footer.php'; ?>
