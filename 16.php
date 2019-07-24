<?php 

$tarage = 7;

$array=[[1,2,3,4],[2,4,8,9],[4,6,10,13],[6,8,11,15]];

//print_r(count($array))
//print_r($array);
function Find($tarage,$array)
{
	$length = count($array);
	for ($i=0; $i < $length; $i++) { 
		if (is_array($tarage)) {
			echo "有";
		}else
		{
			echo "无";
		}
	}

}























 ?>