<?php


$sum = 0;
$result = ($sum > 0) ? "$result = Positive" : (($sum < 0) && ($sum < -10) ? $result = "value is below -10" : $result = "negative");
echo $result;