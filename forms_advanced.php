<?php
$pageTitle = 'Advanced Forms';
$extraStyles = '<style>
        

        

        .required {
            color: red;
        }

        .error {
            color: red;
            display: none;
        }
    </style>';
include 'includes/header.php';
?>


    <h1>Advanced Form Issues</h1>

    <form>
        <h2>Color Only Required</h2>
        <!-- Required indicated only by red color asterisk -->
        <label for="username">Username <span class="required">*</span></label>
        <input type="text" id="username" />
        <br><br>

        <h2>Error Message Not Connected</h2>
        <!-- Error message is visible but not programmatically associated -->
        <label for="password">Password</label>
        <input type="password" id="password" aria-invalid="true" />
        <div id="pw-error" class="error" style="display:block;">Password must be 8 chars.</div>
        <br><br>

        <h2>Missing Autocomplete</h2>
        <!-- Standard fields without autocomplete attributes -->
        <label for="street">Street Address</label>
        <input type="text" id="street" />
        <br>
        <label for="city">City</label>
        <input type="text" id="city" />
        <br><br>

        <img src="https://placehold.co/150x50?text=CAPTCHA" alt="Type the characters in the image" />
        <input type="text" aria-label="Captcha response" />

        <h2>More Color Only Required</h2>
        <label for="f1">Field 1 <span class="required">*</span></label>
        <input type="text" id="f1" /><br>
        <label for="f2">Field 2 <span class="required">*</span></label>
        <input type="text" id="f2" /><br>
        <label for="f3">Field 3 <span class="required">*</span></label>
        <input type="text" id="f3" /><br>

        <h2>More Disconnected Errors</h2>
        <label for="email2">Email</label>
        <input type="email" id="email2" aria-invalid="true" />
        <div class="error" style="display:block;">Invalid email format.</div>
        <br>
        <label for="zip2">Zip Code</label>
        <input type="text" id="zip2" aria-invalid="true" />
        <div class="error" style="display:block;">Zip code must be 5 digits.</div>

    </form>

<?php include 'includes/footer.php'; ?>