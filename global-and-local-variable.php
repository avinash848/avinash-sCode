<?php

   $x =10;
	function test(){
     global $x;
     echo "vaariable x inside function $x <br/>";
	}
   test();
   echo "vaariable x outside function $x <br/>";
?>