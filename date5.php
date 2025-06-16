<?php
$date = "2004/02/29";

$d = date('m', strtotime($date));

// if("2" == $d) {
//     echo "Leap year";
// } else {
//     echo "Not Leap year";
// }

function checkLeepYear ($year) {
    $d = "$year/02/29";
    $m = date("m", strtotime($d));
    if("2" == $m) {
        echo "Leap year";
    } else {
        echo "Not Leap year";
    }
}

checkLeepYear("2015");