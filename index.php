<?php

require_once 'vendor/autoload.php';

use Symfony\Component\Stopwatch\Stopwatch;

$stopwatch = new Stopwatch();
// Start event named 'eventName'
$stopwatch->start('eventName');
// ... some code goes here
sleep(1);
$event = $stopwatch->stop('eventName');

$a = $event->getPeriods('eventName');
echo '<pre>';
print_r($a);
