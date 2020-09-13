<?php
	$glob_var = 85;
	function addit() {
		GLOBAL $glob_var;
		$glob_var ++;
		print "<br>Global variable inside function: $glob_var ";
	}
	
	addit();
	print "<br>Global variable outside function: $glob_var ";
	
?>