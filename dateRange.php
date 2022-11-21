<?php
### generate array with date ranges from start & end date 
### step = +1 day, +1 month , + 1 year etc
### dateFormat = input format to be used

function date_range($startDate, $endDate, $step,  $dateFormat ) {
   # $step = "+ 1 month";
    $dates = array();
    $current = $startDate;
    while( $current <= $endDate ) {
        #echo "start with  $current";
        $dates[] = $current;
        $current = strtotime($current);
        $current = date($dateFormat, strtotime($step, $current));
       # echo "// next: $current";
    }
    return $dates;
}
$dates = date_range("2022-01", "2023-11", "+ 1 month", "Y-m");
var_dump($dates);
?>
