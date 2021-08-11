<?php


	//iska use hum tabhi krte h jb pas kiye huye argument me he change krna ho tb

	function testing(&$string){
     
      $string .= "and somthing extra";
	}

	$str = "this is a string";
	testing($str);
	echo $str;

?>