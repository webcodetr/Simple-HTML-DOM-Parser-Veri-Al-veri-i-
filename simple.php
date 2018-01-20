<?php
include 'simple_html_dom.php';
$html = new simple_html_dom();
$html->load('<b>Utopian</b> bir <b> Steemit </b> projesidir.');
$code = $html-> find('b');
foreach($code as $htmlcode) { echo $htmlcode. '<br>'; }
?>
