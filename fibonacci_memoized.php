<?php
function fibonacci($n)
{
	static $cache = [0, 1];

	if(isset($cache[$n]))
	{
		return $cache[$n];
	}

	$result = fibonacci($n-1) + fibonacci($n-2);
	$cache[$n] = $result;
	
	return $result;
}

for ($i=0; $i <= 1001; $i++)
	echo $i."- ".fibonacci($i).PHP_EOL;
