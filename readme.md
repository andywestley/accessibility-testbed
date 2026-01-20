# Accessibility Testbed

This microsite is designed to provide a comprehensive environment for testing accessibility tools and learning about WCAG violations. Each page focuses on specific categories of accessibility barriers.

> [!NOTE]
> This site is built using **PHP** and **Bootstrap 5**. While it looks modern, the accessibility violations are intentional and preserved.

## Architecture & Setup

### Requirements
- A web server with PHP support (e.g., Apache, Nginx, XAMPP, or built-in PHP server).
- Internet connection (for Bootstrap CDN).

### Running Locally
1. Clone the repository.
2. Point your web server to the root directory.
3. Access `index.php` (or just the root URL if `.htaccess` is supported).

### Structure
- `*.php`: The main content pages.
- `includes/`: Contains shared `header.php` and `footer.php`.
- `.htaccess`: Configures `index.php` as the default directory index.

## Site Structure & Page Purpose

| Page | Description & Demonstrated Violations |
|------|---------------------------------------|
| `index.php` | **Homepage**: Serves as the navigation hub. Demonstrates basic structure violations like "div soup" instead of semantic HTML, missing skip links, and bad titles. |
| `aria_bad.php` | **Bad ARIA**: Showcases common misuses of ARIA, such as `aria-hidden="true"` on focusable elements, invalid roles, and conflicting attributes. |
| `contrast.php` | **Color Contrast**: Features text with insufficient color contrast ratios against backgrounds, making it difficult for low-vision users to read. |
| `flashing.php` | **Flashing Content**: Contains content that flashes or blinks at rates that may trigger seizures (Photosensitive Epilepsy risk). |
| `focus_order.php` | **Focus Order**: Demonstrates illogical tab order where keyboard focus jumps around unpredictably, confusing keyboard-only users. |
| `forms_advanced.php` | **Advanced Forms**: Complex form elements with missing labels, poor association between labels and inputs, and lack of error identification. |
| `forms_basic.php` | **Basic Forms**: Simple form fields missing explicit labels or using placeholder text as labels (which disappears on input). |
| `iframes.php` | **Iframes**: Contains iframes missing `title` attributes, making navigation difficult for screen reader users. |
| `images.php` | **Images**: Images missing `alt` text, using filenames as alt text, or having redundant alt text (e.g., "image of..."). |
| `interactive.php` | **Interactive**: Elements that are interactive only via mouse (e.g., `div` or `span` with click handlers) and not accessible via keyboard. |
| `keyboard_traps.php` | **Keyboard Traps**: Elements that trap focus, preventing users from navigating away using standard keyboard controls (e.g., Tab/Esc). |
| `language.php` | **Language**: Pages missing the `lang` attribute or parts of the page in a different language without proper tagging. |
| `links.php` | **Links**: ambiguous link text like "click here" or "read more" that provides no context when read out of context. |
| `media.php` | **Media**: Audio and video content missing captions, transcripts, or audio descriptions. |
| `orientation.php` | **Orientation**: Content that is locked to a specific orientation (portrait/landscape) or requires a specific device motion. |
| `parsing.php` | **Parsing**: Invalid HTML syntax, duplicate IDs, and unclosed tags that issues for assistive technologies. |
| `structure.php` | **Structure**: Improper use of headings (skipping levels), missing landmarks, and lack of semantic containers. |
| `tables.php` | **Tables**: Data tables missing header cells (`<th>`), scope attributes, or using tables for layout purposes. |
| `target_size.php` | **Target Size**: Demonstrates elements with insufficient target sizes (< 24x24px) and lack of spacing (WCAG 2.5.8). |
| `typography.php` | **Typography**: Text styling issues such as fixed font sizes, justified text, or poor line height that affect readability. |
| `zoom_responsive.php` | **Zoom & Responsive**: Content that overlaps, gets cut off, or becomes unusable when zoomed in (reflow issues) or viewed on small screens. |
