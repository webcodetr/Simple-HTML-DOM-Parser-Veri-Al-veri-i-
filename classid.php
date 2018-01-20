<?php
include 'simple_html_dom.php';
$html = new simple_html_dom();
$html->load('<div id="select">Utopian</div><div>ve</div><div id="select"> Steemit </div><div>Geleceğe yön verir</div>.');
$code = $html-> find('div#select');
foreach($code as $htmlcode) { echo $htmlcode. '<br>'; }
?>
