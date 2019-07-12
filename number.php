<?php 
 nm(1,13);

 function nm($n,$m)
 {
 	$number = range($n,$m);
 	echo substr_count(join($number),'1');
 }












 ?>