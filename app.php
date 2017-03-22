<?php

require_once 'vendor/autoload.php';

$smartyFactory = new \App\SmartyFactory();

$smarty = $smartyFactory::getInstance();

$smarty->assign('course', 'Prestashop');
$smarty->assign('name', 'Charly');
$smarty->display('exercice1.tpl');

$smarty->assign('details', [
    'label' => 'Smarty part',
    'type' => 'Remote course',
    'goals' => 'Knowing Smarty in order to create Prestashop templates',
]);
$smarty->assign('classes', ['foo', 'bar', 'baz']);
$smarty->display('index.tpl');
