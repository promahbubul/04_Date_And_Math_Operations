<?php

$date = "2025-04-10";
$current = new dateTime();
$oldDate = new DateTime($date);
$diff = $current->diff($oldDate);

echo  $diff->format("%a days ago");