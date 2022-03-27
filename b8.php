<?php
header('Content-type: text/html; charset=utf-8');
if (isset($_POST['a'])){
	$txt = $_POST['a'];
	$csym = iconv_strlen($txt);
	$cslov = str_word_count($txt, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");

	print_r('кол-во слов: '.$cslov.', кол-во символов:'.$csym);
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
		<input type="submit" value="Посчитать">
	</form>
</body>
</html>