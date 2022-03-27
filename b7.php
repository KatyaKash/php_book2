
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		<h3>введите дату рождения как в примере:</h3>
		<input type="text" name="a" placeholder="03.12.2000"> 
		<input type="submit" value="узнать, сколько до др">
	</form>
	<h3>
		<?php
			if (isset($_POST['a'])){
				$bday_input = date('d.m.Y', (strtotime($_POST['a'])));

				$cur_year = date('Y', time());
				$bday_time = mktime(0, 0, 0, date('m', (strtotime($_POST['a']))),date('d', (strtotime($_POST['a']))), $cur_year);


				if (date('d.m.Y', $bday_time)==date('d.m.Y', time())){
					echo 'др сегодня';
				}
				else if ($bday_time>time()) {
					echo 'дней до др: '.round(($bday_time-time())/60/60/24);
				}
				else{
					$bday_time = mktime(0, 0, 0, date('m', (strtotime($_POST['a']))), date('d', (strtotime($_POST['a']))), $cur_year+1);
					echo 'дней до др: '.round(($bday_time-time())/60/60/24);
				}

			}

	?>
	</h3>
</body>
</html>