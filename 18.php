<?php 

$n = 10;

function Number($n)
{
	//转化为2进制
	$str = $n;
	$length = strlen($str);
	
	$num = substr_count($str,2);

	return $num;
}

echo $num;





























 ?>