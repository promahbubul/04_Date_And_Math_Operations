<?php

$date = "2003-01-01";

// echo date("d/m/y");
// echo date("D/M/Y");

date_default_timezone_set("Asia/Dhaka");
// echo date("D/M/Y h:i:s A");
// echo date("d/m/y -->  H:i:s");

// echo strtotime($date);
// echo strtotime("now"); // timestamp
// echo date('l', strtotime($date));
echo date('jS, F, l, Y', strtotime($date));

// unix epoch --> January 1 1970
