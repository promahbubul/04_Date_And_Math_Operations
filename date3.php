<?php
$rahim = "2001/12/21";
$karim = "2000/12/03";


$d1 = new DateTime($rahim);
$d2 = new DateTime($karim);
$diff = $d1->diff($d2);

// echo $diff->y . " Years " . $diff->m . " Month " . $diff->d ." Days ";
// echo $diff->format("%y/%m/%d");
echo $diff->format("%a");