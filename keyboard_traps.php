<?php
$pageTitle = 'Keyboard Traps';
$extraStyles = '<style>
        

        

        #trap {
            border: 2px solid red;
            padding: 20px;
        }
    </style>';
include 'includes/header.php';
?>


    <h1>Keyboard Traps</h1>

    <p>Try to tab through the input below. You will get stuck.</p>

    <div id="trap">
        <label for="trapped-input">Trapped Input:</label>
        <input type="text" id="trapped-input" placeholder="Focus me and try to tab away" />
    </div>

    <p>Some text after the trap.</p>
    <a href="#">Link after trap</a>

    <script>
        const trapInput = document.getElementById('trapped-input');
        trapInput.addEventListener('keydown', function (e) {
            if (e.key === 'Tab') {
                e.preventDefault();
                alert('Keyboard Trap! Tab key is disabled.');
            }
        });

        // Add traps to new elements
        const trap2 = document.getElementById('trap-2');
        if (trap2) {
            trap2.addEventListener('keydown', function (e) {
                if (e.key === 'Tab' || e.key === 'Escape') {
                    e.preventDefault();
                    console.log('Trapped in 2');
                }
            });
        }

        // Single Character Key Shortcut Trap (2.1.4)
        document.addEventListener('keydown', function(e) {
            if (e.key.toLowerCase() === 's' && e.target.tagName !== 'INPUT' && e.target.tagName !== 'TEXTAREA') {
                alert('Violation: Single character key shortcut "S" triggered! You cannot remap or disable this.');
            }
        });
    </script>

    <h2>2.1.2 No Keyboard Trap - More Traps</h2>
    <div style="border: 2px solid blue; padding: 20px;">
        <label>Trap 2 (Blocks Tab & Esc): <input type="text" id="trap-2" /></label>
    </div>

    <div style="border: 2px solid orange; padding: 20px; margin-top:20px;">
        <label>Trap 3 (JS Loop Focus): <input type="text" onblur="this.focus()"
                placeholder="I will steal focus back" /></label>
    </div>
    </script>

<?php include 'includes/footer.php'; ?>