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

    <h2>Error Prevention (3.3.4)</h2>
    <form action="#" method="POST">
        <p>Clicking this button submits immediately with no confirmation.</p>
        <button type="submit" onclick="alert('Submitted! No confusion for you.')">Delete All Data</button>
    </form>

    <h2>Redundant Entry (3.3.7)</h2>
    <form>
        <h3>Shipping Address</h3>
        <input type="text" placeholder="Street Address">
        
        <h3>Billing Address</h3>
        <p>(No check box to say 'Same as shipping'. You must type it again.)</p>
        <input type="text" placeholder="Street Address">
    </form>

    <h2>Accessible Authentication (3.3.8)</h2>
    <form>
        <label>Solve this to log in:</label>
        <p>What is the square root of 144 plus 15?</p>
        <input type="text" aria-label="Math problem">
        <button>Login</button>
    </form>

    <hr>
    <h2>New WCAG 2.2 / AAA Form Issues</h2>

    <h3>2.2.5 Re-authenticating (AAA)</h3>
    <p>If your session expires while filling this form, all data is lost and you must start over. (No data preservation).</p>

    <h3>2.2.6 Timeouts (AAA)</h3>
    <p>This sensitive transaction form has a timeout but does not warn the user how long they have or allow extension.</p>

    <h3>3.2.5 Change on Request (AAA)</h3>
    <!-- Simulating unexpected context change -->
    <label for="magic-switch">Magic Switch (Triggers Page Reload immediately)</label>
    <input type="checkbox" id="magic-switch" onchange="alert('PAGE RELOADED! (Violation: Change of context on setting value)');">

    <h3>3.3.5 Help (AAA)</h3>
    <p>Complex form fields below have no context-sensitive help (no '?' icon or description text).</p>
    <label>Actuarial Calculation Factor V:</label> <input type="text">

    <h3>3.3.6 Error Prevention (All) (AAA)</h3>
    <p>Deleting non-sensitive data (e.g. "Recently Viewed" list) happens immediately without confirmation. (AA only requires it for legal/financial/data data, AAA requires it for all).</p>
    <button onclick="alert('History Cleared!')">Clear History (Immediate)</button>

    <h3>3.3.9 Accessible Authentication (No Exception) (AAA)</h3>
    <p>Unlike AA, AAA does not allow <em>any</em> cognitive function test (like recognizing objects) unless an alternative method exists. Even "select the cat" object recognition is a fail here.</p>
    <div style="border:1px solid #ccc; padding:10px;">
        <p>Security Check: Select the picture of the cat.</p>
        <button>[Dog]</button> <button>[Cat]</button> <button>[Bird]</button>
    </div>

<?php include 'includes/footer.php'; ?>