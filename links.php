<?php
$pageTitle = 'Links';

include 'includes/header.php';
?>


    <h1>Link Issues</h1>

    <h2>Ambiguous Link Text</h2>
    <p>To learn more about our services, <a href="services.html">click here</a>.</p>
    <p>To read our blog, <a href="blog.html">click here</a>.</p>

    <h3>More Ambiguous Links</h3>
    <ul>
        <li><a href="page1.html">Click here</a> to see page 1.</li>
        <li><a href="page2.html">Click here</a> to see page 2.</li>
        <li><a href="page3.html">Read more</a> about topic A.</li>
        <li><a href="page4.html">Read more</a> about topic B.</li>
        <li><a href="page5.html">More info</a>.</li>
        <li><a href="page6.html">More info</a>.</li>
        <li><a href="page7.html">Here</a>.</li>
        <li><a href="page8.html">Here</a>.</li>
    </ul>

    <h3>More Empty Links</h3>
    <a href="void.html"></a>
    <a href="void2.html"> <span style="display:none">Hidden text</span> </a>
    <a href="void3.html">&nbsp;</a>


    <h2>Uninformative URL as Text</h2>
    <p>Visit our partner site: <a href="https://example.com/partner">https://example.com/partner</a></p>

    <h2>Opening in New Window</h2>
    <p><a href="https://google.com" target="_blank">External Link</a> (Should warn user)</p>

    <h2>Empty Links</h2>
    <p>There is a link here: <a href="page.html"></a> end.</p>

    <h2>Same Text, Different Destination</h2>
    <p><a href="report2020.pdf">Read Report</a></p>
    <p><a href="report2021.pdf">Read Report</a></p>

    <h2>Broken/No Href</h2>
    <a>This is an anchor without an href</a>

<?php include 'includes/footer.php'; ?>