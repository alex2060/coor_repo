<?php

	function the_striper($value) {
	$value = str_replace('"', '', $value);
	$value = str_replace('\'', '', $value);
	return $value;
	}
?>
