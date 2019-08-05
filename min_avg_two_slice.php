<!DOCTYPE html>
<html>
<head>
	<title>Min Avg of Two Slices</title>
</head>
<body>
	<?php
	function solution($arr)
	{
		$min_avg = ($arr[0]+$arr[1])/2;
		$min_i = 0;

		$len = count($arr);
		if($len>2)
		{
			for($i=0; $i < $len-1; $i++)
			{
				if(($arr[$i]+$arr[$i+1])/2 < $min_avg)
				{
					$min_avg = ($arr[$i]+$arr[$i+1])/2;
					$min_i = $i;
				}
				if($arr[$i+2] && ($arr[$i]+$arr[$i+1]+$arr[$i+2])/3 < $min_avg)
				{
					$min_avg = ($arr[$i]+$arr[$i+1]+$arr[$i+2])/3;
					$min_i = $i;
				}
			}
		}
		
		return $min_i;
	}

	$arr = [4, 2, 2, 5, 1, 5, 8];
	echo "<pre>";
	print_r(solution($arr));
	?>
	<a href="https://app.codility.com/demo/results/trainingZC4K29-26V/">Solution</a>
</body>
</html>
