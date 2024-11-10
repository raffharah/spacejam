<?php
require __DIR__ . '/../vendor/autoload.php';

$rc = new \Forseti\SpaceJeam\PageObject\IndexPageObject();
$rh = $rc->getHtml();
var_dump($rh);