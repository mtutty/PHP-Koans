<?php
require 'vendor/autoload.php';

error_reporting(E_ALL & ~E_NOTICE);

$tests = new PHPKoans\Tests\AllTests();
$tests->outputHeader();
$tests->testChapters();
$tests->outputFooter();
