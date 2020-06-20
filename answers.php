<?php
function count_akin($poin){
date_default_timezone_set("Africa/Lagos");
$date_req = strtotime($poin);
$time_remaining = $date_req - time();
$weeks_remaining = $time_remaining /604800;
$days_remaining = $time_remaining / 86400;
$hours_remaining = ($time_remaining % 86400) / 3600;

if ($weeks_remaining >= 1) {
	$weeks_remaining = floor($time_remaining / 604800);
	$days_remaining = floor(($time_remaining % 604800)/86400);
	$hours_remaining = floor(($time_remaining % 86400) / 3600);
	$minutes_remaining = floor((($time_remaining % 86400) % 3600)/60);
	$seconds_remaining = ((($time_remaining % 86400) % 3600)%60);
	$cdown = $weeks_remaining.' weeks '.$days_remaining.' days '. $hours_remaining.' hours '.$minutes_remaining.' minutes '.$seconds_remaining.' seconds';
} elseif ($days_remaining >= 1 ) {
	$days_remaining = floor($time_remaining / 86400);
	$hours_remaining = floor(($time_remaining % 86400) / 3600);
	$minutes_remaining = floor((($time_remaining % 86400) % 3600)/60);
	$seconds_remaining = ((($time_remaining % 86400) % 3600)%60);
	$cdown = $days_remaining.' days '. $hours_remaining.' hours '.$minutes_remaining.' minutes '.$seconds_remaining. ' seconds';
} elseif ($hours_remaining > 0 ) {
	$hours_remaining = floor(($time_remaining % 86400) / 3600);
	$minutes_remaining = floor((($time_remaining % 86400) % 3600)/60);
	$seconds_remaining = ((($time_remaining % 86400) % 3600)%60);
	$cdown = $hours_remaining.' hours '.$minutes_remaining.' minutes '.$seconds_remaining. ' seconds';
}
return $cdown;
}
?>
