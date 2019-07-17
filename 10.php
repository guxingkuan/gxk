<?php 

$arr = [2,4,3,6,3,2,5,5];

function Find($arr)
{
	$length = count($arr);
	for ($i=0; $i <$length ; $i++) { 
		for ($j=0; $j < $length; $j++) { 
			$arr[$i].$arr[$j] = $arr[$j+1].$arr[$i+1];
		}
	}
	return $arr[i];
}









 ?>