<?php
$AdmitionFee = 00;

$percentage25 = ($AdmitionFee * 25) / 100;
$percentage20 = ($AdmitionFee * 20) / 100;
$percentage15 = ($AdmitionFee * 15) / 100;


$result = 20000 < $AdmitionFee ? "your commition is 25% = {$percentage25} taka"
: ((10000 < $AdmitionFee && 20000 >= $AdmitionFee) ? "your commition is 20%  = {$percentage20} taka" 
: ((10000 >= $AdmitionFee && 7000 <= $AdmitionFee)?"your commition is 15% = {$percentage15} taka" 
:"invalid amount"));
  echo $result;