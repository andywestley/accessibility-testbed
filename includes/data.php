<?php
/**
 * WCAG 2.2 Accessibility Criteria & Principles Catalog Data
 */

$pillars = [
    'pillar-perceivable' => [
        'id' => 'pillar-perceivable',
        'name' => '1. Perceivable',
        'standard' => 'WCAG 2.2 Principle 1',
        'icon' => 'bi-eye-fill',
        'color' => 'primary',
        'description' => 'Information and user interface components must be presentable to users in ways they can perceive (Alt text, captions, contrast, reflow).'
    ],
    'pillar-operable' => [
        'id' => 'pillar-operable',
        'name' => '2. Operable',
        'standard' => 'WCAG 2.2 Principle 2',
        'icon' => 'bi-hand-index-thumb-fill',
        'color' => 'success',
        'description' => 'User interface components and navigation must be operable (Keyboard navigation, no traps, timing, seizure prevention, focus order).'
    ],
    'pillar-understandable' => [
        'id' => 'pillar-understandable',
        'name' => '3. Understandable',
        'standard' => 'WCAG 2.2 Principle 3',
        'icon' => 'bi-lightbulb-fill',
        'color' => 'info',
        'description' => 'Information and the operation of user interface must be understandable (Language attributes, predictable inputs, error identification).'
    ],
    'pillar-robust' => [
        'id' => 'pillar-robust',
        'name' => '4. Robust',
        'standard' => 'WCAG 2.2 Principle 4',
        'icon' => 'bi-shield-shaded',
        'color' => 'warning',
        'description' => 'Content must be robust enough that it can be interpreted reliably by a wide variety of user agents, including assistive technologies (ARIA, parsing).'
    ]
];

$testPages = [
    ['file' => 'images.php', 'name' => 'Non-Text Content & Images', 'rule' => 'WCAG 1.1.1', 'level' => 'A', 'pillar' => 'pillar-perceivable'],
    ['file' => 'media.php', 'name' => 'Time-based Media & Audio/Video', 'rule' => 'WCAG 1.2.1-1.2.5', 'level' => 'A', 'pillar' => 'pillar-perceivable'],
    ['file' => 'structure.php', 'name' => 'Info & Relationships (Headings & Landmarks)', 'rule' => 'WCAG 1.3.1', 'level' => 'A', 'pillar' => 'pillar-perceivable'],
    ['file' => 'tables.php', 'name' => 'Data Tables & Headers', 'rule' => 'WCAG 1.3.1', 'level' => 'A', 'pillar' => 'pillar-perceivable'],
    ['file' => 'orientation.php', 'name' => 'Orientation (Portrait/Landscape)', 'rule' => 'WCAG 1.3.4', 'level' => 'AA', 'pillar' => 'pillar-perceivable'],
    ['file' => 'contrast.php', 'name' => 'Color Contrast (Text & UI)', 'rule' => 'WCAG 1.4.3 / 1.4.11', 'level' => 'AA', 'pillar' => 'pillar-perceivable'],
    ['file' => 'zoom_responsive.php', 'name' => 'Resize Text & Reflow (400% Zoom)', 'rule' => 'WCAG 1.4.4 / 1.4.10', 'level' => 'AA', 'pillar' => 'pillar-perceivable'],
    ['file' => 'typography.php', 'name' => 'Text Spacing & Images of Text', 'rule' => 'WCAG 1.4.5 / 1.4.12', 'level' => 'AA', 'pillar' => 'pillar-perceivable'],
    ['file' => 'interactive.php', 'name' => 'Keyboard Accessibility & Content on Hover', 'rule' => 'WCAG 2.1.1 / 1.4.13', 'level' => 'A', 'pillar' => 'pillar-operable'],
    ['file' => 'keyboard_traps.php', 'name' => 'Keyboard Traps & Character Shortcuts', 'rule' => 'WCAG 2.1.2 / 2.1.4', 'level' => 'A', 'pillar' => 'pillar-operable'],
    ['file' => 'flashing.php', 'name' => 'Timing Adjustable, Pause & No Seizure Flashing', 'rule' => 'WCAG 2.2.1 / 2.3.1', 'level' => 'A', 'pillar' => 'pillar-operable'],
    ['file' => 'focus_order.php', 'name' => 'Focus Order & Visible Focus Indicator', 'rule' => 'WCAG 2.4.3 / 2.4.7', 'level' => 'A', 'pillar' => 'pillar-operable'],
    ['file' => 'links.php', 'name' => 'Link Purpose & Ambiguous Text', 'rule' => 'WCAG 2.4.4 / 2.4.9', 'level' => 'A', 'pillar' => 'pillar-operable'],
    ['file' => 'target_size.php', 'name' => 'Target Size (Minimum 24x24px)', 'rule' => 'WCAG 2.5.8', 'level' => 'AA', 'pillar' => 'pillar-operable'],
    ['file' => 'language.php', 'name' => 'Language of Page & Parts', 'rule' => 'WCAG 3.1.1 / 3.1.2', 'level' => 'A', 'pillar' => 'pillar-understandable'],
    ['file' => 'forms_basic.php', 'name' => 'Form Labels & Input Purpose', 'rule' => 'WCAG 1.3.5 / 3.3.2', 'level' => 'A', 'pillar' => 'pillar-understandable'],
    ['file' => 'forms_advanced.php', 'name' => 'Error Identification & Suggestions', 'rule' => 'WCAG 3.3.1 / 3.3.3', 'level' => 'A', 'pillar' => 'pillar-understandable'],
    ['file' => 'parsing.php', 'name' => 'HTML Parsing & Duplicate IDs', 'rule' => 'WCAG 4.1.1', 'level' => 'A', 'pillar' => 'pillar-robust'],
    ['file' => 'aria_bad.php', 'name' => 'Name, Role, Value & ARIA Misuse', 'rule' => 'WCAG 4.1.2', 'level' => 'A', 'pillar' => 'pillar-robust'],
    ['file' => 'iframes.php', 'name' => 'Iframe Titles & Embedding', 'rule' => 'WCAG 4.1.2', 'level' => 'A', 'pillar' => 'pillar-robust'],
    ['file' => 'best_practices.php', 'name' => 'Axe & Engine Best Practices', 'rule' => 'Best Practice', 'level' => 'AAA', 'pillar' => 'pillar-robust']
];

function getAdjacentA11yTests($currentFile, $testPages) {
    $idx = array_search($currentFile, array_column($testPages, 'file'));
    $prev = null;
    $next = null;
    
    if ($idx !== false) {
        if ($idx > 0) {
            $prev = $testPages[$idx - 1];
        }
        if ($idx < count($testPages) - 1) {
            $next = $testPages[$idx + 1];
        }
    }
    
    return [
        'index' => ($idx !== false) ? $idx + 1 : 1,
        'total' => count($testPages),
        'prev' => $prev,
        'next' => $next
    ];
}