<!DOCTYPE html>
<html>
<head>
	<title>Stone Wall</title>
</head>
<body>
	<?php

	function solution($arr)
	{
		$len = count($arr);
		$blocks = 0;
		$stack = [];

		for ($i=0; $i < $len; $i++)
		{
			while ($stack && end($stack) > $arr[$i])
			{
				array_pop($stack);
			}

			if (end($stack) < $arr[$i])
			{
				$blocks++;
				$stack[] = $arr[$i];
			}
		}

		return $blocks;
	}

	$arr = [8, 8, 5, 7, 9, 8, 7, 4, 8];
	echo "<pre>";
	echo solution($arr);
	?>
	<a href="https://app.codility.com/demo/results/trainingK2SYSW-BS7/">Solution</a>
</body>
</html>
