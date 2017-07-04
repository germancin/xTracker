<?php
require "vendor/autoload.php";
use App\XTracker;

$tracker = new XTracker;

$tracker->start();
sleep(3);
$tracker->end();
echo $tracker->total();

