<?php
$pageTitle = 'Target Size (Minimum) - WCAG 2.5.8';
include 'includes/header.php';
?>

<h1>Target Size (Minimum) - WCAG 2.5.8</h1>

<p>
    Success Criterion <strong>2.5.8 Target Size (Minimum) (Level AA)</strong> requires that the target size for pointer inputs is at least 24 by 24 CSS pixels, except where:
</p>
<ul>
    <li><strong>Spacing:</strong> Undersized targets (less than 24x24) are positioned so that if a 24px diameter circle is centered on the bounding box of each, the circles do not intersect another target or the circle for another undersized target.</li>
    <li><strong>Equivalent:</strong> The function can be achieved through a different control on the same page that meets this criterion.</li>
    <li><strong>Inline:</strong> The target is in a sentence or block of text.</li>
    <li><strong>User Agent Control:</strong> The size is determined by the user agent and is not modified by the author.</li>
    <li><strong>Essential:</strong> A particular presentation of the target is essential to the information being conveyed.</li>
</ul>

<hr>

<h2>Violations</h2>

<h3>2.5.8 Target Size (Minimum) - Undersized Buttons without Spacing</h3>
<p>These icon buttons are smaller than 24x24px and are placed too close together. Users with tremors or imprecise pointing devices may accidentally activate the wrong one.</p>

<div class="mb-4">
    <style>
        .tiny-btn {
            border: 1px solid #333;
            background: #eee;
            padding: 0;
            margin: 0;
            display: inline-block;
            cursor: pointer;
        }
    </style>
    <!-- 12x12 button -->
    <button class="tiny-btn" style="width: 12px; height: 12px;" aria-label="Edit"></button>
    <!-- 16x16 button immediately next to it -->
    <button class="tiny-btn" style="width: 16px; height: 16px;" aria-label="Delete"></button>
    <!-- 20x20 button immediately next to it -->
    <button class="tiny-btn" style="width: 20px; height: 20px;" aria-label="Settings"></button>
    <p class="small text-muted mt-2">Sizes: 12px, 16px, 20px. Margin: 0.</p>
</div>

<h3>2.5.8 Target Size (Minimum) - Crowded List Links</h3>
<p>These links have a small line-height and font-size, making the vertical target size less than 24px, and they are packed tightly together.</p>

<div class="mb-4">
    <ul style="line-height: 14px; font-size: 12px; list-style: none; padding: 0;">
        <li><a href="#">Terms of Service</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Cookie Policy</a></li>
        <li><a href="#">GDPR Compliance</a></li>
    </ul>
</div>

<hr>

<h2>Passes / Best Practices</h2>

<h3>1. Sufficient Spacing for Small Targets</h3>
<p>Even if the visible target is small (e.g., 16px icon), we can use padding or margin to ensure the effective touch target or the keep-out zone prevents accidental activation.</p>

<div class="mb-4">
    <!-- Using margin to create space -->
    <button class="tiny-btn" style="width: 16px; height: 16px; margin-right: 12px;" aria-label="Edit"></button>
    <button class="tiny-btn" style="width: 16px; height: 16px; margin-right: 12px;" aria-label="Delete"></button>
    <button class="tiny-btn" style="width: 16px; height: 16px;" aria-label="Settings"></button>
    <p class="small text-muted mt-2">Visible size: 16px. Margin adds sufficient spacing so 24px circles don't overlap.</p>
</div>

<h3>2. Standard Controls (44px+)</h3>
<p>Using standard sizing (e.g., min-height 44px) automatically satisfies 2.5.8 (and the stricter 2.5.5 AAA).</p>

<div class="mb-4">
    <button class="btn btn-primary">Standard Button</button>
</div>

<?php include 'includes/footer.php'; ?>
