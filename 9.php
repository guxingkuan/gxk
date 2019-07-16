<?php 

$arr =array(1,2,3);

//print_r($arr);

function Number($arr)
{
	$length = count($arr);

	for ($i=0; $i <$length ; $i++) { 
		for ($j=0; $j < $i-1 ; $j++) { 
			for ($k=0; $k < $j-1 ; $k++) { 
				print_r($arr[$i].$arr[$j].$arr[$k]);
			}
		}
	}
}










 ?>