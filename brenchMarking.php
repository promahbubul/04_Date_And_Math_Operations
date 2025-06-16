<?php

$date = "3rd January 2005";

$start = microtime(true);
for ($i = 0; $i < 1000000; $i++) {
    date('Y/M/D', strtotime($date));
}

$end = microtime(true);
echo "Str to Time: ";
echo $end - $start;
echo PHP_EOL;

$start = microtime(true);
for ($i = 0; $i < 1000000; $i++) {
    (new DateTime($date))->format("Y/M/D");
}

$end = microtime(true);
echo "Date Time: ";
echo $end - $start;
echo PHP_EOL;
