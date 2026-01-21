<?php
$pageTitle = 'Login (User Journey)';
$basePath = '../';
include '../includes/header.php';
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <h1>Login to your account</h1>
        <p>Please enter your credentials below.</p>
        
        <form action="dashboard.php" method="POST">
            <!-- Issue: Label missing 'for' attribute, Input missing 'id' -->
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <!-- Issue: Low contrast placeholder -->
                <!-- Issue: Missing autocomplete attribute -->
                <input type="email" class="form-control" placeholder="name@example.com" style="::placeholder { color: #ccc; }">
            </div>

            <!-- Issue: Label not associated with input -->
            <div class="mb-3">
                <div>Password</div>
                <input type="password" class="form-control">
                <!-- Issue: Error message visually present but not programmatically associated -->
                <div class="text-danger small mt-1">Password must be at least 8 characters.</div>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
