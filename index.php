<?php
require "vendor/autoload.php";
use App\XTracker;

$tracker = new XTracker;

$tracker->start();
$tracker->end();
echo $tracker->total();

