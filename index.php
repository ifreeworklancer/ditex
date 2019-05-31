<?php
require_once __DIR__ . '/language.php';

require_once('functions.php');

require_once('views/base/header.php');

?>

<?php

$sections = [
	'intro',
	'advantages',
    'about',
    'target',
    'partner',
    'experience',
];

foreach ($sections as $section) {
	include(__DIR__ . '/views/sections/' . $section . '.php');
}

require_once('views/base/footer.php');