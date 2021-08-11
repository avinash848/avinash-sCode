<?php

	function display($number){
          if($number <=5){
          	echo "$number <br/>";
          	display($number +1);    //+1 inrement ke liye h 
          }

	}
  display(2);   //2 yaha pr is liye diya jaha se number start ho
?>