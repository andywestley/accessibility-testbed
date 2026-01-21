<?php
$pageTitle = 'User Journeys';
$basePath = '../';
include '../includes/header.php';
?>

<h1>User Journeys</h1>
<p class="lead">Select a journey below to simulate common user flows. These flows contain intentional accessibility errors for testing purposes.</p>

<div class="row mt-4">
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Login Flow</h5>
                <p class="card-text">A standard email and password login form. Issues include poor contrast, missing labels, and lack of autocomplete.</p>
                <a href="login.php" class="btn btn-primary">Start Login Flow</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Multi-step Survey</h5>
                <p class="card-text">A multi-page data collection wizard. Issues include inaccessible progress bars, keyboard traps, and fake buttons.</p>
                <a href="survey_step1.php" class="btn btn-primary">Start Survey Flow</a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
