<?php
header("content-type:text/plain");
$jkhdsfijk = mt_rand(1,2);
if ($jkhdsfijk == 1) {
	$dd = "allowed";
} else {
	$dd = "not allowed";
}
die("we have negotiated with the balls headmaster, he has concluded that you are ".$dd.".");
?>