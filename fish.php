<!DOCTYPE html>
<html>
<head>
	<title>Fish</title>
</head>
<body>
	<?php

	function solution($a, $b)
	{
		$len = count($a);
		$stack = [];

		for ($i=0; $i < $len; $i++)
		{
			if (empty($stack))
			{
				array_push($stack, $i);
			}
			else
			{
				while (!empty($stack) && $b[$i] - $b[end($stack)] == -1 && $a[end($stack)] < $a[$i])
				{
					array_pop($stack);
				}

				if (!empty($stack))
				{
					if($b[$i] - $b[end($stack)] != -1) array_push($stack, $i);
				}
				else
				{
					array_push($stack, $i);
				}
			}
		}

		return count($stack);
	}

	$a = [4, 3, 2, 1, 5];
	$b = [0, 1, 0, 0, 0];
	printf("%d\n", solution($a, $b));
	?>
	<a href="https://app.codility.com/demo/results/trainingQVWS9E-ESP/">Solution</a>
</body>
</html>

