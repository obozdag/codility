<!DOCTYPE html>
<html>
<head>
	<title>Nesting</title>
</head>
<body>
	<?php

	function solution($str)
	{
		$len = strlen($str);
		$opens = 0;

		for ($i=0; $i < $len; $i++)
		{
			if($str[$i] == '(')
			{
				$opens++;
			}
			elseif($str[$i] == ')')
			{
				if($opens > 0) $opens--;
				else return 0;
			}
		}
		return $opens == 0 ? 1 : 0;
	}

	$str = "())";
	$str = "((";
	$str = "()";
	$str = "";
	$str = "(()(())())";
	$str = ")(";
	echo "<pre>";
	echo solution($str);
	?>
	<a href="https://app.codility.com/demo/results/training2G2N9S-S7S/">Solution</a>
</body>
</html>
