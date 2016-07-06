<?php
function copyright($year) {
	$current_year = Date('Y');
	$abbr_year = Date('y');
	if($year < $current_year && $year >= 2000){
		return "&copy $year-$abbr_year";
	} elseif ($year < $current_year && $year < 2000) {
		return "&copy $year-$current_year";
	} else {
		return "&copy $year";
	}
}

echo copyright(2000);
?>