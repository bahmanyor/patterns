<?php


use Patterns\adapter\Main as MainAdapter;

require_once __DIR__ . '/../vendor/autoload.php';

/*
 * Adapter pattern 1
 */
//(new MainAdapter())->main();

/*
 * Adapter pattern 2
 */

//(new \Patterns\adapter2\Main())->main();

/*
 * pattern Decorator
 */
(new \Patterns\decorator\Main())->main();