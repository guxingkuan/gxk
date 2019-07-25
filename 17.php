<?php 	

$arr_a = [1,3,6,9];

$arr_b = [2,4,7,10];



function  Comnome($arr_a,$arr_b)
{
	$length = count($arr_a)+count($arr_b);
	for ($i=0; $i < $length; $i++) { 
		if ($i) {
			echo $arr_a+=$arr_b;
		}
		else
		{
			echo $arr_a+=$arr_b;
		}
	}
}



























 ?>