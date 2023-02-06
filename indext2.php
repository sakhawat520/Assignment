<?php
$sum = -80;
$result = ($sum > 0) ? "$result = Positive" : (($sum < -10)? $result = " value is below -10" :(($sum < 0) ?  $result = "negative" :$result = "It Zero") );
echo $result;