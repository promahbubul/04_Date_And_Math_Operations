<?php
$date = new dateTime();
$date->modify("1 Year 2 Month 3 days 5 hours");

// echo $date->format("Y/m/d H:i:s");
echo $date->format("Y/m/d H:i:s a");