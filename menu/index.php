<?php

define('BASE_DIR', './'); // define('BASE_DIR', '../');
require_once 'conf.php';

//echo '<pre>';
//print_r($sess);
//echo '</pre>';

$mainTmpl = new Template('main');

$mainTmpl ->set('title','Menu Application');

$mainTmplContent = $mainTmpl->parse();
echo $mainTmplContent;



?>