<?php
$contentTmpl = new Template('content');
require_once 'menus/menu.php';
foreach ($courses as $course => $courseData){
    $courseCardTmpl = new Template('course_card');
    $courseCardHeaderTmpl = new Template('course_card_header');
    $courseCardDataTmpl = new Template('course_card_data');
    $courseCardHeaderTmpl->set('course_name', $courseData['name']);
    $courseCardHeaderTmpl->set('course_icon', $courseData['icon']);
    $courseCardTmpl->set('course_card_header', $courseCardHeaderTmpl->parse());
    $courseCardDataTmpl->set('course_name', $courseData['name']);
    $courseDatalistTmpl = new Template('course_data_list');
    foreach ($courseData['data'] as $dish => $dishData){
        foreach ($dishData as $name=>$value){
            $courseDatalistTmpl->set($name, $dishData[$name]);
        }
        $courseCardDataTmpl->add('course_data_list', $courseDatalistTmpl->parse());
    }
    $courseCardTmpl->set('course_card_data', $courseCardDataTmpl->parse());
    $contentTmpl->add('course_cards', $courseCardTmpl->parse());
}
$mainTmpl->set('content', $contentTmpl->parse());