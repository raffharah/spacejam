<?php
require __DIR__ . '/../vendor/autoload.php';

$rc = new \Forseti\SpaceJeam\PageObject\SecondPageObject();
$rh = new \Forseti\SpaceJeam\Parser\SecondParser($rc->getHtml());
$ri = $rc->getParser()->getIterator()->current();
var_dump($ri);