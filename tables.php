<?php
$pageTitle = 'Data Tables & Headers';include 'includes/header.php';

$currentCriterion = [
    'rule' => 'WCAG 1.3.1',
    'name' => 'Data Tables & Headers',
    'level' => 'A',
    'citation' => 'WCAG 2.2 SC 1.3.1: Tables used for tabular data must associate data cells with header cells (th) using appropriate scope and id/headers.',
    'trigger_summary' => 'Layout tables using presentation role incorrectly, data tables missing <th> headers, and complex tables missing scope attributes.'
];
include 'includes/diagnostic_header.php';
?>
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.3.1 Info and Relationships - Layout Table</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- Table related elements used for layout purposes -->
    <table border="0" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.3.1 Info and Relationships - Sidebar</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <ul>
                    <li>Menu 1</li>
                </ul>
            </td>
            <td>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.3.1 Info and Relationships - Main Content</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>This content is laid out using a table.</p>
            </td>
        </tr>
    </table>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.3.1 Info and Relationships - Data Table Missing Headers</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- No TH, just bold TD -->
    <table border="1">
        <tr>
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
    </table>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.3.1 Info and Relationships - Complex Table Missing Scope</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- TH elements present but missing scope attribute for ambiguous relationships -->
    <table border="1">
        <tr>
            <th></th>
            <th colspan="2">2020</th>
            <th colspan="2">2021</th>
        </tr>
        <tr>
            <th>City</th>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q1</th>
            <th>Q2</th>
        </tr>
        <tr>
            <td>London</td>
            <td>10</td>
            <td>20</td>
            <td>15</td>
            <td>25</td>
        </tr>
    </table>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.3.1 Info and Relationships - More Layout Tables</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <table role="presentation">
        <tr>
            <td>Left Column Content</td>
            <td>Right Column Content</td>
        </tr>
    </table>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.3.1 Info and Relationships - More Data Tables without Headers</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <table border="1">
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
    </table>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.3.1 Info and Relationships - Nested Tables (Bad Layout)</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <table>
        <tr>
            <td>
                <table>
                    <tr>
                        <td>Nested Item 1</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
