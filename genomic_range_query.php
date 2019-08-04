<!DOCTYPE html>
<html>
<head>
	<title>Genomic Range Query</title>
</head>
<body>
	<?php

	function solution($str, $p, $q)
	{
		$len = count($q);
		for ($i=0; $i < $len; $i++)
		{
			$substr = substr($str, $p[$i], $q[$i]-$p[$i]+1);
			if(strpos($substr, 'T') !== false) $impacts[$i] = 4;
			if(strpos($substr, 'G') !== false) $impacts[$i] = 3;
			if(strpos($substr, 'C') !== false) $impacts[$i] = 2;
			if(strpos($substr, 'A') !== false) $impacts[$i] = 1;
		}

		return $impacts;
	}

	$str = 'CAGCCTA';
	$p = [2, 5, 0];
	$q = [4, 5, 6];
	echo "<pre>";
	print_r(solution($str, $p, $q));
	?>
	<a href="https://app.codility.com/demo/results/trainingKEBD2F-FEK/">Solution</a>
</body>
</html>
