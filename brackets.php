<!DOCTYPE html>
<html>
<head>
	<title>Brackets</title>
</head>
<body>
	<?php

	function solution($str)
	{
		$len = strlen($str);
		$left_arr = ['{', '[', '('];
		$right_arr = ['}', ']', ')'];
		$stack = [];
		$left = false;
		$right = false;

		for ($i=0; $i < $len; $i++)
		{
			$left = array_search($str[$i], $left_arr);
			$right = array_search($str[$i], $right_arr);
			if ($left !== false)
			{
				$stack[] = $str[$i];
			}
			elseif ($right !== false)
			{
				if (empty($stack) || array_search(end($stack), $left_arr) !== $right)
				{
					return 0;
				}
				else
				{
					array_pop($stack);
				}
			}
		}

		return empty($stack) ? 1 : 0;
	}

	$str = "{[()()]}";
	$str = "([)()]";
	$str = "";
	$str = "}{";
	$str = "{{";
	echo "<pre>";
	echo solution($str);
	?>
	<a href="https://app.codility.com/demo/results/trainingVE6HY7-AMQ/">Solution</a>
</body>
</html>
