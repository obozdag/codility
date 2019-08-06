<!DOCTYPE html>
<html>
<head>
	<title>Triangle</title>
</head>
<body>
	<?php
	function solution($arr)
	{
		$len = count($arr);
		if ($len<3)
		{
			return 0;
		}
		
		sort($arr);
		
		for ($i=0; $i < $len-2; $i++)
		{
			if($arr[$i]+$arr[$i+1]>$arr[$i+2]) return 1;
		}
		return 0;
	}

	$arr = [10, 2, 5, 1, 8, 20];
	$arr = [10, 50, 5, 1];
	echo "<pre>";
	print_r(solution($arr));
	?>
	<a href="https://app.codility.com/demo/results/trainingUNGTZU-A6V/">Solution</a>
</body>
</html>
