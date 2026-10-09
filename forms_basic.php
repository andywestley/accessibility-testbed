<?php
$pageTitle = 'Form Labels & Input Purpose';include 'includes/header.php';

$currentCriterion = [
    'rule' => 'WCAG 1.3.5 / 3.3.2',
    'name' => 'Form Labels & Input Purpose',
    'level' => 'A',
    'citation' => 'WCAG 2.2 SC 3.3.2: Labels or instructions are provided when content requires user input. HTML autocomplete tokens must be present where applicable.',
    'trigger_summary' => 'Form inputs without programmatic label association, placeholder used as sole label, and missing autocomplete attributes.'
];
include 'includes/diagnostic_header.php';
?>
<form>


<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">3.3.2 Labels or Instructions / 1.1.1 - Missing Labels</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- No label, just text node next to input -->
        First Name: <input type="text" name="firstname" />
        <br><br>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">3.3.2 Labels or Instructions - Placeholder as Label</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- Only placeholder, no visual label or aria-label -->
        <input type="text" placeholder="Last Name" name="lastname" />
        <br><br>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">1.3.1 Info and Relationships - Implicit Label Not Wrapped</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- Label tag exists but doesn't wrap input and no 'for' attribute -->
        <label>Email Address</label>
        <input type="email" name="email" />
        <br><br>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.1 Parsing (Historical) - Duplicate IDs</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <!-- Multiple elements with same ID -->
        <label for="phone">Phone:</label>
        <input type="text" id="phone" />
        <br>
        <label for="phone">Cell:</label>
        <input type="text" id="phone" />
        <br>
        <label for="phone">Fax:</label>
        <input type="text" id="phone" /> <!-- Triplicate ID -->
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">3.3.2 Labels or Instructions - More Missing Labels</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <div>
            Field 1: <input type="text" name="f1" />
        </div>
        <div>
            Field 2: <input type="text" name="f2" />
        </div>
        <div>
            Field 3: <input type="text" name="f3" />
        </div>
        <div>
            Field 4: <input type="text" name="f4" />
        </div>
        <div>
            Field 5: <input type="text" name="f5" />
        </div>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">3.3.2 Labels or Instructions - More Placeholder Labels</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <input type="text" placeholder="Address 1" name="addr1" /><br>
        <input type="text" placeholder="Address 2" name="addr2" /><br>
        <input type="text" placeholder="City" name="city_ph" /><br>
        <input type="text" placeholder="State" name="state_ph" /><br>
        <input type="text" placeholder="Zip" name="zip_ph" /><br>

    </form>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
