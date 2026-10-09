<?php
$pageTitle = 'Link Purpose & Ambiguous Text';include 'includes/header.php';

$currentCriterion = [
    'rule' => 'WCAG 2.4.4 / 2.4.9',
    'name' => 'Link Purpose & Ambiguous Text',
    'level' => 'A',
    'citation' => 'WCAG 2.2 SC 2.4.4 & 2.4.9: The purpose of each link can be determined from the link text alone or from the link text together with programmatic context.',
    'trigger_summary' => 'Repetitive ambiguous link text ("click here", "read more", "download") without contextual labels or aria-label.'
];
include 'includes/diagnostic_header.php';
?>
<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">2.4.4 Link Purpose (In Context) - Ambiguous Link Text</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>To learn more about our services, <a href="services.html">click here</a>.</p>
    <p>To read our blog, <a href="blog.html">click here</a>.</p>

    <h3>2.4.4 Link Purpose (In Context) - More Ambiguous Links</h3>
    <ul>
        <li><a href="page1.html">Click here</a> to see page 1.</li>
        <li><a href="page2.html">Click here</a> to see page 2.</li>
        <li><a href="page3.html">Read more</a> about topic A.</li>
        <li><a href="page4.html">Read more</a> about topic B.</li>
        <li><a href="page5.html">More info</a>.</li>
        <li><a href="page6.html">More info</a>.</li>
        <li><a href="page7.html">Here</a>.</li>
        <li><a href="page8.html">Here</a>.</li>
    </ul>

    <h3>2.4.4 Link Purpose / 4.1.2 - More Empty Links</h3>
    <a href="void.html"></a>
    <a href="void2.html"> <span style="display:none">Hidden text</span> </a>
    <a href="void3.html">&nbsp;</a>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">2.4.4 Link Purpose (In Context) - Uninformative URL as Text</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>Visit our partner site: <a href="https://example.com/partner">https://example.com/partner</a></p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">3.2.5 Change on Request (AAA) - Opening in New Window</h2>
        <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 px-2 py-1"><i class="bi bi-info-circle-fill me-1"></i> Level AAA Trigger</span>
    </div>
    <div class="card-body">
        <p><a href="https://google.com" target="_blank">External Link</a> (Should warn user)</p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">2.4.4 Link Purpose (In Context) - Empty Links</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p>There is a link here: <a href="page.html"></a> end.</p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">2.4.4 Link Purpose (In Context) - Same Text, Different Destination</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <p><a href="report2020.pdf">Read Report</a></p>
    <p><a href="report2021.pdf">Read Report</a></p>
    </div>
</div>

<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">4.1.2 Name, Role, Value - Broken/No Href</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <a>This is an anchor without an href</a>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
