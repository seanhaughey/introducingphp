<?php
//$xmas2016 = strtotime('Dec 25, 2025');
//echo date('l, F j, Y', $xmas2016);

$date1 = new DateTime();
$date2 = new DateTime();

$west_coast = new DateTimeZone('Antarctica/Casey');

$date2->setTimeZone($west_coast);

echo $date1->format('g:ia, l, F j, Y') . '<br>';
echo $date2->format('g:ia, l, F j, Y') . '<br>';
