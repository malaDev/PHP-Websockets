#!/usr/bin/env php
<?php

require_once dirname(__FILE__) . '/websockets.php';
require_once dirname(__FILE__) . '/lib/autoloader.php';

$echo = new Socket_Echo("127.0.0.1", "9000");

try {
    $echo->run();
}
catch (Exception $e) {
    $echo->stdout($e->getMessage());
}
