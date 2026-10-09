<?php
$pageTitle = 'Data Tables & Headers';
include 'includes/header.php';

$currentCriterion = [
    'rule' => 'WCAG 1.3.1 (Level A)',
    'name' => 'Data Tables & Semantic Structure',
    'level' => 'A',
    'citation' => 'WCAG 2.2 SC 1.3.1 Info and Relationships: Tables used to display tabular data must associate data cells with header cells (th) using appropriate scope and id/headers. Tables must not be used for layout without proper ARIA presentation roles.',
    'trigger_summary' => 'Data tables missing <th> headers, complex multi-tier tables missing scope attributes, layout tables with nested structural elements, and nested presentation tables.'
];
include 'includes/diagnostic_header.php';
?>

<!-- Diagnostic Description -->
<div class="alert alert-info d-flex align-items-start gap-3 shadow-sm mb-4">
    <i class="bi bi-info-circle-fill fs-4 text-info flex-shrink-0 mt-1"></i>
    <div>
        <h5 class="alert-heading fw-bold mb-1">Intentional Table Accessibility Violations (WCAG 1.3.1)</h5>
        <p class="small mb-0 text-secondary">
            This test page isolates intentional table markup failures: data tables lacking semantic <code>&lt;th&gt;</code> headers, complex tables without <code>scope</code> attributes, and legacy layout tables. Screen readers cannot properly announce column/row associations for these structures.
        </p>
    </div>
</div>

<!-- Test 1: Data Table Missing <th> Headers -->
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <div>
            <h2 class="h5 mb-0 fw-bold text-dark">1. Data Table Missing &lt;th&gt; Header Cells</h2>
            <small class="text-muted">Uses bolded &lt;td&gt;&lt;b&gt; cells instead of semantic &lt;th&gt; elements</small>
        </div>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1">
            <i class="bi bi-exclamation-octagon-fill me-1"></i> WCAG 1.3.1 Failure
        </span>
    </div>
    <div class="card-body">
        <p class="small text-muted mb-3">
            Screen readers will treat the first row as regular data rather than announcing them as column headers for subsequent rows:
        </p>
        <div class="test-sandbox-zone">
            <!-- No TH, just bold TD -->
            <table class="table table-bordered mb-0" border="1">
                <tbody>
                    <tr class="table-light">
                        <td><b>Name</b></td>
                        <td><b>Age</b></td>
                        <td><b>City</b></td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>30</td>
                        <td>New York</td>
                    </tr>
                    <tr>
                        <td>Jane</td>
                        <td>25</td>
                        <td>London</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Test 2: Complex Table Missing Scope Attributes -->
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <div>
            <h2 class="h5 mb-0 fw-bold text-dark">2. Complex Multi-Tier Table Missing Scope Attributes</h2>
            <small class="text-muted">&lt;th&gt; elements present across multiple levels but missing <code>scope="col"</code> / <code>scope="row"</code></small>
        </div>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1">
            <i class="bi bi-exclamation-octagon-fill me-1"></i> WCAG 1.3.1 Failure
        </span>
    </div>
    <div class="card-body">
        <p class="small text-muted mb-3">
            Without explicit <code>scope</code> or <code>id</code>/<code>headers</code> associations, assistive tech cannot resolve whether headers apply to columns or groups:
        </p>
        <div class="test-sandbox-zone">
            <!-- TH elements present but missing scope attribute for ambiguous relationships -->
            <table class="table table-bordered mb-0" border="1">
                <thead>
                    <tr class="table-secondary">
                        <th></th>
                        <th colspan="2">2020</th>
                        <th colspan="2">2021</th>
                    </tr>
                    <tr class="table-light">
                        <th>City</th>
                        <th>Q1</th>
                        <th>Q2</th>
                        <th>Q1</th>
                        <th>Q2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>London</td>
                        <td>10</td>
                        <td>20</td>
                        <td>15</td>
                        <td>25</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Test 3: Data Table Missing Headers Entirely -->
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <div>
            <h2 class="h5 mb-0 fw-bold text-dark">3. Data Table with Missing Header Row Entirely</h2>
            <small class="text-muted">Product data rendered with raw data cells and no table header row</small>
        </div>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1">
            <i class="bi bi-exclamation-octagon-fill me-1"></i> WCAG 1.3.1 Failure
        </span>
    </div>
    <div class="card-body">
        <p class="small text-muted mb-3">
            Data values have no programmatic column or row labels:
        </p>
        <div class="test-sandbox-zone">
            <table class="table table-bordered mb-0" border="1">
                <tbody>
                    <tr>
                        <td>Product A</td>
                        <td>$10</td>
                        <td>In Stock</td>
                    </tr>
                    <tr>
                        <td>Product B</td>
                        <td>$20</td>
                        <td>Out of Stock</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Test 4: Layout Table Used for Page Columns -->
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <div>
            <h2 class="h5 mb-0 fw-bold text-dark">4. Layout Table for Multi-Column Content</h2>
            <small class="text-muted">Table used for visual side-by-side positioning</small>
        </div>
        <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25 px-2 py-1">
            <i class="bi bi-exclamation-triangle-fill me-1"></i> Layout Table Pattern
        </span>
    </div>
    <div class="card-body">
        <p class="small text-muted mb-3">
            Using table markup for layout purposes interferes with screen reader reading order and responsive mobile reflow:
        </p>
        <div class="test-sandbox-zone">
            <!-- Table related elements used for layout purposes -->
            <table border="0" cellpadding="10" cellspacing="0" role="presentation" class="w-100 bg-light rounded">
                <tr>
                    <td style="width: 35%; vertical-align: top; border-right: 1px solid #dee2e6;">
                        <h6 class="fw-bold mb-2">Simulated Sidebar Nav</h6>
                        <ul class="list-unstyled mb-0 small">
                            <li><a href="#" class="text-decoration-none">&bull; Dashboard Link</a></li>
                            <li><a href="#" class="text-decoration-none">&bull; Settings Link</a></li>
                        </ul>
                    </td>
                    <td style="width: 65%; vertical-align: top; padding-left: 1rem;">
                        <h6 class="fw-bold mb-2">Simulated Main Content</h6>
                        <p class="small mb-0 text-muted">This content is laid out using a multi-cell table structure rather than CSS Flexbox/Grid.</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!-- Test 5: Nested Layout Tables -->
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <div>
            <h2 class="h5 mb-0 fw-bold text-dark">5. Nested Tables for Layout Alignment</h2>
            <small class="text-muted">Table nested inside table cell without semantic data structure</small>
        </div>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1">
            <i class="bi bi-exclamation-octagon-fill me-1"></i> Nested Table Violation
        </span>
    </div>
    <div class="card-body">
        <p class="small text-muted mb-3">
            Deeply nested layout tables create confusing screen reader announcements and severe reflow issues:
        </p>
        <div class="test-sandbox-zone">
            <table class="table table-bordered mb-0">
                <tr>
                    <td class="p-3 bg-light">
                        <span class="fw-bold d-block mb-2 text-secondary">Outer Table Cell</span>
                        <table class="table table-sm table-warning mb-0 border">
                            <tr>
                                <td class="p-2"><strong>Nested Item 1:</strong> Content inside nested child table</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>