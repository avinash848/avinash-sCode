<?php

	function hello($fname="first",$lname="last"){

           $v="$fname $lname";
           return $v;
	}

        $name = hello("yahoo","baba");
         echo  $name;
?>