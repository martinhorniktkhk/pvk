<?php
////tegelikult peavad olema conf.php failis
define('BASE_DIR', './'); // define('BASE_DIR', '../');
require_once(BASE_DIR.'conf.php');
//
/*echo '<pre>';
print_r($sess);
echo '</pre>';*/
$mainTmpl = new Template('main');
$mainTmpl->set('title', 'Menu Application');

$contentTmpl = new Template('content');

$courseCardTmpl = new Template('course_card');

$courseCardHeaderTmpl = new Template('course_card_header');
$courseCardDataTmpl = new Template('course_card_data');

$courseNames = array('praed' => 'fa-utensils', 'supid' => 'fa-utensil-spoon', 'magustoidud' => 'fa-cookie-bite', 'joogid' => 'fa-glass-whiskey');

foreach ($courseNames as $courseName => $courseIcon) {
    $courseCardHeaderTmpl->set('course_name',$courseName);
    $courseCardHeaderTmpl->set('course_icon',$courseIcon);
    $courseCardTmpl->set('course_card_header',$courseCardHeaderTmpl->parse());

    $courseCardDataTmpl->set('course_name',$courseName);
    $courseCardTmpl->set('course_card_data',$courseCardDataTmpl->parse());
    $contentTmpl->add('course_cards',$courseCardTmpl->parse());
}

$mainTmpl->set('content', $contentTmpl->parse());

$mainTmplContent = $mainTmpl->parse();
echo $mainTmplContent;