<?php
if (isset($_POST['a'])&&isset($_POST['b'])&&isset($_POST['c'])){
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$max = max($a, $b, $c);
	$sum = 0;
	if ($max == $a){
		$sum = $b**2+$c**2;
	}
	if ($max == $b){
		$sum = $a**2+$c**2;
	}
	if ($max == $c){
		$sum = $b**2+$a**2;
	}
	if ($max**2 == $sum){
		echo 'Являются';
	}
	else {
		echo 'Не являются';
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="a" placeholder="введите число а">
		<input type="text" name="b" placeholder="введите число b">
		<input type="text" name="c" placeholder="введите число c">
		<input type="submit" value="Проверить, что эти числа являются тройкой Пифагора">
	</form>
</body>
</html>