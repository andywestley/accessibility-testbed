<?php
$pageTitle = 'Keyboard Traps & Character Shortcuts';
$extraStyles = '<style>
        

        

        #trap {
            border: 2px solid red;
            padding: 20px;
        }
    </style>';
include 'includes/header.php';

$currentCriterion = [
    'rule' => 'WCAG 2.1.2 / 2.1.4',
    'name' => 'Keyboard Traps & Character Shortcuts',
    'level' => 'A',
    'citation' => 'WCAG 2.2 SC 2.1.2: If keyboard focus can be moved to a component, focus can also be moved away using only a keyboard interface.',
    'trigger_summary' => 'Trapped focus in custom dialog widgets and single-key shortcuts that cannot be turned off or remapped.'
];
include 'includes/diagnostic_header.php';
?>
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


<div class="test-section-card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
        <h2 class="h5 mb-0 fw-bold text-dark">2.1.2 No Keyboard Trap - More Traps</h2>
        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-exclamation-octagon-fill me-1"></i> Intentional Failure Trigger</span>
    </div>
    <div class="card-body">
        <div style="border: 2px solid blue; padding: 20px;">
        <label>Trap 2 (Blocks Tab & Esc): <input type="text" id="trap-2" /></label>
    </div>

    <div style="border: 2px solid orange; padding: 20px; margin-top:20px;">
        <label>Trap 3 (JS Loop Focus): <input type="text" onblur="this.focus()"
                placeholder="I will steal focus back" /></label>
    </div>
    </script>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
