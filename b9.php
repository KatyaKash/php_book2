<?php
header('Content-type: text/html; charset=utf-8');
if (isset($_POST['a'])){
	$txt = $_POST['a'];
	$csym = iconv_strlen($txt);

	print_r('кол-во символов всего: '.$csym.'<br>');
	foreach (count_chars($txt, 1) as $i => $val) {
		print_r('"'.chr($i).'" составляет '.round(($val/$csym*100), 1).'% текста'.'<br>');
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
		<input type="textarea" name="a" placeholder="введите текст">
		<input type="submit" value="Посчитать количество символов в процентах">
	</form>
</body>
</html>