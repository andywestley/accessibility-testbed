<?php
$pageTitle = 'Tables';

include 'includes/header.php';
?>


    <h1>Table Issues</h1>

    <h2>Layout Table</h2>
    <!-- Table related elements used for layout purposes -->
    <table border="0" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td>
                <h2>Sidebar</h2>
                <ul>
                    <li>Menu 1</li>
                </ul>
            </td>
            <td>
                <h2>Main Content</h2>
                <p>This content is laid out using a table.</p>
            </td>
        </tr>
    </table>

    <h2>Data Table Missing Headers</h2>
    <!-- No TH, just bold TD -->
    <table border="1">
        <tr>
            <td><b>Name</b></td>
            <td><b>Age</b></td>
            <td><b>City</b></td>
        </tr>
        <tr>
            <td>John</td>
            <td>30</td>
            <td>New York</td>
        </tr>
        <tr>
            <td>Jane</td>
            <td>25</td>
            <td>London</td>
        </tr>
    </table>

    <h2>Complex Table Missing Scope</h2>
    <!-- TH elements present but missing scope attribute for ambiguous relationships -->
    <table border="1">
        <tr>
            <th></th>
            <th colspan="2">2020</th>
            <th colspan="2">2021</th>
        </tr>
        <tr>
            <th>City</th>
            <th>Q1</th>
            <th>Q2</th>
            <th>Q1</th>
            <th>Q2</th>
        </tr>
        <tr>
            <td>London</td>
            <td>10</td>
            <td>20</td>
            <td>15</td>
            <td>25</td>
        </tr>
    </table>

    <h2>More Layout Tables</h2>
    <table role="presentation">
        <tr>
            <td>Left Column Content</td>
            <td>Right Column Content</td>
        </tr>
    </table>

    <h2>More Data Tables without Headers</h2>
    <table border="1">
        <tr>
            <td>Product A</td>
            <td>$10</td>
            <td>In Stock</td>
        </tr>
        <tr>
            <td>Product B</td>
            <td>$20</td>
            <td>Out of Stock</td>
        </tr>
    </table>

    <h2>Nested Tables (Bad Layout)</h2>
    <table>
        <tr>
            <td>
                <table>
                    <tr>
                        <td>Nested Item 1</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

<?php include 'includes/footer.php'; ?>