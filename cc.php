<?php 



$arr = array(1,2,3,4,5,6,7,8,9,10);


function reOrganArray($arr)
{

	$length = count($arr);

	for ($i=1; $i < $length ; $i++) { 
		
		$ght = $arr[$i];
		$j = $i-1;
		while ($j>=0 && $ght%2==0) {
			$arr[$j+1] = $arr[$i];
			$j--;
		}
		return $arr[$i];

	}
	
}

$arr2 = reOrganArray($arr);

var_dump($arr2);






 ?>