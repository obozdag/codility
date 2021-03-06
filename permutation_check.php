<!DOCTYPE html>
<html>
<head>
	<title>Permutation Check</title>
</head>
<body>
	<?php

	function solution($arr)
	{
		if(!$arr) return 0;

		if (min($arr) != 1) return 0;
		
		$len = count($arr);

		if (($max = max($arr)) < $len) return 0;

		sort($arr);

		for ($i=0; $i < $len; $i++) { 
			if($arr[$i] != $i+1) return 0;
		}

		return 1;
	}

	$arr = [130, 95, 162, 146, 84, 122, 132, 89, 154, 129, 22, 155, 14, 13, 107, 141, 17, 79, 120, 118, 96, 100, 112, 121, 200, 103, 178, 38, 26, 101, 136, 55, 143, 163, 183, 15, 184, 9, 80, 71, 199, 10, 24, 161, 156, 48, 115, 72, 109, 116, 42, 32, 189, 117, 133, 139, 177, 70, 23, 147, 63, 99, 29, 150, 18, 12, 36, 11, 188, 140, 45, 8, 192, 198, 172, 2, 7, 157, 81, 123, 186, 142, 67, 73, 92, 16, 179, 3, 41, 164, 57, 50, 33, 34, 47, 126, 158, 56, 87, 128, 44, 58, 54, 108, 78, 94, 149, 171, 187, 106, 61, 31, 148, 66, 110, 135, 28, 151, 193, 160, 119, 62, 21, 166, 75, 124, 90, 174, 182, 64, 52, 185, 104, 69, 60, 197, 93, 196, 167, 25, 59, 114, 35, 180, 86, 175, 125, 131, 195, 46, 102, 194, 65, 145, 111, 113, 53, 20, 137, 190, 30, 105, 91, 138, 4, 49, 77, 37, 170, 40, 85, 76, 176, 181, 74, 39, 68, 168, 97, 5, 191, 165, 173, 43, 134, 83, 1, 144, 82, 159, 6, 19, 153, 127, 88, 98, 51, 152, 169, 27];
	echo "<pre>";
	print_r(solution($arr));

	?>
</body>
</html>
