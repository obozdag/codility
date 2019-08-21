<!DOCTYPE html>
<html>
<head>
	<title>Cyclic Rotation 2</title>
</head>
<body>

<?php 
function solution($arr, $rot)
{
	$len = count($arr);
	$new = [];
	for ($i=0; $i < $len; $i++)
	{
		$offset = $i-$rot%$len;
		if($offset<0) $offset = $len+$offset;
		$new[] = $arr[$offset];
	}
	return $new;
}
$arr = [3, 4, 5, 6, 7];
$rot = 3;
print_r(solution($arr, $rot));
?>
<a href="https://app.codility.com/demo/results/training4JR2MV-H3X/">Solution</a>
</body>
</html>
