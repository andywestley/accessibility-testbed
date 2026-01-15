<?php
$pageTitle = 'Basic Forms';

include 'includes/header.php';
?>


    <h1>Basic Form Issues</h1>

    <form>
        <h2>Missing Labels</h2>
        <!-- No label, just text node next to input -->
        First Name: <input type="text" name="firstname" />
        <br><br>

        <h2>Placeholder as Label</h2>
        <!-- Only placeholder, no visual label or aria-label -->
        <input type="text" placeholder="Last Name" name="lastname" />
        <br><br>

        <h2>Implicit Label Not Wrapped</h2>
        <!-- Label tag exists but doesn't wrap input and no 'for' attribute -->
        <label>Email Address</label>
        <input type="email" name="email" />
        <br><br>

        <h2>Duplicate IDs</h2>
        <!-- Multiple elements with same ID -->
        <label for="phone">Phone:</label>
        <input type="text" id="phone" />
        <br>
        <label for="phone">Cell:</label>
        <input type="text" id="phone" />
        <br>
        <label for="phone">Fax:</label>
        <input type="text" id="phone" /> <!-- Triplicate ID -->

        <h2>More Missing Labels</h2>
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

        <h2>More Placeholder Labels</h2>
        <input type="text" placeholder="Address 1" name="addr1" /><br>
        <input type="text" placeholder="Address 2" name="addr2" /><br>
        <input type="text" placeholder="City" name="city_ph" /><br>
        <input type="text" placeholder="State" name="state_ph" /><br>
        <input type="text" placeholder="Zip" name="zip_ph" /><br>

    </form>

<?php include 'includes/footer.php'; ?>