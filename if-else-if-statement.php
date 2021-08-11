<?php

	$per =55;

	if ($per >= 80 && $per <= 100) {
		echo "You are in Merit";
	}elseif ($per >=60 && $per <=80) {
		echo "First division";
	}elseif ($per >=45 && $per <=60) {
		echo "2nd division";
	}elseif ($per >=33 && $per <=35) {
		echo "3rd division";
	}elseif ($per < 33) {
		echo "Fail";
	}else{
		echo "Enter the valid percentege";
	}

?>