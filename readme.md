# Accessibility Testbed

This microsite is designed to provide a comprehensive environment for testing accessibility tools and learning about WCAG violations. Each page focuses on specific categories of accessibility barriers.

## Site Structure & Page Purpose

| Page | Description & Demonstrated Violations |
|------|---------------------------------------|
| `index.html` | **Homepage**: Serves as the navigation hub. Demonstrates basic structure violations like "div soup" instead of semantic HTML, missing skip links, and bad titles. |
| `aria_bad.html` | **Bad ARIA**: Showcases common misuses of ARIA, such as `aria-hidden="true"` on focusable elements, invalid roles, and conflicting attributes. |
| `contrast.html` | **Color Contrast**: Features text with insufficient color contrast ratios against backgrounds, making it difficult for low-vision users to read. |
| `flashing.html` | **Flashing Content**: Contains content that flashes or blinks at rates that may trigger seizures (Photosensitive Epilepsy risk). |
| `focus_order.html` | **Focus Order**: Demonstrates illogical tab order where keyboard focus jumps around unpredictably, confusing keyboard-only users. |
| `forms_advanced.html` | **Advanced Forms**: Complex form elements with missing labels, poor association between labels and inputs, and lack of error identification. |
| `forms_basic.html` | **Basic Forms**: Simple form fields missing explicit labels or using placeholder text as labels (which disappears on input). |
| `iframes.html` | **Iframes**: Contains iframes missing `title` attributes, making navigation difficult for screen reader users. |
| `images.html` | **Images**: Images missing `alt` text, using filenames as alt text, or having redundant alt text (e.g., "image of..."). |
| `interactive.html` | **Interactive**: Elements that are interactive only via mouse (e.g., `div` or `span` with click handlers) and not accessible via keyboard. |
| `keyboard_traps.html` | **Keyboard Traps**: Elements that trap focus, preventing users from navigating away using standard keyboard controls (e.g., Tab/Esc). |
| `language.html` | **Language**: Pages missing the `lang` attribute or parts of the page in a different language without proper tagging. |
| `links.html` | **Links**: ambiguous link text like "click here" or "read more" that provides no context when read out of context. |
| `media.html` | **Media**: Audio and video content missing captions, transcripts, or audio descriptions. |
| `orientation.html` | **Orientation**: Content that is locked to a specific orientation (portrait/landscape) or requires a specific device motion. |
| `parsing.html` | **Parsing**: Invalid HTML syntax, duplicate IDs, and unclosed tags that issues for assistive technologies. |
| `structure.html` | **Structure**: Improper use of headings (skipping levels), missing landmarks, and lack of semantic containers. |
| `tables.html` | **Tables**: Data tables missing header cells (`<th>`), scope attributes, or using tables for layout purposes. |
| `typography.html` | **Typography**: Text styling issues such as fixed font sizes, justified text, or poor line height that affect readability. |
| `zoom_responsive.html` | **Zoom & Responsive**: Content that overlaps, gets cut off, or becomes unusable when zoomed in (reflow issues) or viewed on small screens. |
